$(function () {

  let btn=$('#jspdf');
 
  btn.on('click',()=> {
    
  
    var config= {      
      backgroundColor: "rgba(0,0,0,0)",     
      onclone: function(clonedDoc) {
        $(clonedDoc).find('.pdf-ignore').hide();  
      
       /* window.resizeTo(1280,1024);
         
      $(clonedDoc).find('body').css({
        'min-width':'1024px','max-width':'1024px'
        });    
      $(clonedDoc).find('html').css({
        'min-width':'1024px','max-width':'1024px'
        });  */
     /* $(clonedDoc).find("#viewport").attr("content", "width=1024");
      $(clonedDoc).find("head link[rel='stylesheet']").last().after('<link rel="stylesheet" type="text/css" href="http://localhost/ncr-report/public/plugins/jspdf/columns.css">');
      window.resizeTo(1280,1024);*/
      
     
     
      }
    };
        
    html2canvas(document.querySelector("#pdf-wrapper"),config).then(canvas => {
      //$("#previewBeforeDownload").html(canvas);
      var imgData = canvas.toDataURL("image/png");  
     // document.write("<img src='"+imgData+"'/>");   
      var pdf = new jsPDF("p", "pt", "a4",false);
      var pageWidth = pdf.internal.pageSize.width;
      var pageHeight = pdf.internal.pageSize.height;
      var imageWidth = canvas.width;
      var imageHeight = canvas.height;

      var ratio = imageWidth/imageHeight >= pageWidth/pageHeight ? pageWidth/imageWidth : pageHeight/imageHeight;
      //pdf = new jsPDF(this.state.orientation, undefined, format);
      pdf.addImage(imgData, 'png', 0, 20, imageWidth * ratio, imageHeight * ratio,undefined,'slow');
      pdf.save("reports.pdf");
      
    });
      

  });
})
