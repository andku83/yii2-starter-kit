<?php
/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */
/* @var $searchModel frontend\models\search\ArticleSearch */

use yii\bootstrap\ActiveForm;
use yii\helpers\Html;

$this->title = Yii::t('frontend', 'Articles')
?>
<div id="article-index">
    <h1>
        <?= Yii::t('frontend', 'Articles') ?>
    </h1>
    <span class="glyphicon glyphicon-search" data-toggle="collapse" data-target="#search-form"></span>
    <div class="collapse" id="search-form">
        <?php $form = ActiveForm::begin([
                'method' => 'GET',
                'options' => ['class' => 'form-inline']
        ]) ?>
            <div>
                <?= $form->field($searchModel, 'title')->label(false)->error(false) ?>
                <?= Html::submitButton(Yii::t('frontend', 'Search'), ['class' => 'btn btn-default']) ?>
            </div>
        <?php ActiveForm::end() ?>
    </div>
    <?= \yii\widgets\ListView::widget([
        'dataProvider' => $dataProvider,
        'pager' => [
            'hideOnSinglePage' => true,
        ],
        'itemView' => '_item'
    ])?>
</div>
