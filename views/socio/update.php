<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Socio */

$this->title = 'Update Socio: ' . $model->SOC_ID;
$this->params['breadcrumbs'][] = ['label' => 'Socios', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->SOC_ID, 'url' => ['view', 'SOC_ID' => $model->SOC_ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="socio-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
