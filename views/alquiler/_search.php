<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AlquilerSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="alquiler-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ALQ_ID') ?>

    <?= $form->field($model, 'SOC_ID') ?>

    <?= $form->field($model, 'PEL_ID') ?>

    <?= $form->field($model, 'ALQ_FECHA_DESDE') ?>

    <?= $form->field($model, 'ALQ_FECHA_HASTA') ?>

    <?php // echo $form->field($model, 'ALQ_VALOR') ?>

    <?php // echo $form->field($model, 'ALQ_FECHA_ENTREGA') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
