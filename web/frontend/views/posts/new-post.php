<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;
use yii\helpers\ArrayHelper;
use kartik\select2\Select2;

/* @var $this yii\web\View */
/* @var $model frontend\models\User */

$this->title = 'New post';


$categories = ArrayHelper::map($categories,'slug','title');

?>




<?= Html::beginTag('section', ['class' => 'content']) ?>

    <?= Html::beginTag('div', ['class' => 'container']) ?>

        <?= Html::beginTag('div', ['class' => 'row']) ?>

<?= Html::beginTag('div', ['class' => 'col-lg-8 col-md-8 col-md-offset-2']) ?>

<?= Html::tag('h1', Html::encode($this->title)) ?>

<?php $form = ActiveForm::begin(); ?>

<?//= $form->field($model, 'category')->dropDownList($categories,['prompt'=>'Select']) ?>
<?php

     
    // Tagging support Multiple
    //$model->category =  ['sport', 'family-matters']; // initial value
    echo $form->field($model, 'category')->widget(Select2::classname(), [
        'data' => $categories,
        'options' => ['placeholder' => 'Select a category ...', 'multiple' => true],
        'pluginOptions' => [
            'tags' => true,
            'tokenSeparators' => [',', ' '],
            'maximumInputLength' => 2
        ],
    ]);
    
?>
<?= $form->field($model, 'topic')->textInput(['maxlength' => true]) ?>
<?=$form->field($model,'body')->textarea(['rows'=>6])?>
<?=Html::beginTag('div',['class'=>'form-group'])?>
<?= Html::submitButton('Save', ['class' => 'btn btn-success btn-block']) ?>
<?=Html::endTag('div')?>
<?php ActiveForm::end(); ?>

<?= Html::endTag('div') ?>

        <?= Html::endTag('div') ?>

    <?= Html::endTag('div') ?>

<?= Html::endTag('section') ?>
