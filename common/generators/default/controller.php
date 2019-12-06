<?php
/**
 * This is the template for generating a CRUD controller class file.
 */

use yii\helpers\StringHelper;
use yii\db\ActiveRecordInterface;


/* @var $this yii\web\View */
/* @var $generator yii\gii\generators\crud\Generator */

$controllerClass = StringHelper::basename($generator->controllerClass);
$modelClass = StringHelper::basename($generator->modelClass);
$searchModelClass = StringHelper::basename($generator->searchModelClass);
if ($modelClass === $searchModelClass) {
    $searchModelAlias = $searchModelClass . 'Search';
}

/* @var $class ActiveRecordInterface */
$class = $generator->modelClass;
$pks = $class::primaryKey();
$urlParams = $generator->generateUrlParams();
$actionParams = $generator->generateActionParams();
$actionParamComments = $generator->generateActionParamComments();

echo "<?php\n";
?>

namespace <?= StringHelper::dirname(ltrim($generator->controllerClass, '\\')) ?>;

use Yii;
use <?= ltrim($generator->modelClass, '\\') ?>;
<?php if (!empty($generator->searchModelClass)): ?>
use <?= ltrim($generator->searchModelClass, '\\') . (isset($searchModelAlias) ? " as $searchModelAlias" : "") ?>;
<?php else: ?>
<?php endif; ?>
use yii\rest\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use \yii\web\Response;
use yii\helpers\ArrayHelper;
use yii\filters\auth\HttpBearerAuth;
use yii\filters\auth\QueryParamAuth;
use filsh\yii2\oauth2server\filters\ErrorToExceptionFilter;
use filsh\yii2\oauth2server\filters\auth\CompositeAuth;
use yii\data\Pagination;
use yii\bootstrap\ActiveForm;

/**
 * <?= $controllerClass ?> implements the CRUD actions for <?= $modelClass ?> model.
 */
class <?= $controllerClass ?> extends <?= StringHelper::basename($generator->baseControllerClass) . "\n" ?>
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return ArrayHelper::merge(parent::behaviors(), [
            'authenticator' => [
                'class' => CompositeAuth::className(),
                'authMethods' => [
                    ['class' => HttpBearerAuth::className()],
                    ['class' => QueryParamAuth::className(), 'tokenParam' => 'accessToken'],
                ]
            ],
            'exceptionFilter' => [
                'class' => ErrorToExceptionFilter::className()
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'data'  => ['GET'],
                    'tambah'   => ['POST'],
                    'ubah'   => ['POST'],
                    'hapus'   => ['GET'],
                ],
            ],
        ]);
    }

    public function actionData($limit=20, $halaman = 1){
        $offset = ($halaman-1) * $limit;
        $content = [];

        $query = <?=$modelClass?>::find();
        
        $jlh_data = $query->count();
        $pagination = new Pagination(['totalCount' => $jlh_data, 'pageSize'=>$limit]);
        $model = $query->offset($offset)
            ->limit($pagination->limit)
            ->all();

        $data = [];
        foreach ($model as $key => $value):
    <?php foreach ($generator->getColumnNames() as $name) { ?>
        $data[$key]['<?= $name ?>'] = $value-><?=$name?>;
    <?php } ?>
    endforeach;
        
        if($model){
            $content['success'] = true;
            $content['message'] = 'Data Ditemukan';
            $content['paging'] = [
                'jumlah_data' => $jlh_data,
                'jumlah_halaman' => $pagination->getPageCount(),
                'limit' => $pagination->getLimit(),
                'halaman' => $halaman,
            ];
            $content['data'] = $data;
        }
        else{
            $content['success'] = false;
            $content['message'] = 'Data Tidak Ditemukan';
        }

        Yii::$app->response->format = Response::FORMAT_JSON;

        return $content;
    }

    public function actionTambah(){
        
        $model = new <?=$modelClass?>();
        $data = Yii::$app->request->post();
        $total = 0;
        $data_masuk = null;
        $status = false;
        $pesan = "";

        if($data && Yii::$app->api->validateFormData($data, $model->attributes())){
            foreach($data as $key => $val){
                $model->$key = $val;
            }
            if($model->save()){
                $status = true;
                $total = 1;
                $data_masuk = $model;
                $pesan = "Data berhasil diinput";
            }else{
                $pesan = ActiveForm::validate($model);
            }
        }

        Yii::$app->response->format = Response::FORMAT_JSON;

        return[
            'status' =>  $status,
            'total' => $total,
            'data' => $data_masuk,
            'pesan' => $pesan
        ];
    }

    public function actionUbah(<?= $actionParams ?>){
        
        $model = $this->findModel(<?= $actionParams ?>);
        $data = Yii::$app->request->post();
        $total = 0;
        $data_masuk = null;
        $status = false;
        $pesan = "";

        if($data && Yii::$app->api->validateFormData($data, $model->attributes())){
            foreach($data as $key => $val){
                $model->$key = $val;
            }
            if($model->save()){
                $status = true;
                $total = 1;
                $data_masuk = $model;
                $pesan = "Data berhasil diinput";
            }else{
                $pesan = ActiveForm::validate($model);
            }
        }

        Yii::$app->response->format = Response::FORMAT_JSON;

        return[
            'status' =>  $status,
            'total' => $total,
            'data' => $data_masuk,
            'pesan' => $pesan
        ];
    }

    public function actionHapus(<?= $actionParams ?>){
        
        $status = false;
        $data = null;
        $total_data = 0;
        $pesan = "Data gagal dihapus";

        $model = $this->findModel(<?= $actionParams ?>);

        if($model){
            $model->delete();
            $status = true;
            $data = $model;
            $total_data = 1;
            $pesan = "Data berhasil dihapus";

        }

        Yii::$app->response->format = Response::FORMAT_JSON;

        return[
            'status' =>  $status,
            'total' => $total_data,
            'data' => $data,
            'pesan' => $pesan,
        ];
    }

    /**
     * Finds the <?= $modelClass ?> model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * <?= implode("\n     * ", $actionParamComments) . "\n" ?>
     * @return <?=                   $modelClass ?> the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel(<?= $actionParams ?>)
    {
<?php
if (count($pks) === 1) {
    $condition = '$id';
} else {
    $condition = [];
    foreach ($pks as $pk) {
        $condition[] = "'$pk' => \$$pk";
    }
    $condition = '[' . implode(', ', $condition) . ']';
}
?>
        if (($model = <?= $modelClass ?>::findOne(<?= $condition ?>)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(<?= $generator->generateString('The requested page does not exist.') ?>);
    }

    
}
