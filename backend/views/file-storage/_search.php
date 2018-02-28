<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\search\FileStorageItemSearch */
/* @var $form yii\bootstrap\ActiveForm */
?>

<div class="file-storage-item-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'component') ?>

    <?= $form->field($model, 'base_url') ?>

    <?= $form->field($model, 'path') ?>

    <?= $form->field($model, 'type') ?>

    <?//= $form->field($model, 'size') ?>

    <?//= $form->field($model, 'name') ?>

    <?//= $form->field($model, 'upload_ip') ?>

    <?//= $form->field($model, 'created_at') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('backend', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('backend', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
