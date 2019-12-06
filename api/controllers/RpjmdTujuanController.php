<?php

namespace api\controllers;

use Yii;
use common\models\RpjmdTujuan;
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
 * RpjmdTujuanController implements the CRUD actions for RpjmdTujuan model.
 */
class RpjmdTujuanController extends Controller
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

        $query = RpjmdTujuan::find();
        
        $jlh_data = $query->count();
        $pagination = new Pagination(['totalCount' => $jlh_data, 'pageSize'=>$limit]);
        $model = $query->offset($offset)
            ->limit($pagination->limit)
            ->all();

        $data = [];
        foreach ($model as $key => $value):
            $data[$key]['kd_misi'] = $value->kd_misi;
            $data[$key]['kd_tujuan'] = $value->kd_tujuan;
            $data[$key]['tujuan'] = $value->tujuan;
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
        
        $model = new RpjmdTujuan();
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

    public function actionUbah($kd_misi, $kd_tujuan){
        
        $model = $this->findModel($kd_misi, $kd_tujuan);
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

    public function actionHapus($kd_misi, $kd_tujuan){
        
        $status = false;
        $data = null;
        $total_data = 0;
        $pesan = "Data gagal dihapus";

        $model = $this->findModel($kd_misi, $kd_tujuan);

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
     * Finds the RpjmdTujuan model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $kd_misi
     * @param integer $kd_tujuan
     * @return RpjmdTujuan the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($kd_misi, $kd_tujuan)
    {
        if (($model = RpjmdTujuan::findOne(['kd_misi' => $kd_misi, 'kd_tujuan' => $kd_tujuan])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    
}
