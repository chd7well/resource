<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model chd7well\resource\models\Partner */

$this->title = $model->ID;
$this->params['breadcrumbs'][] = ['label' => Yii::t('resource', 'Partners'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="partner-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('resource', 'Update'), ['update', 'id' => $model->ID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('resource', 'Delete'), ['delete', 'id' => $model->ID], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('resource', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'ID',
            'partnername',
            'title_ID',
            'givenname',
            'surename',
            'street',
            'zip',
            'city',
            'country_ID',
            'email:email',
            'website',
            'phone',
            'comment',
            'active',
            'language',
            'parent_ID',
            'is_customer',
            'customer_number',
            'is_supplier',
            'supplier_number',
            'is_company',
            'vat',
            'vat_subjected',
            'vat_checked',
            'is_employee',
            'employee_number',
            'is_petowner',
        ],
    ]) ?>

</div>
