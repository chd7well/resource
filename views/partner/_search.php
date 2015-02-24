<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model chd7well\resource\models\PartnerSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="partner-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ID') ?>

    <?= $form->field($model, 'partnername') ?>

    <?= $form->field($model, 'title_ID') ?>

    <?= $form->field($model, 'givenname') ?>

    <?= $form->field($model, 'surename') ?>

    <?php // echo $form->field($model, 'street') ?>

    <?php // echo $form->field($model, 'zip') ?>

    <?php // echo $form->field($model, 'city') ?>

    <?php // echo $form->field($model, 'country_ID') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'website') ?>

    <?php // echo $form->field($model, 'phone') ?>

    <?php // echo $form->field($model, 'comment') ?>

    <?php // echo $form->field($model, 'active') ?>

    <?php // echo $form->field($model, 'language') ?>

    <?php // echo $form->field($model, 'parent_ID') ?>

    <?php // echo $form->field($model, 'is_customer') ?>

    <?php // echo $form->field($model, 'customer_number') ?>

    <?php // echo $form->field($model, 'is_supplier') ?>

    <?php // echo $form->field($model, 'supplier_number') ?>

    <?php // echo $form->field($model, 'is_company') ?>

    <?php // echo $form->field($model, 'vat') ?>

    <?php // echo $form->field($model, 'vat_subjected') ?>

    <?php // echo $form->field($model, 'vat_checked') ?>

    <?php // echo $form->field($model, 'is_employee') ?>

    <?php // echo $form->field($model, 'employee_number') ?>

    <?php // echo $form->field($model, 'is_petowner') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('resource', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('resource', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
