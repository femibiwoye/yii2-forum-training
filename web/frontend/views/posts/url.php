<?php
/**
 * Created by IntelliJ IDEA.
 * User: femiibiwoye
 * Date: 26/10/2018
 * Time: 2:50 PM
 */

use yii\helpers\Html;
use yii\helpers\Url;
?>


<?= Html::beginTag('section', ['class' => 'content']) ?>
<?= Html::beginTag('div', ['class' => 'container']) ?>
<?= Html::beginTag('div', ['class' => 'row']) ?>
<?= Html::beginTag('div', ['class' => 'col-lg-8 col-md-8 col-md-offset-2']) ?>
<?= Html::tag('h1','Url')?>

<?=Url::base()?>

<?= Html::tag('br')?>
<?=Url::home()?>
<?= Html::tag('br')?>
<?=Url::to(['/profile/update'])?>
<?= Html::tag('br')?>
@web <?=Url::to('@web')?>
<?= Html::tag('br')?>
<?=Url::toRoute(['/profile/update'])?>
<?= Html::tag('br')?>
@web <?=Url::toRoute('@web')?>
<?= Html::tag('br')?>
<?=Url::current()?>
<?= Html::tag('br')?>
<?=Url::isRelative('https://yii2-forum-training/posts') ? 'True':'False'?>
<?= Html::tag('br')?>
<?=Url::remember('https://google.com','test1')?>
<?= Html::tag('br')?>
<?= Yii::$app->request->referrer?>




<?= Html::endTag('div') ?>
<?= Html::endTag('div') ?>
<?= Html::endTag('div') ?>
<?= Html::endTag('section') ?>