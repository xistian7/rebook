<?php

/* @var $this \yii\web\View */
/* @var $content string */

use common\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use backend\assets\AppAsset;
use yii\helpers\Url;

$usuariActual = common\models\User::findIdentity(Yii::$app->user->id);

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Latest updates and statistic charts">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <!--begin::Web font -->
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
    <script>
        WebFont.load({
        google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
        active: function() {
            sessionStorage.fonts = true;
        }
      });
    </script>
    <!--end::Web font -->
    <?php $this->head() ?>
    <!--begin::Page Vendors Styles -->
    <link href="<?= Url::base()?>/assets/vendors/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
    <!--RTL version:<link href="assets/vendors/custom/fullcalendar/fullcalendar.bundle.rtl.css" rel="stylesheet" type="text/css" />-->
    <!--end::Page Vendors Styles -->
    <link rel="shortcut icon" href="<?= Url::base()?>/favicon.ico" />

</head>

<!-- begin::Body -->
<body class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default">
<?php $this->beginBody() ?>
    <!-- begin:: Page -->
    <div class="m-grid m-grid--hor m-grid--root m-page">

        <!-- BEGIN: Header -->
        <header id="m_header" class="m-grid__item    m-header " m-minimize-offset="200" m-minimize-mobile-offset="200">
            <div class="m-container m-container--fluid m-container--full-height">
                <div class="m-stack m-stack--ver m-stack--desktop">

                        <!-- BEGIN: Brand -->
                        <div class="m-stack__item m-brand  m-brand--skin-dark ">
                                <div class="m-stack m-stack--ver m-stack--general">
                                        <div class="m-stack__item m-stack__item--middle m-brand__logo">
                                                <a href="/" class="m-brand__logo-wrapper">
                                                    <img alt="" src="<?= Url::base()?>/img/logo_rebook_w.png" style="max-width:100%;"/>
                                                </a>
                                        </div>
                                        <div class="m-stack__item m-stack__item--middle m-brand__tools">

                                                <!-- BEGIN: Left Aside Minimize Toggle -->
                                                <a href="javascript:;" id="m_aside_left_minimize_toggle" class="m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-desktop-inline-block  ">
                                                        <span></span>
                                                </a>

                                                <!-- END -->

                                                <!-- BEGIN: Responsive Aside Left Menu Toggler -->
                                                <a href="javascript:;" id="m_aside_left_offcanvas_toggle" class="m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-tablet-and-mobile-inline-block">
                                                        <span></span>
                                                </a>

                                                <!-- END -->

                                                <!-- BEGIN: Responsive Header Menu Toggler -->
                                                <a id="m_aside_header_menu_mobile_toggle" href="javascript:;" class="m-brand__icon m-brand__toggler m--visible-tablet-and-mobile-inline-block">
                                                        <span></span>
                                                </a>

                                                <!-- END -->

                                                <!-- BEGIN: Topbar Toggler -->
                                                <a id="m_aside_header_topbar_mobile_toggle" href="javascript:;" class="m-brand__icon m--visible-tablet-and-mobile-inline-block">
                                                        <i class="flaticon-more"></i>
                                                </a>

                                                <!-- BEGIN: Topbar Toggler -->
                                        </div>
                                </div>
                        </div>

                        <!-- END: Brand -->
                        <div class="m-stack__item m-stack__item--fluid m-header-head" id="m_header_nav">

                            <!-- END: Horizontal Menu -->

                                <!-- BEGIN: Topbar -->
                                <div id="m_header_topbar" class="m-topbar  m-stack m-stack--ver m-stack--general">
                                        <div class="m-stack__item m-topbar__nav-wrapper">
                                                <ul class="m-topbar__nav m-nav m-nav--inline">
                                                        
                                                    <li class="m-nav__item m-topbar__user-profile  m-dropdown m-dropdown--medium m-dropdown--arrow  m-dropdown--align-right m-dropdown--mobile-full-width m-dropdown--skin-light" m-dropdown-toggle="click">
                                                                    <a href="#" class="m-nav__link m-dropdown__toggle">
                                                                            <span class="m-topbar__userpic">
                                                                            </span>
                                                                            <span class="m-nav__link-icon m-topbar__usericon  m--hide">
                                                                                    <span class="m-nav__link-icon-wrapper"><i class="flaticon-user-ok"></i></span>
                                                                            </span>
                                                                            <span class="m-topbar__username m--hide">Nick</span>
                                                                    </a>
                                                                    <div class="m-dropdown__wrapper">
                                                                            <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                                                                            <div class="m-dropdown__inner">
                                                                                    <div class="m-dropdown__header m--align-center">
                                                                                            <div class="m-card-user m-card-user--skin-light">
                                                                                                    <div class="m-card-user__pic">
                                                                                                    </div>
                                                                                                    <div class="m-card-user__details">
                                                                                                    </div>
                                                                                            </div>
                                                                                    </div>
                                                                                    <div class="m-dropdown__body">
                                                                                            <div class="m-dropdown__content">
                                                                                                    <ul class="m-nav m-nav--skin-light">
                                                                                                            <li class="m-nav__section m--hide">
                                                                                                                    <span class="m-nav__section-text">Section</span>
                                                                                                            </li>
                                                                                                            
                                                                                                            <li class="m-nav__item">
                                                                                                                <?= Html::a('<i class="fa fa-key"></i> '.Yii::t("app","Logout"),['/site/logout'],['data-method'=>'post','class' => 'btn m-btn--pill btn-secondary m-btn m-btn--custom m-btn--label-brand m-btn--bolder']);?>
                                                                                                            </li>
                                                                                                    </ul>
                                                                                            </div>
                                                                                    </div>
                                                                            </div>
                                                                    </div>
                                                            </li>
                                                </ul>
                                        </div>
                                </div>

                                <!-- END: Topbar -->
                        </div>
                </div>
            </div>
        </header>

        <!-- END: Header -->

                <!-- begin::Body -->
                <div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">

                        <!-- BEGIN: Left Aside -->
                        <button class="m-aside-left-close  m-aside-left-close--skin-dark " id="m_aside_left_close_btn"><i class="la la-close"></i></button>
                        <div id="m_aside_left" class="m-grid__item	m-aside-left  m-aside-left--skin-dark ">

                                <!-- BEGIN: Aside Menu -->
                                <div id="m_ver_menu" class="m-aside-menu  m-aside-menu--skin-dark m-aside-menu--submenu-skin-dark " m-menu-vertical="1" m-menu-scrollable="0" m-menu-dropdown-timeout="500">
                                    <ul class="m-menu__nav ">
                                            <li class="m-menu__section m-menu__section--first">
                                                    <h4 class="m-menu__section-text">GENERAL</h4>
                                                    <i class="m-menu__section-icon flaticon-more-v2"></i>
                                            </li>
                                                <li class="m-menu__item  <?= $this->context->route == 'site/index' ? 'm-menu__item--active' : ''?>" aria-haspopup="true">
                                                    <a href="<?= Url::to(['site/index']) ?>" class="m-menu__link ">
                                                        <span class="m-menu__item-here"></span>
                                                        <i class="m-menu__link-icon flaticon-line-graph"></i>
                                                        <span class="m-menu__link-text"><?= Yii::t('app','Portada')?></span>
                                                    </a>
                                                </li>
                                                <li class="m-menu__item  <?= $this->context->route == 'book/index' ? 'm-menu__item--active' : ''?>" aria-haspopup="true">
                                                    <a href="<?= Url::to(['book/index']) ?>" class="m-menu__link ">
                                                        <span class="m-menu__item-here"></span>
                                                        <i class="m-menu__link-icon flaticon-book"></i>
                                                        <span class="m-menu__link-text"><?= Yii::t('app','Libros')?></span>
                                                    </a>
                                                </li>
                                    </ul>
                                </div>

                                <!-- END: Aside Menu -->
                        </div>

                        <!-- END: Left Aside -->
                        <?= Alert::widget() ?>
                        <div class="m-grid__item m-grid__item--fluid m-wrapper">
                            <div class="m-content">
                                <?= $content ?>
                                <?php
                                    yii\bootstrap\Modal::begin([
                                        'headerOptions' => ['id' => 'modalHeader'],
                                        'id' => 'modal',
                                        'size' => 'modal-ml',
                                        //'clientOptions' => ['backdrop' => 'static', 'keyboard' => FALSE]
                                    ]);
                                    echo "<div id='modalContent'></div>";
                                    yii\bootstrap\Modal::end();

                                    yii\bootstrap\Modal::begin([
                                        'headerOptions' => ['id' => 'modalbigHeader'],
                                        'id' => 'modalbig',
                                        'size' => 'modal-lg',
                                        //'clientOptions' => ['backdrop' => 'static', 'keyboard' => FALSE]
                                    ]);
                                    echo "<div id='modalbigContent'></div>";
                                    yii\bootstrap\Modal::end();
                                ?>
                            <?php $this->registerJsFile('/js/modalForms.js', ['depends' => [yii\web\JqueryAsset::className()]]); ?>
                            </div>
                        </div>
                </div>

                <!-- end:: Body -->

                <!-- begin::Footer -->
                <footer class="m-grid__item		m-footer ">
                        <div class="m-container m-container--fluid m-container--full-height m-page__container">
                                <div class="m-stack m-stack--flex-tablet-and-mobile m-stack--ver m-stack--desktop">
                                        <div class="m-stack__item m-stack__item--left m-stack__item--middle m-stack__item--last">
                                                <span class="m-footer__copyright">
                                                        2017 &copy; <a href="" class="m-link">Rebook Andorra</a>
                                                </span>
                                        </div>
                                        <div class="m-stack__item m-stack__item--right m-stack__item--middle m-stack__item--first">
                                                <ul class="m-footer__nav m-nav m-nav--inline m--pull-right">
                                                        <li class="m-nav__item">
                                                                <a href="#" class="m-nav__link">
                                                                        <span class="m-nav__link-text">About</span>
                                                                </a>
                                                        </li>
                                                        <li class="m-nav__item">
                                                                <a href="#" class="m-nav__link">
                                                                        <span class="m-nav__link-text">Privacy</span>
                                                                </a>
                                                        </li>
                                                        <li class="m-nav__item">
                                                                <a href="#" class="m-nav__link">
                                                                        <span class="m-nav__link-text">T&C</span>
                                                                </a>
                                                        </li>
                                                        <li class="m-nav__item">
                                                                <a href="#" class="m-nav__link">
                                                                        <span class="m-nav__link-text">Purchase</span>
                                                                </a>
                                                        </li>
                                                        <li class="m-nav__item m-nav__item">
                                                                <a href="#" class="m-nav__link" data-toggle="m-tooltip" title="Support Center" data-placement="left">
                                                                        <i class="m-nav__link-icon flaticon-info m--icon-font-size-lg3"></i>
                                                                </a>
                                                        </li>
                                                </ul>
                                        </div>
                                </div>
                        </div>
                </footer>

                <!-- end::Footer -->
        </div>

        <!-- end:: Page -->


        <!-- begin::Scroll Top -->
        <div id="m_scroll_top" class="m-scroll-top">
                <i class="la la-arrow-up"></i>
        </div>

        <!-- end::Scroll Top -->

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
