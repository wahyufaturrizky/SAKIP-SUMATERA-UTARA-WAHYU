<?php
/**
 * This is the template for generating a CRUD controller class file.
 */

use yii\helpers\StringHelper;
use yii\db\ActiveRecordInterface;


/* @var $this yii\web\View */
/* @var $generator yii\gii\generators\crud\Generator */

$controllerClass = StringHelper::basename($generator->controllerClass);

echo "<?php\n";
?>

namespace <?= StringHelper::dirname(ltrim($generator->controllerClass, '\\')) ?>;

use Yii;
use yii\base\Model;
use yii\httpclient\Client;

/** 
 * usage : 
 * on controller ->
 * use common\api\<?= $controllerClass ?>;
 * @author abdil <abdiillah98@gmail.com>
 * 
 * $allDataLimitPage = <?= $controllerClass ?>::find()->limit(1)->page(1)->all();
 * $allData = <?= $controllerClass ?>::find()->all();
 * $addData = <?= $controllerClass ?>::add()->data(['columnname' => 'value'])->all();
 * $editData = <?= $controllerClass ?>::edit()->where(['pkcolumn' => 'value'])->data(['columnname' => 'value'])->save();
 * $deleteData = <?= $controllerClass ?>::find()->where(['pkcolumn' => 'value'])->delete();
 * 
 * 
 * 
 * 
*/

class <?= $controllerClass ?> extends Model
{

    public $url = []; // adjustment at construct which is a built in php function
    public $limit = 20; // size of data when call that api endpoint
    public $page = 1; // paging of data when call that api endpoint
    public $response;
    public $conditional= [];
    public $data = [];



    public function __construct() {

        $this->url['all'] = Yii::$app->params['sakip']['baseUrl']."/api/controllername/data";
        $this->url['add'] = Yii::$app->params['sakip']['baseUrl']."/api/controllername/tambah";
        $this->url['edit'] = Yii::$app->params['sakip']['baseUrl']."/api/controllername/ubah";
        $this->url['delete'] = Yii::$app->params['sakip']['baseUrl']."/api/controllername/hapus";
    }

    /**
     * Static constructor / factory
     */
    public static function find() {
        $instance = new self();
        return $instance;
    }

    /**
     * Static constructor / factory
     */
    public static function add() {
        $instance = new self();
        return $instance;
    }

    /**
     * Static constructor / factory
     */
    public static function edit() {
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

    /**
     * set page
     */
    public function page($page) {
        $this->page = $page;
        return $this;
    }

    public function where($array) {
        foreach ($array as $key => $value):
            $this->conditional[$key] = $value;
        endforeach;

        return $this;
    }

    public function data($array) {
        $this->data = $array;
        return $this;
    }

    /**
     *  
     * @return array information result get data 
    */ 

    public function all() : array {

        $token = Yii::$app->sakip->token();
        $url = $this->url['all'];

        $client = new Client(['baseUrl' => "{$url}?limit={$this->limit}&halaman={$this->page}"]);

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

    /**
     *  
     * @return array information result add/update data 
    */ 

    public function save() : array {
        $url = $this->url['add'];

        if(count($this->conditional) > 0){
            $url = $this->url['edit'];
            $params = "?";
            foreach($this->conditional as $k => $val){
                $params .= "{$k}={$val}&";    
            }
            $url .= $params; 
        }

        $token = Yii::$app->sakip->token();

        $client = new Client(['baseUrl' => "{$url}"]);

        $response_api = $client->createRequest()
            ->setMethod('POST')
            ->setData($this->data)
            ->addHeaders([
                'Authorization' => "Bearer $token"
            ])
        ->send();

        $this->response = $response_api->data;
        return $this->response;
    }

    /**
     *  
     * @return array information result delete data 
    */ 

    public function delete() : array {
        $url = $this->url['delete'];

        if(count($this->conditional) > 0){
            $params = "?";
            foreach($this->conditional as $k => $val){
                $params .= "{$k}={$val}&";    
            }
            $url .= $params; 
        }

        $token = Yii::$app->sakip->token();

        $client = new Client(['baseUrl' => "{$url}"]);
        
        $response_api = $client->createRequest()
            ->setMethod('GET')
            ->addHeaders([
                'Authorization' => "Bearer $token"
            ])
            ->send();

        $this->response = $response_api->data;
        return $this->response;
    }
}
