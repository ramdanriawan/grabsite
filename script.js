$(document).ready(function() {

//initialisasi ajaxoptions
  var ajaxoptions = {
    url : "kompas/index.php",
    success: function(data){console.log("success");}
  }

  $.ajax(ajaxoptions);
});
