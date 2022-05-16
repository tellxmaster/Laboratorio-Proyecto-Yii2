<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Pelicula */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pelicula-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'GEN_ID')->textInput() ?>

    <?= $form->field($model, 'DIR_ID')->textInput() ?>

    <?= $form->field($model, 'FOR_ID')->textInput() ?>

    <?= $form->field($model, 'PEL_NOMBRE')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'PEL_COSTO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'PEL_FECHA_ESTRENO')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
