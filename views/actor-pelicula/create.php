<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ActorPelicula */

$this->title = 'Create Actor Pelicula';
$this->params['breadcrumbs'][] = ['label' => 'Actor Peliculas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="actor-pelicula-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
