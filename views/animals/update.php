<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Land */

$this->title = 'Update Land: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Lands', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->number]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="land-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
