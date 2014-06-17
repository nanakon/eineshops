function pridane_do_kosika() {
     $(document).ready(function() { 
             $.blockUI({ 
                 message: $('div.growlUI'), 
                 fadeIn: 700, 
                 fadeOut: 700, 
                 timeout: 2000, 
                 showOverlay: false, 
                 centerY: false, 
                 css: { 
                     width: '350px', 
                     top: '10px', 
                     left: '', 
                     right: '10px', 
                     border: 'none', 
                     padding: '5px', 
                     backgroundColor: '#000', 
                     '-webkit-border-radius': '10px', 
                     '-moz-border-radius': '10px', 
                     opacity: .6, 
                     color: '#fff' 
                 } 
             //}); 
         });  
     }
 }

$(document).ready(function) {

  $(".do_kosika_button").click(function) {
    alert("nieco bolo pridane do kosika")
    
  }

}


function pridane_do_kosika() {
  $(document).ready(function) {
    alert("niecaodkjnasdf");
    //$(document).ready(function()
      //  $(".do_kosika_button").fadeOut(1);
       // )

}

}

$(document).ready(function() { 
    $('#upravit_uzivatela').click(function() { 
        $.blockUI({ message: $('#login_bar') }); 
 
        setTimeout($.unblockUI, 2000); 
    }); 
}); 

   
        