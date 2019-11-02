<?php

/* @var $this yii\web\View */
use yii\helpers\Url;
use yii\helpers\Html;
$this->title = 'ReBook Andorra';
$usuariActual = common\models\User::findIdentity(Yii::$app->user->id);
//$this->registerJsFile('@web/assets/vendors/custom/fullcalendar/fullcalendar.bundle.js', ['depends' => [yii\web\JqueryAsset::className()]]);
//$this->registerJsFile('@web/assets/app/js/dashboard.js', ['depends' => [yii\web\JqueryAsset::className()]]);
$this->registerCssFile(Url::base().'/assets/demo/default/base/style.bundle.css');
$this->registerCssFile(Url::base().'/assets/vendors/custom/datatables/datatables.bundle.css');
$this->registerJsFile(Url::base().'/assets/vendors/jquery/dist/jquery.js', ['depends' => [yii\web\JqueryAsset::className()]]);
$this->registerJsFile(Url::base().'/assets/vendors/base/vendors.bundle.js', ['depends' => [yii\web\JqueryAsset::className()]]);
$this->registerJsFile(Url::base().'/assets/demo/default/base/scripts.bundle.js', ['depends' => [yii\web\JqueryAsset::className()]]);
$this->registerJsFile(Url::base().'/assets/vendors/custom/datatables/datatables.bundle.js', ['depends' => [yii\web\JqueryAsset::className()]]);
$this->registerJsFile(Url::base().'/assets/demo/default/custom/crud/datatables/basic/scrollable.js', ['depends' => [yii\web\JqueryAsset::className()]]);
$this->registerJsFile(Url::base().'/assets/demo/default/custom/crud/datatables/basic/paginations.js', ['depends' => [yii\web\JqueryAsset::className()]]);
$this->registerJsFile(Url::base().'/js/dashboard.js', ['depends' => [yii\web\JqueryAsset::className()]]);
$this->registerJsFile(Url::base().'/js/custom.js', ['depends' => [yii\web\JqueryAsset::className()]]);
?>
<!--begin:: Widgets/Stats-->
<div class="m-portlet  m-portlet--unair" style="background:#2c2e3e; padding: 0% 2%;">
    <div class="m-portlet__body  m-portlet__body--no-padding">

            

    </div>
</div>
<!--end:: Widgets/Stats-->


