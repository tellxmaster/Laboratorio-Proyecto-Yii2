<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use app\models\ActorPelicula;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ActorPeliculaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Actor Peliculas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="actor-pelicula-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Actor Pelicula', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'APL_ID',
            'ACT_ID',
            'PEL_ID',
            'APL_PAPEL',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, ActorPelicula $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'APL_ID' => $model->APL_ID]);
                 }
            ],
        ],
    ]); ?>


</div>
