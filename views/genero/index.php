<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use app\models\Genero;

/* @var $this yii\web\View */
/* @var $searchModel app\models\GeneroSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Generos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="genero-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Genero', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'GEN_ID',
            'GEN_NOMBRE',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Genero $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'GEN_ID' => $model->GEN_ID]);
                 }
            ],
        ],
    ]); ?>


</div>
