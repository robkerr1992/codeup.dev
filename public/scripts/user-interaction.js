// TODO: Ask the user for their name.
//       Keep asking if an empty input is provided.

"use strict";
do {
	var name = prompt("What is you name?");
} while (name == "");


// TODO: Show an alert message that welcomes the user based on their input.

if (typeof name == 'string') {
	alert("Hello " + name + "!");

}

// TODO: Ask the user if they like pizza.
//       Based on their answer show a creative alert message.


	
var pizza = confirm("Do you likea da pizza?");

if (pizza == true) {
	alert("This is correct.");

} else {
	alert("Your opinion is invalid, bro....");

}



