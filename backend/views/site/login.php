<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use common\widgets\Alert;
use yii\helpers\Url;
$this->title = Yii::t('app','Login - ReBook Andorra');
?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title><?= $this->title ?></title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href="<?= Url::base()?>/metronictheme/assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="<?= Url::base()?>/metronictheme/assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
        <link href="<?= Url::base()?>/metronictheme/assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?= Url::base()?>/metronictheme/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="<?= Url::base()?>/metronictheme/assets/global/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
        <link href="<?= Url::base()?>/metronictheme/assets/global/plugins/select2/css/select2-bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="<?= Url::base()?>/metronictheme/assets/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="<?= Url::base()?>/metronictheme/assets/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN PAGE LEVEL STYLES -->
        <link href="<?= Url::base()?>/metronictheme/assets/pages/css/login-4.min.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="<?= Url::base()?>/favicon.ico" /> </head>
    <!-- END HEAD -->

    <body class=" login">
        <!-- BEGIN LOGO -->
        <div class="logo">
            <a href="/"><img src="<?= Url::base()?>/img/logo_rebook.png" alt="ReBook Andorra" style="width:150px;"/> </a>
        </div>
        <!-- END LOGO -->
        <!-- BEGIN LOGIN -->
        <div class="content">
            <!-- BEGIN LOGIN FORM -->
            <?php $form = ActiveForm::begin(['options' => ['class' => 'login-form']]); ?>
                <h3 class="form-title">LOGIN</h3>
                <?= Alert::widget() ?>
                <div class="form-group">
                    <?= $form->field($model, 'username',['options'=>[], 'inputOptions' => ['class' => 'form-control placeholder-no-fix', 'placeholder' => Yii::t('app','Username')]]) ?>
                    <?= $form->field($model, 'password',['options'=>[], 'inputOptions' => ['class' => 'form-control placeholder-no-fix', 'placeholder' => Yii::t('app','Password')]])->passwordInput() ?>
                </div>
                <div class="form-actions">
                    <?= Html::submitButton('Login', ['class' => 'btn green pull-right', 'name' => 'login-button']) ?>
                </div>
                <div class="forget-password">
                    <h4><?= Yii::t('app','No te acuerdas de tu contraseña?')?></h4>
                    <p><?= Yii::t('app','Dale click')?> <a href="javascript:;" id="forget-password"> <?= Yii::t('app','aquí')?> </a> <?= Yii::t('app','para generar una nueva.')?> </p>
                </div>
            <?php ActiveForm::end(); ?>
                
            <!-- END LOGIN FORM -->
            <!-- BEGIN FORGOT PASSWORD FORM -->
            <?php
                $form = ActiveForm::begin(
                    [
                        'action' => '/site/restaurarcontrasenya',
                        'options' => [
                            'class' => 'forget-form'
                         ]
                    ]
                );
                echo '<h3>'.Yii::t('app','Recuperar la clau').'</h3>';
                ?>
                <p> <?= Yii::t('app','Entra el teu correu electrònic per restaurar la clau.') ?> </p>
                <div class="form-group">
                    <div class="input-icon">
                        <i class="fa fa-envelope"></i>
                        <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Email" name="email" /> </div>
                </div>
                <?php
                echo '<div class="form-actions">';
                    echo Html::button(Yii::t('app','Enrere'), ['class' => 'btn red btn-outline', 'id' => 'back-btn']);
                    echo Html::submitButton(Yii::t('app','Enviar'), ['class' => 'btn green pull-right']);
                echo '</div>';  
                ActiveForm::end();
            ?>
            <!-- END FORGOT PASSWORD FORM -->

        </div>
        <!-- END LOGIN -->
        <!-- BEGIN COPYRIGHT -->
        <div class="copyright"> <?= date("Y") ?> &copy; ReBook Andorra</div>
        <!-- END COPYRIGHT -->
        <!--[if lt IE 9]>
<script src="<?= Url::base()?>/metronictheme/assets/global/plugins/respond.min.js"></script>
<script src="<?= Url::base()?>/metronictheme/assets/global/plugins/excanvas.min.js"></script> 
<script src="<?= Url::base()?>/metronictheme/assets/global/plugins/ie8.fix.min.js"></script> 
<![endif]-->
        <!-- BEGIN CORE PLUGINS -->
        <script src="<?= Url::base()?>/metronictheme/assets/global/plugins/jquery.min.js" type="text/javascript"></script>
        <script src="<?= Url::base()?>/metronictheme/assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="<?= Url::base()?>/metronictheme/assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
        <script src="<?= Url::base()?>/metronictheme/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <script src="<?= Url::base()?>/metronictheme/assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
        <script src="<?= Url::base()?>/metronictheme/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="<?= Url::base()?>/metronictheme/assets/global/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
        <script src="<?= Url::base()?>/metronictheme/assets/global/plugins/jquery-validation/js/additional-methods.min.js" type="text/javascript"></script>
        <script src="<?= Url::base()?>/metronictheme/assets/global/plugins/select2/js/select2.full.min.js" type="text/javascript"></script>
        <script src="<?= Url::base()?>/metronictheme/assets/global/plugins/backstretch/jquery.backstretch.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="<?= Url::base()?>/metronictheme/assets/global/scripts/app.min.js" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="<?= Url::base()?>/metronictheme/assets/pages/scripts/login-4.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <!-- END THEME LAYOUT SCRIPTS -->
    </body>

</html>
