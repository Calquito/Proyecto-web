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
 var contid=0;
 var contvalue=0;
 top_ads();
 function load_data()
 {
  $.ajax({
   url:"fetch_and_print.php",//file of the fetch
   method:"POST",
   data:{limit:limit, start:start, todas:todas, pais:pais, universidad:universidad,contid:contid,contvalue:contvalue,messages_per_add:messages_per_add},
   cache:false,
   success:function(data)
   {
    $('#load_data').append(data);
    update_contvalue();
    if(data === '')
    {
     $('#load_data_message').html("<button type='button' class='btn btn-info'>No Data Found</button>");
     action = 'active';
    }
    else
    {
     $('#load_data_message').html("<button type='button' class='btn btn-warning'>Please Wait....</button>");
     action = "inactive";
    }
   },
   error: function (data) {
      location.href = "error.php";
   }
  });
 }

 
 if(action === 'inactive')
 {
  action = 'active';
  load_data(limit, start);
 }

 $(window).scroll(function(){
  if($(window).scrollTop() + $(window).height() > $("#load_data").height() && action === 'inactive'){
    reload();
  }

 });

 function update_contvalue(){
    contvalue=parseInt(document.getElementById(contid.toString()).value);
    if(contvalue<2){
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
   load_data(limit, start);
   }, 1);
 }

 function top_ads(){
   $.ajax({
   url:"ads.php",//file of the fetch
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
});
</script>