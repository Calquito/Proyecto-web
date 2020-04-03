<!DOCTYPE html>
<html>
<head>
<meta charset='UTF-8' />
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
$("#universidades_parent_selection").change(function() {
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
				$("#universidades_child_selection").html('');	 
				break;
		   }
});

//function to populate child select box
function list(array_list)
{
	$("#universidades_child_selection").html(""); //reset child options
	$(array_list).each(function (i) { //populate child options 
		$("#universidades_child_selection").append("<option value=\""+array_list[i].value+"\">"+array_list[i].display+"</option>");
	});
}

});
</script>

</head>
<body>	

<div class="d-flex flex-row bd-highlight justify-content-between">
	<div class="bd-highlight mr-2 w-100 ">
		País:
		<select class="form-control" name="universidades_parent_selection" id="universidades_parent_selection">
			<option value="">-- Please Select --</option>
			<option value="chocolates">Chocolates</option>
			<option value="vegetables">Vegetables</option>
			<option value="icecreams">Ice cream</option>
		</select>
	</div>
	<div class="bd-highlight ml-2 w-100 ">
		Universidad:
		<select class="form-control" name="universidades_child_selection" id="universidades_child_selection" >
		</select>
	</div>
</div>

</body>
</html>