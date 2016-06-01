'use strict';

var grade1 = 70;
var grade2 = 80;
var grade3 = 95;
var average = 3;

if ((grade1 + grade2 + grade3)/average >= 80){
	console.log("You're awesome!");
} else {
	console.log("You need to practice, ya'll.");

}

var cameron = 180;
var ryan = 250;
var george = 320;
var newTotal;

if (cameron>=200) {
	newTotal = cameron * .65;
	console.log("Cameron's new total is " + newTotal);


} else if (cameron<200) {
	newTotal = 200 - cameron;
	console.log("Cameron's new total is " + newTotal);

}

if (ryan>=200) {
	newTotal = ryan * .65;
	console.log("Ryan's new total is " + newTotal);


} else if (ryan<200) {
	newTotal = 200 - ryan;
	console.log("Ryan's new total is " + newTotal);

}

if (george>=200) {
	newTotal = george * .65;
	console.log("George's new total is " + newTotal);


} else if (george<200) {
	newTotal = 200 - george;
	console.log("George's new total is " + newTotal);

}

var flipACoin = Math.floor(Math.random()* 2);

console.log((flipACoin == 1) ? "Buy a House!" : "Buy a Car!");