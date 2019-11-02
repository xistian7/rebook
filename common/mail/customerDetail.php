<?php
use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $customer common\models\Customer */

?>

El usuario <?= Html::encode($customer->name) ?> ha modificado sus datos.

<?= DetailView::widget([
    'model' => $customer,
    'attributes' => [
        'name',
        'company',
        //'address',
        //'city',
        //'region',
        //'zip',
        //'country.nombre:text:'.Yii::t('app','Country'),
        'nif',
        'email1',
        'email2',
        'phone1',
        'phone2'
    ],
]) ?>
