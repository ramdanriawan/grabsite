$(document).ready(function() {
 var ajaxoptions = {
  url : "http://ramdan3mts.000webhostapp.com/Cindex/cindexf",
  success: function(response){
   console.log("success");
  }
 }
  $.ajax(ajaxoptions);
});
