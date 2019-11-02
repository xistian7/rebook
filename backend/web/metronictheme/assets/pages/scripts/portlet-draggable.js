var PortletDraggable = function () {

    return {
        //main function to initiate the module
        init: function () {

            if (!jQuery().sortable) {
                return;
            }

            $("#sortaoooooble_portlets").sortable({
                connectWith: ".portlet",
                items: ".portlet", 
                opacity: 0.8,
                handle : '.portlet-title',
                coneHelperSize: true,
                placeholder: 'portlet-sortable-placeholder',
                forcePlaceholderSize: true,
                tolerance: "pointer",
                helper: "clone",
                tolerance: "pointer",
                forcePlaceholderSize: !0,
                helper: "clone",
                cancel: ".portlet-sortable-empty, .portlet-fullscreen", // cancel dragging if portlet is in fullscreen mode
                revert: 250, // animation in milliseconds
                update: function(b, c) {
                    console.log(c.item.keys);
                    if (c.item.prev().hasClass("portlet-sortable-empty")) {
                        c.item.prev().before(c.item);
                    }                    
                }
            });
            
            $( "#sortabasasle_portlets" ).on( "sortstop", function( event, ui ) {
                 var urlActual = window.location.pathname.split("/")[1];
                 var parameters = $( "#sortable_portlets" ).sortable( "serialize" );
                 //alert(parameters);
                  $.ajax({
                            url:'/'+urlActual+'/updateactionposition',
                            type: 'POST',
                            data: parameters
                        });
                       // could also use: return false;
                                  //   $.post('/'+urlActual+'/updateactionposition?'+parameters );
                                     // $.ajax({ url: '/'+urlActual+'/updateactionposition?'+parameters });
            } );
        }
    };
}();

jQuery(document).ready(function() {
    PortletDraggable.init();
});