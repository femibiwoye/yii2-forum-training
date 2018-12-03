<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\User */

$this->title = 'New post';

?>




<?= Html::beginTag('section', ['class' => 'content']) ?>
<?= Html::beginTag('div', ['class' => 'container']) ?>
<?= Html::beginTag('div', ['class' => 'row']) ?>
<?= Html::beginTag('div', ['class' => 'col-lg-8 col-md-8 col-md-offset-2']) ?>
<?=Html::tag('h1',Html::encode($this->title))?>




<?= Html::beginForm(['new-post'], 'POST', ['class' => 'form-horizontal']) ?>


<?= Html::beginTag('div', ['class' => 'form-group']) ?>
<?= Html::label('Your Topic', 'topic') ?>
<?= Html::input('text', 'topic', 'Hello Forum', ['class' => 'form-control', 'placeholder' => 'Input your topic', 'disabled' => 'disabled']) ?>
<?= Html::endTag('div') ?>

<?= Html::beginTag('div', ['class' => 'form-group']) ?>
<?= Html::label('Your Category', 'category') ?>
<?= Html::textInput('category', '', ['class' => 'form-control', 'placeholder' => 'Input your topic']) ?>
<?= Html::endTag('div') ?>

<?= Html::beginTag('div', ['class' => 'form-group']) ?>
<?= Html::label('Your Post Content', 'body') ?>
<?= Html::textarea('body', '', ['class' => 'form-control', 'placeholder' => 'Input your topic']) ?>
<?= Html::endTag('div') ?>

<?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>


<?= Html::tag('br') ?>

<?= Html::tag('hr', '', ['style' => 'color:red;']) ?>

<?= Html::tag('br') ?>
<?=Html::a( 'Goto page 2',['url'])?>
<?=Url::previous('test1')?>
<?= Html::tag('br') ?>

<?= Html::endForm() ?>
<?= Html::endTag('div') ?>
<?= Html::endTag('div') ?>
<?= Html::endTag('div') ?>
<?= Html::endTag('section') ?>


<section class="content">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-md-offset-2">
                <form action="" method="post" class="form-horizontal">
                    <div class="form-group">
                        <label for="topic">Topic</label>
                        <input type="text" name="topic" id="topic" class="form-control">
                    </div>
                </form>
            </div>


            <?php $form = ActiveForm::begin(); ?>

            <div class="col-lg-8 col-md-8 col-md-offset-2">
                <h1><?= Html::encode($this->title) ?></h1>
                <?= $form->field($model, 'topic')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'body')->textarea() ?>
                <div class="form-group">
                    <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
                </div>
            </div>


            <?php ActiveForm::end(); ?>

        </div>
    </div>
</section>
