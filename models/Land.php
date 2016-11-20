<?php

namespace app\models;

use yii\db\ActiveRecord;

/**
 * This is the model class for table "land".
 *
 * @property integer $number
 * @property string $name
 * @property integer $legs
 * @property string $breed
 */
class Land extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'land';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'legs', 'breed'], 'required'],
            [['legs'], 'integer'],
            [['name'], 'string', 'max' => 40],
            [['breed'], 'string', 'max' => 60],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'number' => 'Number',
            'name' => 'Name',
            'legs' => 'Legs',
            'breed' => 'Breed',
        ];
    }
}
