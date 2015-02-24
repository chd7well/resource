<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model chd7well\resource\models\Partner */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="partner-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'partnername')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'title_ID')->textInput() ?>

    <?= $form->field($model, 'givenname')->textInput(['maxlength' => 100]) ?>

    <?= $form->field($model, 'surename')->textInput(['maxlength' => 100]) ?>

    <?= $form->field($model, 'street')->textInput(['maxlength' => 100]) ?>

    <?= $form->field($model, 'zip')->textInput(['maxlength' => 24]) ?>

    <?= $form->field($model, 'city')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'country_ID')->textInput() ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'website')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'phone')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'comment')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'active')->textInput() ?>

    <?= $form->field($model, 'language')->textInput(['maxlength' => 11]) ?>

    <?= $form->field($model, 'parent_ID')->textInput() ?>

    <?= $form->field($model, 'is_customer')->textInput() ?>

    <?= $form->field($model, 'customer_number')->textInput(['maxlength' => 32]) ?>

    <?= $form->field($model, 'is_supplier')->textInput() ?>

    <?= $form->field($model, 'supplier_number')->textInput(['maxlength' => 32]) ?>

    <?= $form->field($model, 'is_company')->textInput() ?>

    <?= $form->field($model, 'vat')->textInput(['maxlength' => 32]) ?>

    <?= $form->field($model, 'vat_subjected')->textInput() ?>

    <?= $form->field($model, 'vat_checked')->textInput() ?>

    <?= $form->field($model, 'is_employee')->textInput() ?>

    <?= $form->field($model, 'employee_number')->textInput(['maxlength' => 32]) ?>

    <?= $form->field($model, 'is_petowner')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('resource', 'Create') : Yii::t('resource', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
