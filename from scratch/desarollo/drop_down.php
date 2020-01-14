<!--<!doctype html>
  <div>
    <select class="form-control" name="select1" id="select1">
      <option value="1">Fruit</option>
      <option value="2">Animal</option>
      <option value="3">Bird</option>
      <option value="4">Car</option>
    </select>
  </div>
  <div>
    <select class="form-control" name="select2" id="select2">
      <option value="1">Banana</option>
      <option value="1">Apple</option>
      <option value="1">Orange</option>
      <option value="2">Wolf</option>
      <option value="2">Fox</option>
      <option value="2">Bear</option>
      <option value="3">Eagle</option>
      <option value="3">Hawk</option>
      <option value="4">BWM<option>
  </select>
  </div>

  <script>
    var $select1 = $( '#select1' ),
        $select2 = $( '#select2' ),
        $options = $select2.find( 'option' );
        
    $select1.on( 'change', function() {
      $select2.html( $options.filter( '[value="' + this.value + '"]' ) );
    } ).trigger( 'change' );
  </script>
</html>-->

<!DOCTYPE html>
<html>
<head>
<meta charset='UTF-8' />
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
<script language="javascript" type="text/javascript">  
$(document).ready(function(){

//let's create arrays
var chocolates = [
	{display: "Dark chocolate", value: "dark-chocolate" }, 
	{display: "Milk chocolate", value: "milk-chocolate" }, 
	{display: "White chocolate", value: "white-chocolate" },
	{display: "Gianduja chocolate", value: "gianduja-chocolate" }];
	
var vegetables = [
	{display: "Broccoli", value: "broccoli" }, 
	{display: "Cabbage", value: "cabbage" }, 
	{display: "Carrot", value: "carrot" },
	{display: "Cauliflower", value: "cauliflower" }];
	
var icecreams = [
	{display: "Frozen yogurt", value: "frozen-yogurt" }, 
	{display: "Booza", value: "booza" }, 
	{display: "Frozen yogurt", value: "frozen-yogurt" },
	{display: "Ice milk", value: "ice-milk" }];

//If parent option is changed
$("#parent_selection").change(function() {
		var parent = $(this).val(); //get option value from parent 
		
		switch(parent){ //using switch compare selected option and populate child
			  case 'chocolates':
			 	list(chocolates);
				break;
			  case 'vegetables':
			 	list(vegetables);
				break;				
			  case 'icecreams':
			 	list(icecreams);
				break;	
			default: //default child option is blank
				$("#child_selection").html('');	 
				break;
		   }
});

//function to populate child select box
function list(array_list)
{
	$("#child_selection").html(""); //reset child options
	$(array_list).each(function (i) { //populate child options 
		$("#child_selection").append("<option value=\""+array_list[i].value+"\">"+array_list[i].display+"</option>");
	});
}

});
</script>

</head>
<body>	
<div class="wrapper">
Category : <select name="parent_selection" id="parent_selection">
    <option value="">-- Please Select --</option>
    <option value="chocolates">Chocolates</option>
    <option value="vegetables">Vegetables</option>
    <option value="icecreams">Ice cream</option>
</select>
<select name="child_selection" id="child_selection">
</select>
</div>
</body>
</html>