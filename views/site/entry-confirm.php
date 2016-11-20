<?php
/**
 * Created by PhpStorm.
 * User: max
 * Date: 19.11.16
 * Time: 18:57
 */

use yii\helpers\Html;

?>
<p>Вы ввели следующую информацию:</p>

<ul>
    <li><label>Name</label>: <?= Html::encode($model->name) ?></li>
    <li><label>Email</label>: <?= Html::encode($model->email) ?></li>
</ul>