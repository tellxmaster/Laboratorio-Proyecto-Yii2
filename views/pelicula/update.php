<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Pelicula */

$this->title = 'Update Pelicula: ' . $model->PEL_ID;
$this->params['breadcrumbs'][] = ['label' => 'Peliculas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->PEL_ID, 'url' => ['view', 'PEL_ID' => $model->PEL_ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pelicula-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
