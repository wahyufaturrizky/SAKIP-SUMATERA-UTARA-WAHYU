<?php

namespace frontend\controllers;

use common\api\TestTabelApi;

class PengujianClientApiController extends \yii\web\Controller
{
    public function actionAllDataLimitPage()
    {
        $model = TestTabelApi::find()->limit(1)->page(5)->all();
        echo "<pre>";
        var_dump($model);
        echo "</pre>";
        exit;
    }

    public function actionAllData()
    {
        $model = TestTabelApi::find()->all();
        echo "<pre>";
        var_dump($model);
        echo "</pre>";
        exit;
    }

    public function actionAddData()
    {
        $model = TestTabelApi::add()
        ->data([
            'id' => 6,
            'nama' => 'abdiillah6',
            'alamat' => 'jl.Ampera 1 gg sedar',
        ])
        ->save();
        echo "<pre>";
        var_dump($model);
        echo "</pre>";
        exit;
    }

    public function actionEditData()
    {
        $model = TestTabelApi::edit()
        ->where([
            'id' => 6,
        ])
        ->data([
            'nama' => 'abdiillah ganteng',
            'alamat' => 'jl.Ampera 1 gg sedar',
        ])
        ->save();
        echo "<pre>";
        var_dump($model);
        echo "</pre>";
        exit;
    }

    public function actionDeleteData()
    {
        $model = TestTabelApi::find()
        ->where([
            'id' => 6,
        ])
        ->delete();
        echo "<pre>";
        var_dump($model);
        echo "</pre>";
        exit;
    }

}
