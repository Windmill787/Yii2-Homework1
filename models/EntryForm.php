<?php
/**
 * Created by PhpStorm.
 * User: max
 * Date: 19.11.16
 * Time: 18:23
 */

namespace app\models;

use yii\base\Model;

class EntryForm extends Model
{
    public $name;
    public $email;

    public function rules()
    {
        return [
            [['name', 'email'], 'required'],
            ['email', 'email'],
        ];
    }
}