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
	{display: "gianduja-chocolate aun mas largo de lo que deberia", value: "gianduja-chocolate aun mas largo de lo que deberia" }];
	
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
	<select class="form-control" name="parent_selection" id="parent_selection">
		<option value="">-- Please Select --</option>
		<option value="chocolates">Chocolates</option>
		<option value="vegetables">Vegetables</option>
		<option value="icecreams">Ice cream</option>
	</select>
	<select class="form-control" name="child_selection" id="child_selection">
	</select>
</div>
</body>
</html>