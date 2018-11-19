<?php

/* @var $this yii\web\View */

$this->title = 'Yii2 Forum Backend';


//echo Yii::$app->security->generatePasswordHash("femi");

$p1 = '$2y$13$y9C5FJ.xC0H.C7kHqrSi5uIMBTVMjtRwkBUcZIMecpmRZjUJoibwK';
$p2 = 'femi';

if(Yii::$app->security->validatePassword($p2,$p1)){
//if(1 == 1.0){
    echo 'true';
}else{
    echo 'false';
}

$security = Yii::$app->security;

echo '<br>';

echo time().mt_rand(10,99);
echo '<br>';
echo Yii::$app->security->generateRandomString(20);
echo '<br>';
echo $e1 = Yii::$app->security->encryptByPassword('password','femi');
echo '<br>';
echo $e3 = $security->decryptByPassword( $e1,'femi');
echo '<br>';
$key1 = $security->generateRandomKey();
echo $enc1 = $security->encryptByKey('mypassword',$key1);
echo '<br>';
echo 'decrypt: '.$security->decryptByKey($enc1,$key1);
echo '<br>';
print_r($security->allowedCiphers[ 'AES-256-CBC']);
echo '<br>';
echo md5('hello');
echo '<br>';
echo sha1('hi');
echo '<br>';
 if($security->compareString('He','He')){
echo 'String true';
}else{
     echo 'String false';
 }
echo '<br>';





?>

