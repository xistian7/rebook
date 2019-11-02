/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

jQuery(document).ready(function() {
    jQuery('.itemSistemaApuestaMonth').click(function(){
        // Holds the product ID of the clicked element
        var dataId = $(this).data("toggle");
        $('.panelSistemaApuestaMes').removeClass('active');
        $('#'+dataId).addClass('active');
        $('#dropdownMenuLink').text($(this).text());
    });
    
    jQuery('.itemResumGeneralMonth').click(function(){
        // Holds the product ID of the clicked element
        var dataId = $(this).data("toggle");
        $('.panelResumGeneralMes').removeClass('active');
        $('#'+dataId).addClass('active');
        $('#dropdownMenuLinkResumGeneralMes').text($(this).text());
    });
    
    jQuery('.itemResumNBAApuestasPreMonth').click(function(){
        // Holds the product ID of the clicked element
        var dataId = $(this).data("toggle");
        $('.panelResumNBAApuestasPreMes').removeClass('active');
        $('#'+dataId).addClass('active');
        $('#dropdownMenuLinkResumNBAApuestasPreMes').text($(this).text());
    });
    
    jQuery('.itemResumCejotaPreMonth').click(function(){
        // Holds the product ID of the clicked element
        var dataId = $(this).data("toggle");
        $('.panelResumCejotaPreMes').removeClass('active');
        $('#'+dataId).addClass('active');
        $('#dropdownMenuLinkResumCejotaPreMes').text($(this).text());
    });
    
    jQuery('.itemResumNBAApuestasLiveMonth').click(function(){
        // Holds the product ID of the clicked element
        var dataId = $(this).data("toggle");
        $('.panelResumNBAApuestasLiveMes').removeClass('active');
        $('#'+dataId).addClass('active');
        $('#dropdownMenuLinkResumNBAApuestasLiveMes').text($(this).text());
    });
});