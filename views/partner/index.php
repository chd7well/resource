<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel chd7well\resource\models\PartnerSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('resource', 'Partners');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="partner-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('resource', 'Create {modelClass}', [
    'modelClass' => 'Partner',
]), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ID',
            'partnername',
            'title_ID',
            'givenname',
            'surename',
            // 'street',
            // 'zip',
            // 'city',
            // 'country_ID',
            // 'email:email',
            // 'website',
            // 'phone',
            // 'comment',
            // 'active',
            // 'language',
            // 'parent_ID',
            // 'is_customer',
            // 'customer_number',
            // 'is_supplier',
            // 'supplier_number',
            // 'is_company',
            // 'vat',
            // 'vat_subjected',
            // 'vat_checked',
            // 'is_employee',
            // 'employee_number',
            // 'is_petowner',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
