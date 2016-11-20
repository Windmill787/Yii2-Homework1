<?php
/**
 * Created by PhpStorm.
 * User: max
 * Date: 20.11.16
 * Time: 1:49
 */

namespace app\controllers;

use app\models\IndexModel;
use yii\base\Controller;

class IndexController extends Controller
{
    public function actionIndex()
    {
        $object = new IndexModel();
        $object->setContent('Hello World');
        return $this->render('index', ['content' => $object->content]);
    }
}