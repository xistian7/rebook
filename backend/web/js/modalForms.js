/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
jQuery(document).ready(function() {
    document.getElementById("modal").classList.remove("fade");
    $(document).on('click', '.showModalButton', function(){
        if ($('#modal').data('bs.modal').isShown) {
            $('#modal').find('#modalContent').load($(this).attr('value'));
            document.getElementById('modalHeader').innerHTML = '<h4>' + $(this).attr('title') + '</h4>';
        } else {
            $('#modal').modal('show')
                    .find('#modalContent')
                    .load($(this).attr('value'));
            document.getElementById('modalHeader').innerHTML = '<h4>' + $(this).attr('title') + '</h4>';
        }
    });
    
    document.getElementById("modalbig").classList.remove("fade");
    $(document).on('click', '.showModalbigButton', function(){
        if ($('#modalbig').data('bs.modal').isShown) {
            $('#modalbig').find('#modalbigContent').load($(this).attr('value'));
            document.getElementById('modalbigHeader').innerHTML = '<h4>' + $(this).attr('title') + '</h4>';
        } else {
            $('#modalbig').modal('show')
                    .find('#modalbigContent')
                    .load($(this).attr('value'));
            document.getElementById('modalbigHeader').innerHTML = '<h4>' + $(this).attr('title') + '</h4>';
        }
    });
    
    /*$(document).on('click', '.loadMainContent', function(){
        $('#main-content').load($(this).attr('value'));
     });*/
});
