var getRandomIntInclusive = function(min, max) {
  return Math.floor(Math.random() * (max - min + 1)) + min;
}

var randomNumbers = []
var j = 1;

var generateRandomNumber = function () {
	do {
		randomNumbers.push(getRandomIntInclusive(1, 4));
 	
	} while(j < randomNumbers.length)
	j++;

$('document').ready(generateRandomNumber());