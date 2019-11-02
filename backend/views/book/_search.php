<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\BookSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="book-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'titulo') ?>

    <?= $form->field($model, 'subtitulo') ?>

    <?= $form->field($model, 'isbn') ?>

    <?= $form->field($model, 'codigo_barras') ?>

    <?php // echo $form->field($model, 'id_editorial') ?>

    <?php // echo $form->field($model, 'edicion') ?>

    <?php // echo $form->field($model, 'precio_compra') ?>

    <?php // echo $form->field($model, 'precio_venta') ?>

    <?php // echo $form->field($model, 'id_estado_libro') ?>

    <?php // echo $form->field($model, 'id_language') ?>

    <?php // echo $form->field($model, 'publicado_web') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
