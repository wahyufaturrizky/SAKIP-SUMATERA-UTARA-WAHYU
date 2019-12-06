<?php

namespace common\api;

use Yii;
use yii\base\Model;
use yii\web\UploadedFile;
use yii\httpclient\Client;
use yii\data\Pagination;

class ApiUser extends Model
{
    // kebutuhan wajib
    public $url = []; // sesuaikan di construct
    public $limit = 20; // jumlah data yang diload saat memanggil API
    public $response;
    public $conditional = [];
    public $data = [];


    //========== fungsi wajib api ==========//

    public function __construct() {

        $this->url['semua'] = Yii::$app->params['sakip']['baseUrl']."/api/api/data";
        $this->url['tambah'] = Yii::$app->params['sakip']['baseUrl']."/api/api/tambah";
        $this->url['ubah'] = Yii::$app->params['sakip']['baseUrl']."/api/api/ubah";
        $this->url['hapus'] = Yii::$app->params['sakip']['baseUrl']."/api/api/hapus";
    }

    /**
     * Static constructor / factory
     */
    public static function find() {
        $instance = new self();
        return $instance;
    }

    /**
     * set limit
     */
    public function limit($limit) {
        $this->limit = $limit;
        return $this;
    }

    public function where($array) {
        foreach ($array as $key => $value):
            $this->conditional[$key] = $value;
        endforeach;

        return $this;
    }

    public function data($array) {
        foreach ($array as $key => $value):
            $this->data[$key] = $value;
        endforeach;

        return $this;
    }

    public function all() {

        $token = Yii::$app->sakip->token();
        $url = $this->url['semua'];

        $client = new Client(['baseUrl' => "{$url}?limit={$this->limit}"]);

        $response_api = $client->createRequest()
            ->setMethod('GET')
            ->setData($this->conditional)
            ->addHeaders([
                'Authorization' => "Bearer $token"
            ])
            ->send();

        $this->response = $response_api->data;
        return $this->response;
    }

    public function tambah() {

        $token = Yii::$app->sakip->token();
        $url = $this->url['tambah'];

        $client = new Client(['baseUrl' => "{$url}"]);

        $response_api = $client->createRequest()
            ->setMethod('POST')
            ->setData($this->data)
            ->addHeaders([
                'Authorization' => "Bearer $token"
            ])
            ->send();

        $this->response = $response_api->data;
        return $this;
    }
    
    //========== akhir fungsi wajib api ==========//
    
    
}