<!DOCTYPE html>
<html>
 <head>
 </head>
 <body>
  <div class="container">
   <br />
   <div id="load_data"></div>
   <div id="load_data_message"></div>
   <br />
   <br />
   <br />
   <br />
   <br />
   <br />
  </div>
 </body>
</html>
<script>

$(document).ready(function(){
 var messages_per_add=10;
 var limit = messages_per_add ;//quantity of messages per fetch
 var start = 0;
 var action = 'inactive';
 var todas = $("#todas").val(); 
 var pais = $("#pais").val();
 var universidad = $("#universidad").val();
 var confesion_id = $("#confesion_id").val();
 var contid=0;
 var contvalue=0;
 top_ads();
 function load_data()
 {
  $.ajax({
   url:"fetch_and_print.php",//file of the fetch
   method:"POST",
   data:{limit:limit, start:start, todas:todas, pais:pais, universidad:universidad,contid:contid,contvalue:contvalue,messages_per_add:messages_per_add,confesion_id:confesion_id},
   cache:false,
   success:function(data)
   {
    $('#load_data').append(data);
    if(parseInt(document.getElementById(contid.toString()).value)<-50)
    {
     //document.getElementById("load_data_message").innerHTML='<object type="text/html" data="nohaymasconfesiones.php" ></object>';
     load_final_message();
     action = 'active';
     return false;
    }
    else
    {
     action = "inactive";
    }
    update_contvalue();
   },
   error: function (data) {
      location.href = "error.php";
   }
  });
 }

 if(action === 'inactive')
 {
  action = 'active';
  load_data();
 }

 $(window).scroll(function(){
  if($(window).scrollTop() + $(window).height() > $("#load_data").height() && action === 'inactive'){
    reload();
  }

 });

 function update_contvalue(){
    contvalue=parseInt(document.getElementById(contid.toString()).value);
    if(contvalue<2 ){
        reload();
    }
    if(contvalue>=messages_per_add){
        contvalue=0;
    }
 }

 function reload(){
   action = 'active';
   start = start + limit;
   contid++;
   setTimeout(function(){
   load_data();
   }, 0);
 }

 function top_ads(){
   $.ajax({
   url:"top_ads.php",
   method:"POST",
   data:{},
   cache:false,
   success:function(data)
   {
      $('#load_data').append(data);
   },
   error: function (data) {
      location.href = "error.php";
   }
  });
 }

 function load_final_message(){
   $.ajax({
   url:"nohaymasconfesiones.php",//file of the fetch
   method:"POST",
   data:{},
   cache:false,
   success:function(data)
   {
      $('#load_data_message').append(data);
   },
   error: function (data) {
      location.href = "error.php";
   }
  });
 }
 
});
</script>