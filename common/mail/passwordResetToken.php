<?php
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $user common\models\User */

$resetLink = Yii::$app->urlManager->createAbsoluteUrl(['site/reset-password', 'token' => $user->password_reset_token]);
?>

<?php if (\Yii::$app->language == 'es-ES') : ?>
Hola <?= Html::encode($user->username) ?>,<br>
<br>
Clique el link de abajo para resetear su contraseña:<br>
<?php else :?>
Hello <?= Html::encode($user->username) ?>,<br>
<br>
Follow the link below to reset your password:<br>
<?php endif; ?>

<?= Html::a(Html::encode($resetLink), $resetLink) ?>
