<?php
/**
 * @var $this \yii\web\View
 * @var $url string
 */
?>
<?= Yii::t('frontend', 'Your activation link: {url}', ['url' => Yii::$app->formatter->asUrl($url)]) ?>
