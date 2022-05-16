<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use app\models\Socio;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SocioSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Socios';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="socio-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Socio', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'SOC_ID',
            'SOC_CEDULA',
            'SOC_NOMBRE',
            'SOC_DIRECCION',
            'SOC_TELEFONO',
            //'SOC_CORREO',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Socio $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'SOC_ID' => $model->SOC_ID]);
                 }
            ],
        ],
    ]); ?>


</div>
