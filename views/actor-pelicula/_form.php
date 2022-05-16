<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ActorPelicula */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="actor-pelicula-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ACT_ID')->textInput() ?>

    <?= $form->field($model, 'PEL_ID')->textInput() ?>

    <?= $form->field($model, 'APL_PAPEL')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
