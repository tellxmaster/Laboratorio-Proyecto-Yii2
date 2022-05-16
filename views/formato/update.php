<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Formato */

$this->title = 'Update Formato: ' . $model->FOR_ID;
$this->params['breadcrumbs'][] = ['label' => 'Formatos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->FOR_ID, 'url' => ['view', 'FOR_ID' => $model->FOR_ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="formato-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
