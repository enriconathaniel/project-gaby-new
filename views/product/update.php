<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\MsProduct */

$this->title = 'Update Ms Product: ' . $model->productID;
$this->params['breadcrumbs'][] = ['label' => 'Ms Products', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->productID, 'url' => ['view', 'id' => $model->productID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ms-product-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
