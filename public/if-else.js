'use strict';

var grade1 = 70;
var grade2 = 80;
var grade3 = 95;
var average = 3;
var gradesCombined = grade1 + grade2 + grade3
if (gradesCombined/average >= 80){
	console.log("You're awesome!");
} else {
	console.log("You need to practice, ya'll.");

}

var cameron = 180;
var ryan = 250;
var george = 320;
var discount = .65;
var newTotal;

if (cameron>=200) {
	newTotal = cameron * discount;
	console.log("Cameron's discounted total is $" + newTotal + ".");


} else if (cameron<200) {
	newTotal = 200 - cameron;
	console.log("Cameron needs to spend $" + newTotal + " more.");

}


if (ryan>=200) {
	newTotal = ryan * discount;
	console.log("Ryan's discounted total is $" + newTotal + ".");


} else if (ryan<200) {
	newTotal = 200 - ryan;
	console.log("Ryan needs to spend $" + newTotal + " more.");

}


if (george>=200) {
	newTotal = george * discount;
	console.log("George's discounted total is $" + newTotal + ".");


} else if (george<200) {
	newTotal = 200 - george;
	console.log("George needs to spend $" + newTotal + " more.");

}

var flipACoin = Math.floor(Math.random()* 2);

console.log((flipACoin) ? "Buy a House you crazy mother!" : "Jk, Buy a Car! Way less crazy...");



