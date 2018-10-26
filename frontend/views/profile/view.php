<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\User */

$this->title = 'Profile: ' . $model->username;
$this->params['breadcrumbs'][] = ['label' => 'Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

?>
<section class="content">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-md-offset-2">

                <p>
                    <?= Html::a('Update', ['update'], ['class' => 'btn btn-primary']) ?>
                    <?= Html::a('Delete', ['delete'], [
                        'class' => 'btn btn-danger',
                        'data' => [
                            'confirm' => 'Are you sure you want to delete this item?',
                            'method' => 'post',
                        ],
                    ]) ?>
                </p>
                <h1><?print_r($model->userDetails->country);?></h1>

                <?= DetailView::widget([
                    'model' => $model,
                    'attributes' => [
                        //'id',
                        'username',
                        //'auth_key',
                        //'password_hash',
                        //'password_reset_token',
                        'email:email',
                        'firstname',
                        'lastname',
                        'see_profile',
                        'age',
                        'user_type',
                        'help_others',
                        'referrer',
                        [
                            'attribute' => 'status',
                            'label' => 'Account Status',
                            'value' => $model->status == 10 ? 'Account Active' : 'Account Inactive'
                        ],
                        [
                            'attribute' => 'created_at',
                            'label' => 'Registered Date',
                            'format' => 'date'
                        ],

                        [
                            'label' => 'Occupation',
                            'value'=>$profile->occupation
                        ],
                        ['label'=>'Country','value'=>$profile->country],
                        'userDetails.state',
                        'userDetails.street_name',
                        'userDetails.house_no',
                        'userDetails.lga',
                        //'updated_at',
                    ],
                ]) ?>
            </div>
        </div>
    </div>
</section>
