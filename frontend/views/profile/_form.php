<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\User */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype'=>'multipart/form-data']]); ?>
    <div class="col-lg-3 col-md-3 col-md-offset-1">
        <?= $form->field($model, 'image')->fileInput() ?>    </div>

    <div class="col-lg-8 col-md-8 ">
    <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'firstname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lastname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'see_profile')->dropDownList([ 'everyone' => 'Everyone', 'friends' => 'Friends', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'age')->textInput() ?>

    <?= $form->field($model, 'user_type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'help_others')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'referrer')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model->userDetails, 'country')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model->userDetails, 'state')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model->userDetails, 'lga')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model->userDetails, 'street_name')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model->userDetails, 'house_no')->textInput(['maxlength' => true]) ?>
    </div>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
