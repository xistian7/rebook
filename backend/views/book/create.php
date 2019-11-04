<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Book */

$this->title = 'Nuevo libro';
$this->params['breadcrumbs'][] = ['label' => 'Books', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="book-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
