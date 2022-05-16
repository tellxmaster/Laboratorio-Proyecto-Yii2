<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Formato */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="formato-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'FOR_NOMBRE')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
