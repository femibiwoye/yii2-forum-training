<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Signup';
$this->params['breadcrumbs'][] = $this->title;
?>

<section class="content">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 breadcrumbf">
                <a href="#">Create New account</a>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-md-offset-2">



                <!-- POST -->
                <div class="post">
                    <form action="#" class="form newtopic" method="post">
                        <div class="postinfotop">
                            <h2>Create New Account</h2>
                        </div>

                        <!-- acc section -->
                        <div class="accsection">

                            <div class="topwrap">
                                <div class="userinfo pull-left">

                                </div>

                                <div class="col-md-12">
                                    <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>
<div class="row">
                                    <div class="col-md-6">
                                        <?= $form->field($model, 'firstname')->textInput(['autofocus' => true])->label('My Firstname') ?>
                                    </div>
                                    <div class="col-md-6">
                                        <?= $form->field($model, 'lastname')->textInput() ?>
                                    </div>
</div>
                                    <?= $form->field($model, 'username')->textInput(['placeholder'=>'Username'])->label(false) ?>

                                    <?= $form->field($model, 'email') ?>


                                    <?= $form->field($model, 'password')->passwordInput() ?>

                                    <div class="form-group">
                                        <?= Html::submitButton('Signup', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
                                    </div>

                                    <?php ActiveForm::end(); ?>
                                </div>

                                <div class="posttext pull-left">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <input type="text" placeholder="First Name" class="form-control" />
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <input type="text" placeholder="Last Name" class="form-control" />
                                        </div>
                                    </div>
                                    <div>
                                        <input type="text" placeholder="User Name" class="form-control" />
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <input type="password" placeholder="Password" class="form-control" id="pass" name="pass" />
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <input type="password" placeholder="Retype Password" class="form-control" id="pass2" name="pass2" />
                                        </div>
                                    </div>

                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div><!-- acc section END -->



                        <!-- acc section -->
                        <div class="accsection privacy">
                            <div class="acccap">
                                <div class="userinfo pull-left">&nbsp;</div>
                                <div class="posttext pull-left"><h3>Privacy</h3></div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="topwrap">
                                <div class="userinfo pull-left">&nbsp;</div>
                                <div class="posttext pull-left">

                                    <div class="row newtopcheckbox">
                                        <div class="col-lg-6 col-md-6">
                                            <div><p>Who can see my Profile?</p></div>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" id="everyone" /> Everyone
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" id="friends"  /> Only Friends
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div>
                                                <p>Share posts on Social Networks</p>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-3 col-md-4">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" id="fb"/> <i class="fa fa-facebook-square"></i>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-4">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" id="tw" /> <i class="fa fa-twitter"></i>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-4">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" id="gp"  /> <i class="fa fa-google-plus-square"></i>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div><!-- acc section END -->



                        <!-- acc section -->
                        <div class="accsection survey">
                            <div class="acccap">
                                <div class="userinfo pull-left">&nbsp;</div>
                                <div class="posttext pull-left">
                                    <div class="htext">
                                        <h3>Small Survey ( Optional )</h3>
                                    </div>
                                    <div class="hnotice">
                                        Answer this survey and Earn this Badge : <img src="images/icon5.jpg" alt="" />
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="topwrap">
                                <div class="userinfo pull-left">&nbsp;</div>
                                <div class="posttext pull-left">

                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <select name="old" id="old"  class="form-control" >
                                                <option value="" disabled selected>How Old are you?</option>
                                                <option value="op1">Option1</option>
                                                <option value="op2">Option2</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <select name="who" id="who"  class="form-control" >
                                                <option value="" disabled selected>Who are you?</option>
                                                <option value="op1">Option1</option>
                                                <option value="op2">Option2</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <select name="help" id="help"  class="form-control" >
                                                <option value="" disabled selected>Will you help others here?</option>
                                                <option value="op1">Option1</option>
                                                <option value="op2">Option2</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <select name="hear" id="hear"  class="form-control" >
                                                <option value="" disabled selected>Where do you hear about us?</option>
                                                <option value="op1">Option1</option>
                                                <option value="op2">Option2</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row newtopcheckbox">
                                        <div class="col-lg-6 col-md-6">
                                            <div><p>Some other question 1</p></div>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" id="everyone2" /> option 1
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" id="friends2"  /> option 2
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div>
                                                <p>Some other question 2</p>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" id="fb2"/> option 1
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" id="tw2" /> option 2
                                                        </label>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div><!-- acc section END -->





                        <!-- acc section -->
                        <div class="accsection networks">
                            <div class="acccap">
                                <div class="userinfo pull-left">&nbsp;</div>
                                <div class="posttext pull-left">
                                    <div class="htext">
                                        <h3>Social Networks ( Optional )</h3>
                                    </div>
                                    <div class="hnotice">
                                        Link Social Networks and Earn this Badge : <img src="images/icon6.jpg" alt="" />
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="topwrap">
                                <div class="userinfo pull-left">&nbsp;</div>
                                <div class="posttext pull-left">

                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <button class="btn btn-fb">Link Facebook Account</button>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <button class="btn btn-tw">Link Twitter Account</button>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <button class="btn btn-gp">Link Google + Account</button>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <button class="btn btn-pin">Link Pinterest Account</button>
                                        </div>
                                    </div>

                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div><!-- acc section END -->





                        <div class="postinfobot">

                            <div class="notechbox pull-left">
                                <input type="checkbox" name="note" id="note" class="form-control" />
                            </div>

                            <div class="pull-left lblfch">
                                <label for="note"> I agree with the Terms and Conditions of this site</label>
                            </div>

                            <div class="pull-right postreply">
                                <div class="pull-left smile"><a href="#"><i class="fa fa-smile-o"></i></a></div>
                                <div class="pull-left"><button type="submit" class="btn btn-primary">Sign Up</button></div>
                                <div class="clearfix"></div>
                            </div>


                            <div class="clearfix"></div>
                        </div>
                    </form>
                </div><!-- POST -->






            </div>

        </div>
    </div>

</section>


