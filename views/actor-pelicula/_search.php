<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ActorPeliculaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="actor-pelicula-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'APL_ID') ?>

    <?= $form->field($model, 'ACT_ID') ?>

    <?= $form->field($model, 'PEL_ID') ?>

    <?= $form->field($model, 'APL_PAPEL') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
