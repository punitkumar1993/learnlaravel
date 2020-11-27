$(function () {
  $('#wkhtml').on('click',()=> {
    
    //let dom = document.getElementsByTagName('html')[0];
     let dom =$('html:eq(0)').clone();
     $(dom).find('header:eq(0)').remove();
     $(dom).find('aside:eq(0)').remove();
     $(dom).find('footer:eq(0)').remove();
     $(dom).find('.sidebar-mini.sidebar-collapse .content-wrapper').css("cssText",'margin-left:0px !important');;
     $(dom).find('.pdf-ignore').each(function( ) {
        $(this).remove();
     });
     $(dom).find('.chart').each(function( ) {
      $(this).addClass('chartWidth');
   });
     var scriptTag = document.createElement('script');
     scriptTag.setAttribute('src', 'https://cdnjs.cloudflare.com/ajax/libs/babel-polyfill/7.0.0/polyfill.min.js');
     scriptTag.setAttribute('type', 'text/javascript');
     $(dom).find('head:eq(0)').append(scriptTag);
     
    
    //console.log(dom);
    var domHtml= $(dom).html();
    $.ajax({
      type : "post",
      url : htmlURL,
      contenttype: 'text/plain',
      data : { "_token": csrfToken,"domData":domHtml}      
    }).done(function() {
      window.location.href = pdfURL;
    });
  });
})
