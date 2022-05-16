<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use app\models\Pelicula;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PeliculaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Peliculas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pelicula-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Pelicula', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'PEL_ID',
            'GEN_ID',
            'DIR_ID',
            'FOR_ID',
            'PEL_NOMBRE',
            //'PEL_COSTO',
            //'PEL_FECHA_ESTRENO',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Pelicula $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'PEL_ID' => $model->PEL_ID]);
                 }
            ],
        ],
    ]); ?>


</div>
