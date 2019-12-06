<?php

namespace api\controllers;

use Yii;
use common\models\RpjmdTaKegiatan;
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
 * RpjmdTaKegiatanController implements the CRUD actions for RpjmdTaKegiatan model.
 */
class RpjmdTaKegiatanController extends Controller
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

        $query = RpjmdTaKegiatan::find();
        
        $jlh_data = $query->count();
        $pagination = new Pagination(['totalCount' => $jlh_data, 'pageSize'=>$limit]);
        $model = $query->offset($offset)
            ->limit($pagination->limit)
            ->all();

        $data = [];
        foreach ($model as $key => $value):
            $data[$key]['no_program'] = $value->no_program;
            $data[$key]['kd_urusan'] = $value->kd_urusan;
            $data[$key]['kd_bidang'] = $value->kd_bidang;
            $data[$key]['kd_unit'] = $value->kd_unit;
            $data[$key]['kd_sub_unit'] = $value->kd_sub_unit;
            $data[$key]['kd_program'] = $value->kd_program;
            $data[$key]['kd_kegiatan'] = $value->kd_kegiatan;
            $data[$key]['kegiatan'] = $value->kegiatan;
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
        
        $model = new RpjmdTaKegiatan();
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

    public function actionUbah($kd_urusan, $kd_bidang, $kd_unit, $kd_sub_unit, $kd_program, $kd_kegiatan){
        
        $model = $this->findModel($kd_urusan, $kd_bidang, $kd_unit, $kd_sub_unit, $kd_program, $kd_kegiatan);
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

    public function actionHapus($kd_urusan, $kd_bidang, $kd_unit, $kd_sub_unit, $kd_program, $kd_kegiatan){
        
        $status = false;
        $data = null;
        $total_data = 0;
        $pesan = "Data gagal dihapus";

        $model = $this->findModel($kd_urusan, $kd_bidang, $kd_unit, $kd_sub_unit, $kd_program, $kd_kegiatan);

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
     * Finds the RpjmdTaKegiatan model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $kd_urusan
     * @param integer $kd_bidang
     * @param integer $kd_unit
     * @param integer $kd_sub_unit
     * @param integer $kd_program
     * @param integer $kd_kegiatan
     * @return RpjmdTaKegiatan the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($kd_urusan, $kd_bidang, $kd_unit, $kd_sub_unit, $kd_program, $kd_kegiatan)
    {
        if (($model = RpjmdTaKegiatan::findOne(['kd_urusan' => $kd_urusan, 'kd_bidang' => $kd_bidang, 'kd_unit' => $kd_unit, 'kd_sub_unit' => $kd_sub_unit, 'kd_program' => $kd_program, 'kd_kegiatan' => $kd_kegiatan])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    
}
