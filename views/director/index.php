<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use app\models\Director;

/* @var $this yii\web\View */
/* @var $searchModel app\models\DirectorSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Directors';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="director-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Director', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'DIR_ID',
            'DIR_NOMBRE',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Director $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'DIR_ID' => $model->DIR_ID]);
                 }
            ],
        ],
    ]); ?>


</div>
