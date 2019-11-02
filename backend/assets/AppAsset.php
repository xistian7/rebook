<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'assetsMetronic/plugins/general/perfect-scrollbar/css/perfect-scrollbar.css',
		'assetsMetronic/plugins/general/tether/dist/css/tether.css',
		'assetsMetronic/plugins/general/bootstrap-datepicker/dist/css/bootstrap-datepicker3.css',
		'assetsMetronic/plugins/general/bootstrap-datetime-picker/css/bootstrap-datetimepicker.css',
		'assetsMetronic/plugins/general/bootstrap-timepicker/css/bootstrap-timepicker.css',
		'assetsMetronic/plugins/general/bootstrap-daterangepicker/daterangepicker.css',
		'assetsMetronic/plugins/general/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.css',
		'assetsMetronic/plugins/general/bootstrap-select/dist/css/bootstrap-select.css',
		'assetsMetronic/plugins/general/bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.css',
		'assetsMetronic/plugins/general/select2/dist/css/select2.css',
		'assetsMetronic/plugins/general/ion-rangeslider/css/ion.rangeSlider.css',
		'assetsMetronic/plugins/general/nouislider/distribute/nouislider.css',
		'assetsMetronic/plugins/general/owl.carousel/dist/assets/owl.carousel.css',
		'assetsMetronic/plugins/general/owl.carousel/dist/assets/owl.theme.default.css',
		'assetsMetronic/plugins/general/dropzone/dist/dropzone.css',
		'assetsMetronic/plugins/general/quill/dist/quill.snow.css',
		'assetsMetronic/plugins/general/@yaireo/tagify/dist/tagify.css',
		'assetsMetronic/plugins/general/summernote/dist/summernote.css',
		'assetsMetronic/plugins/general/bootstrap-markdown/css/bootstrap-markdown.min.css',
		'assetsMetronic/plugins/general/animate.css/animate.css',
		'assetsMetronic/plugins/general/toastr/build/toastr.css',
		'assetsMetronic/plugins/general/dual-listbox/dist/dual-listbox.css',
		'assetsMetronic/plugins/general/morris.js/morris.css',
		'assetsMetronic/plugins/general/sweetalert2/dist/sweetalert2.css',
		'assetsMetronic/plugins/general/socicon/css/socicon.css',
		'assetsMetronic/plugins/general/plugins/line-awesome/css/line-awesome.css',
		'assetsMetronic/plugins/general/plugins/flaticon/flaticon.css',
		'assetsMetronic/plugins/general/plugins/flaticon2/flaticon.css',
		'assetsMetronic/plugins/general/@fortawesome/fontawesome-free/css/all.min.css',

	
		'assetsMetronic/css/style.bundle.css',

		'assetsMetronic/plugins/custom/plugins/jquery-ui/jquery-ui.min.css',
		'assetsMetronic/plugins/custom/@fullcalendar/core/main.css',
		'assetsMetronic/plugins/custom/@fullcalendar/daygrid/main.css',
		'assetsMetronic/plugins/custom/@fullcalendar/list/main.css',
		'assetsMetronic/plugins/custom/@fullcalendar/timegrid/main.css',
		'assetsMetronic/plugins/custom/datatables.net-bs4/css/dataTables.bootstrap4.css',
		'assetsMetronic/plugins/custom/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css',
		'assetsMetronic/plugins/custom/datatables.net-autofill-bs4/css/autoFill.bootstrap4.min.css',
		'assetsMetronic/plugins/custom/datatables.net-colreorder-bs4/css/colReorder.bootstrap4.min.css',
		'assetsMetronic/plugins/custom/datatables.net-fixedcolumns-bs4/css/fixedColumns.bootstrap4.min.css',
		'assetsMetronic/plugins/custom/datatables.net-fixedheader-bs4/css/fixedHeader.bootstrap4.min.css',
		'assetsMetronic/plugins/custom/datatables.net-keytable-bs4/css/keyTable.bootstrap4.min.css',
		'assetsMetronic/plugins/custom/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css',
		'assetsMetronic/plugins/custom/datatables.net-rowgroup-bs4/css/rowGroup.bootstrap4.min.css',
		'assetsMetronic/plugins/custom/datatables.net-rowreorder-bs4/css/rowReorder.bootstrap4.min.css',
		'assetsMetronic/plugins/custom/datatables.net-scroller-bs4/css/scroller.bootstrap4.min.css',
		'assetsMetronic/plugins/custom/datatables.net-select-bs4/css/select.bootstrap4.min.css',
		'assetsMetronic/plugins/custom/jstree/dist/themes/default/style.css',
		'assetsMetronic/plugins/custom/jqvmap/dist/jqvmap.css',
		'assetsMetronic/plugins/custom/uppy/dist/uppy.min.css',

	
		'assetsMetronic/css/skins/header/base/light.css',
		'assetsMetronic/css/skins/header/menu/light.css',
		'assetsMetronic/css/skins/brand/dark.css',
		'assetsMetronic/css/skins/aside/dark.css',

        //<!--end::Global Theme Styles -->
        'css/custom.css'
    ];
    public $js = [
        //<!--begin:: Vendor Plugins -->
		'assetsMetronic/plugins/general/jquery/dist/jquery.js',
		'assetsMetronic/plugins/general/popper.js/dist/umd/popper.js',
		'assetsMetronic/plugins/general/bootstrap/dist/js/bootstrap.min.js',
		'assetsMetronic/plugins/general/js-cookie/src/js.cookie.js',
		'assetsMetronic/plugins/general/moment/min/moment.min.js',
		'assetsMetronic/plugins/general/tooltip.js/dist/umd/tooltip.min.js',
		'assetsMetronic/plugins/general/perfect-scrollbar/dist/perfect-scrollbar.js',
		'assetsMetronic/plugins/general/sticky-js/dist/sticky.min.js',
		'assetsMetronic/plugins/general/wnumb/wNumb.js',
		'assetsMetronic/plugins/general/jquery-form/dist/jquery.form.min.js',
		'assetsMetronic/plugins/general/block-ui/jquery.blockUI.js',
		'assetsMetronic/plugins/general/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js',
		'assetsMetronic/plugins/general/js/global/integration/plugins/bootstrap-datepicker.init.js',
		'assetsMetronic/plugins/general/bootstrap-datetime-picker/js/bootstrap-datetimepicker.min.js',
		'assetsMetronic/plugins/general/bootstrap-timepicker/js/bootstrap-timepicker.min.js',
		'assetsMetronic/plugins/general/js/global/integration/plugins/bootstrap-timepicker.init.js',
		'assetsMetronic/plugins/general/bootstrap-daterangepicker/daterangepicker.js',
		'assetsMetronic/plugins/general/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.js',
		'assetsMetronic/plugins/general/bootstrap-maxlength/src/bootstrap-maxlength.js',
		'assetsMetronic/plugins/general/plugins/bootstrap-multiselectsplitter/bootstrap-multiselectsplitter.min.js',
		'assetsMetronic/plugins/general/bootstrap-select/dist/js/bootstrap-select.js',
		'assetsMetronic/plugins/general/bootstrap-switch/dist/js/bootstrap-switch.js',
		'assetsMetronic/plugins/general/js/global/integration/plugins/bootstrap-switch.init.js',
		'assetsMetronic/plugins/general/select2/dist/js/select2.full.js',
		'assetsMetronic/plugins/general/ion-rangeslider/js/ion.rangeSlider.js',
		'assetsMetronic/plugins/general/typeahead.js/dist/typeahead.bundle.js',
		'assetsMetronic/plugins/general/handlebars/dist/handlebars.js',
		'assetsMetronic/plugins/general/inputmask/dist/jquery.inputmask.bundle.js',
		'assetsMetronic/plugins/general/inputmask/dist/inputmask/inputmask.date.extensions.js',
		'assetsMetronic/plugins/general/inputmask/dist/inputmask/inputmask.numeric.extensions.js',
		'assetsMetronic/plugins/general/nouislider/distribute/nouislider.js',
		'assetsMetronic/plugins/general/owl.carousel/dist/owl.carousel.js',
		'assetsMetronic/plugins/general/autosize/dist/autosize.js',
		'assetsMetronic/plugins/general/clipboard/dist/clipboard.min.js',
		'assetsMetronic/plugins/general/dropzone/dist/dropzone.js',
		'assetsMetronic/plugins/general/js/global/integration/plugins/dropzone.init.js',
		'assetsMetronic/plugins/general/quill/dist/quill.js',
		'assetsMetronic/plugins/general/@yaireo/tagify/dist/tagify.polyfills.min.js',
		'assetsMetronic/plugins/general/@yaireo/tagify/dist/tagify.min.js',
		'assetsMetronic/plugins/general/summernote/dist/summernote.js',
		'assetsMetronic/plugins/general/markdown/lib/markdown.js',
		'assetsMetronic/plugins/general/bootstrap-markdown/js/bootstrap-markdown.js',
		'assetsMetronic/plugins/general/js/global/integration/plugins/bootstrap-markdown.init.js',
		'assetsMetronic/plugins/general/bootstrap-notify/bootstrap-notify.min.js',
		'assetsMetronic/plugins/general/js/global/integration/plugins/bootstrap-notify.init.js',
		'assetsMetronic/plugins/general/jquery-validation/dist/jquery.validate.js',
		'assetsMetronic/plugins/general/jquery-validation/dist/additional-methods.js',
		'assetsMetronic/plugins/general/js/global/integration/plugins/jquery-validation.init.js',
		'assetsMetronic/plugins/general/toastr/build/toastr.min.js',
		'assetsMetronic/plugins/general/dual-listbox/dist/dual-listbox.js',
		'assetsMetronic/plugins/general/raphael/raphael.js',
		'assetsMetronic/plugins/general/morris.js/morris.js',
		'assetsMetronic/plugins/general/chart.js/dist/Chart.bundle.js',
		'assetsMetronic/plugins/general/plugins/bootstrap-session-timeout/dist/bootstrap-session-timeout.min.js',
		'assetsMetronic/plugins/general/plugins/jquery-idletimer/idle-timer.min.js',
		'assetsMetronic/plugins/general/waypoints/lib/jquery.waypoints.js',
		'assetsMetronic/plugins/general/counterup/jquery.counterup.js',
		'assetsMetronic/plugins/general/es6-promise-polyfill/promise.min.js',
		'assetsMetronic/plugins/general/sweetalert2/dist/sweetalert2.min.js',
		'assetsMetronic/plugins/general/js/global/integration/plugins/sweetalert2.init.js',
		'assetsMetronic/plugins/general/jquery.repeater/src/lib.js',
		'assetsMetronic/plugins/general/jquery.repeater/src/jquery.input.js',
		'assetsMetronic/plugins/general/jquery.repeater/src/repeater.js',
		'assetsMetronic/plugins/general/dompurify/dist/purify.js',

		//<!--end:: Vendor Plugins -->
		'assetsMetronic/js/scripts.bundle.js',

		//<!--begin:: Vendor Plugins for custom pages -->
		'assetsMetronic/plugins/custom/plugins/jquery-ui/jquery-ui.min.js',
		'assetsMetronic/plugins/custom/@fullcalendar/core/main.js',
		'assetsMetronic/plugins/custom/@fullcalendar/daygrid/main.js',
		'assetsMetronic/plugins/custom/@fullcalendar/google-calendar/main.js',
		'assetsMetronic/plugins/custom/@fullcalendar/interaction/main.js',
		'assetsMetronic/plugins/custom/@fullcalendar/list/main.js',
		'assetsMetronic/plugins/custom/@fullcalendar/timegrid/main.js',
		'assetsMetronic/plugins/custom/gmaps/gmaps.js',
		'assetsMetronic/plugins/custom/flot/dist/es5/jquery.flot.js',
		'assetsMetronic/plugins/custom/flot/source/jquery.flot.resize.js',
		'assetsMetronic/plugins/custom/flot/source/jquery.flot.categories.js',
		'assetsMetronic/plugins/custom/flot/source/jquery.flot.pie.js',
		'assetsMetronic/plugins/custom/flot/source/jquery.flot.stack.js',
		'assetsMetronic/plugins/custom/flot/source/jquery.flot.crosshair.js',
		'assetsMetronic/plugins/custom/flot/source/jquery.flot.axislabels.js',
		'assetsMetronic/plugins/custom/datatables.net/js/jquery.dataTables.js',
		'assetsMetronic/plugins/custom/datatables.net-bs4/js/dataTables.bootstrap4.js',
		'assetsMetronic/plugins/custom/js/global/integration/plugins/datatables.init.js',
		'assetsMetronic/plugins/custom/datatables.net-autofill/js/dataTables.autoFill.min.js',
		'assetsMetronic/plugins/custom/datatables.net-autofill-bs4/js/autoFill.bootstrap4.min.js',
		'assetsMetronic/plugins/custom/jszip/dist/jszip.min.js',
		'assetsMetronic/plugins/custom/pdfmake/build/pdfmake.min.js',
		'assetsMetronic/plugins/custom/pdfmake/build/vfs_fonts.js',
		'assetsMetronic/plugins/custom/datatables.net-buttons/js/dataTables.buttons.min.js',
		'assetsMetronic/plugins/custom/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js',
		'assetsMetronic/plugins/custom/datatables.net-buttons/js/buttons.colVis.js',
		'assetsMetronic/plugins/custom/datatables.net-buttons/js/buttons.flash.js',
		'assetsMetronic/plugins/custom/datatables.net-buttons/js/buttons.html5.js',
		'assetsMetronic/plugins/custom/datatables.net-buttons/js/buttons.print.js',
		'assetsMetronic/plugins/custom/datatables.net-colreorder/js/dataTables.colReorder.min.js',
		'assetsMetronic/plugins/custom/datatables.net-fixedcolumns/js/dataTables.fixedColumns.min.js',
		'assetsMetronic/plugins/custom/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js',
		'assetsMetronic/plugins/custom/datatables.net-keytable/js/dataTables.keyTable.min.js',
		'assetsMetronic/plugins/custom/datatables.net-responsive/js/dataTables.responsive.min.js',
		'assetsMetronic/plugins/custom/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js',
		'assetsMetronic/plugins/custom/datatables.net-rowgroup/js/dataTables.rowGroup.min.js',
		'assetsMetronic/plugins/custom/datatables.net-rowreorder/js/dataTables.rowReorder.min.js',
		'assetsMetronic/plugins/custom/datatables.net-scroller/js/dataTables.scroller.min.js',
		'assetsMetronic/plugins/custom/datatables.net-select/js/dataTables.select.min.js',
		'assetsMetronic/plugins/custom/jstree/dist/jstree.js',
		'assetsMetronic/plugins/custom/jqvmap/dist/jquery.vmap.js',
		'assetsMetronic/plugins/custom/jqvmap/dist/maps/jquery.vmap.world.js',
		'assetsMetronic/plugins/custom/jqvmap/dist/maps/jquery.vmap.russia.js',
		'assetsMetronic/plugins/custom/jqvmap/dist/maps/jquery.vmap.usa.js',
		'assetsMetronic/plugins/custom/jqvmap/dist/maps/jquery.vmap.germany.js',
		'assetsMetronic/plugins/custom/jqvmap/dist/maps/jquery.vmap.europe.js',
		'assetsMetronic/plugins/custom/uppy/dist/uppy.min.js',

		//<!--end:: Vendor Plugins for custom pages -->

		//<!--end::Global Theme Bundle -->

		//<!--begin::Page Scripts(used by this page) -->
		'assetsMetronic/js/pages/dashboard.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
