<?php
/**
 * Created by PhpStorm.
 * User: max
 * Date: 20.11.16
 * Time: 2:14
 */

namespace app\models;

use Yii;
use yii\base\Model;

class IndexModel extends Model
{
    public $content;

    public function setContent($content){
        $this->content = Yii::$app->response->content = $content;
        return $this->content;
    }

}