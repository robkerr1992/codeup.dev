// (function(){
//     "use strict";
//     var names = ["Rob", "Roberto", "Robby", "Robert"];

//     // TODO: Create an array of 4 people's names using literal array notation, in a variable called 'names'.
//     console.log(names.length);
//     // TODO: Create a log statement that will log the number of elements in the names array.
//     console.log(names[0]);
//     console.log(names[1]);
//     console.log(names[2]);
//     console.log(names[3]);
//     // TODO: Create log statements that will print each of the names array elements individually.
// })();
(function(){
var names = ["Rob", "Roberto", "Robby", "Robert"];

for (var i = 0; i < names.length; i++) {
	console.log(names[i]);
}
})();

(function(){
var names = ["Rob", "Roberto", "Robby", "Robert"];

names.forEach(function (a,b,c) {
	console.log("Whats your name? " + a + "?");
});
})();