$(document).ready(function() {


//initialisasi ajaxoptions
  var ajaxoptions = {
    url: '/kompas/index.php',
    data: "sync=true",
    success: function(data){console.log("success");}
  }

  $.ajax(ajaxoptions);
});
