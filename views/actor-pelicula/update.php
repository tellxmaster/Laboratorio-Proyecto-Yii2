<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ActorPelicula */

$this->title = 'Update Actor Pelicula: ' . $model->APL_ID;
$this->params['breadcrumbs'][] = ['label' => 'Actor Peliculas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->APL_ID, 'url' => ['view', 'APL_ID' => $model->APL_ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="actor-pelicula-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
