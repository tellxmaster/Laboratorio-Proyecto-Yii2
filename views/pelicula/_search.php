<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PeliculaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pelicula-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'PEL_ID') ?>

    <?= $form->field($model, 'GEN_ID') ?>

    <?= $form->field($model, 'DIR_ID') ?>

    <?= $form->field($model, 'FOR_ID') ?>

    <?= $form->field($model, 'PEL_NOMBRE') ?>

    <?php // echo $form->field($model, 'PEL_COSTO') ?>

    <?php // echo $form->field($model, 'PEL_FECHA_ESTRENO') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
