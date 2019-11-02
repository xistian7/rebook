<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Book */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="book-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'titulo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'subtitulo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'isbn')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'codigo_barras')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_editorial')->textInput() ?>

    <?= $form->field($model, 'edicion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'precio_compra')->textInput() ?>

    <?= $form->field($model, 'precio_venta')->textInput() ?>

    <?= $form->field($model, 'id_estado_libro')->textInput() ?>

    <?= $form->field($model, 'id_language')->textInput() ?>

    <?= $form->field($model, 'publicado_web')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
