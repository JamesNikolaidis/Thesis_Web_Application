function add_element(){
	
	// number of input types that user want to create
	var element = documnet.getElementById("Number");
	//Create a new varaible , connecting html div with javascript file
	var div_container = document.getElementById("Container");
	var counter =0;
	
	//Check if input has value
if(element!=null){
	
	
	
	
	while (container.hasChildNodes()) {
                container.removeChild(container.lastChild);
            }
		for(counter = 0; counter!=element; counter++){
			//Create input text 
			container.appendChild(document.createTextNode("Disributers " + (i+1)));
			// create a input type element
			var input_element = documnet.createElement("input");
			//Gives input type( text , radioButton, Button)
			input_element.type="text";
			//Gives input element name
			input.name = "Name"+counter;
			input.class = "Distributes_Class"
			//Add new input element into the Div element
			container.appendChild(input_element);
		}
}//End of if statement
	
}