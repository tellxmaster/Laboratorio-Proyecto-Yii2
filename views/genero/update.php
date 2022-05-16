<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Genero */

$this->title = 'Update Genero: ' . $model->GEN_ID;
$this->params['breadcrumbs'][] = ['label' => 'Generos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->GEN_ID, 'url' => ['view', 'GEN_ID' => $model->GEN_ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="genero-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
