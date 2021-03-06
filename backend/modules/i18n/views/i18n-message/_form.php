<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\modules\i18n\models\I18nMessage */
/* @var $form yii\bootstrap\ActiveForm */
?>

<div class="i18n-message-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id')->textInput(['disabled'=>!$model->isNewRecord]) ?>

    <?php if (!$model->isNewRecord): ?>
        <?= $form->field($model, 'category')->textInput(['disabled'=>true]) ?>
        <?= $form->field($model, 'sourceMessage')->textInput(['disabled'=>true]) ?>
    <?php endif; ?>

    <?= $form->field($model, 'language')->textInput(['maxlength' => 16]) ?>

    <?= $form->field($model, 'translation')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('backend', 'Create') : Yii::t('backend', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
