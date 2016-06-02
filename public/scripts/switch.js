'use strict';

var luckyNum = Math.floor(Math.random()* 6);
var beforeTotal = 60;

switch (luckyNum) {
	case 1:
		console.log("Your new total is $" + beforeTotal * .9 +".");
		break;
	case 2:
		console.log("Your new total is $" + beforeTotal * .75 +".");
		break;
	case 3:
		console.log("Your new total is $" + beforeTotal * .65 +".");
		break;		
	case 4:
		console.log("Your new total is $" + beforeTotal * .5 +".");
		break;
	case 5:
		console.log("Oh my god it's freeeeee");
		break;
	default:
		console.log("Just pay your bill, bro...");
		break;								
}

var monthNum = Math.floor(Math.random()* 12) + 1;

switch (monthNum) {
	case 1:
		console.log("It's January!");
		break;
	case 2:
		console.log("It's February!");
		break;
	case 3:
		console.log("It's March!");
		break;		
	case 4:
		console.log("It's April!");
		break;
	case 5:
		console.log("It's May!");
		break;
	case 6:
		console.log("It's June!");
		break;
	case 7:
		console.log("It's July!");
		break;
	case 8:
		console.log("It's August!");
		break;
	case 9:
		console.log("It's September!");
		break;
	case 10:
		console.log("It's October!");
		break;
	case 11:
		console.log("It's November!");
		break;
	case 12:
		console.log("It's December!");
		break;
}