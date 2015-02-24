<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model chd7well\resource\models\Partner */

$this->title = Yii::t('resource', 'Create {modelClass}', [
    'modelClass' => 'Partner',
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('resource', 'Partners'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="partner-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
