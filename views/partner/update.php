<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model chd7well\resource\models\Partner */

$this->title = Yii::t('resource', 'Update {modelClass}: ', [
    'modelClass' => 'Partner',
]) . ' ' . $model->ID;
$this->params['breadcrumbs'][] = ['label' => Yii::t('resource', 'Partners'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ID, 'url' => ['view', 'id' => $model->ID]];
$this->params['breadcrumbs'][] = Yii::t('resource', 'Update');
?>
<div class="partner-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
