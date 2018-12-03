<?php
/**
 * Created by IntelliJ IDEA.
 * User: femiibiwoye
 * Date: 21/11/2018
 * Time: 12:48 PM
 */
use yii\widgets\ListView;

?>


<section class="content">
    <div class="container">
        <div class="row">
<?php
echo ListView::widget([
    'dataProvider' => $dataProvider,
    'itemOptions' => ['class' => 'item'],
    'itemView' => '_post',
    'pager' => ['class' => \kop\y2sp\ScrollPager::className()]
]);
?>
        </div>
    </div>
</section>