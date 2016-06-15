var firstInput = document.getElementById('firstInput');
var secondInput = document.getElementById('secondInput');
var operandInput = document.getElementById('operand');
var numbers = document.getElementsByClassName('numberBtn');
var operands = document.getElementsByClassName('operandBtn');
var clear = document.getElementById('clearBtn');
var equals = document.getElementById('equalsBtn');
var decimal = document.getElementById('decimalBtn');
var backspace = document.getElementById('backspaceBtn');
var numberSpitter = function () {
	var numberSelected = this.getAttribute('data-value');
	if (operandInput.value !== "") {
		// numberSelected = this.getAttribute('data-value');
		secondInput.value += numberSelected;
	} else {
		firstInput.value += numberSelected;
	}
}
var operandSpitter = function () {
	var operandSelected = this.getAttribute('data-value');
	operandInput.value = operandSelected;
}
var processNumbers = function() {
	if (operandInput.value == '+') {
		firstInput.value = ((parseFloat(firstInput.value)) + (parseFloat(secondInput.value))).toFixed(4);
		operandInput.value = "";
		secondInput.value = "";
	} else if (operandInput.value == '-') {
		firstInput.value = ((parseFloat(firstInput.value)) - (parseFloat(secondInput.value))).toFixed(4);
		operandInput.value = "";
		secondInput.value = "";
	} else if (operandInput.value == '*') {
		firstInput.value = ((parseFloat(firstInput.value)) * (parseFloat(secondInput.value))).toFixed(4);
		operandInput.value = "";
		secondInput.value = "";

	} else if (operandInput.value == '/') {
		firstInput.value = ((parseFloat(firstInput.value)) / (parseFloat(secondInput.value))).toFixed(4);
		operandInput.value = "";
		secondInput.value = "";
	}
}
var clearAllFields = function () {
	firstInput.value = ""
	operandInput.value = ""
	secondInput.value = ""
}
var decimalPlacer = function () {
	if (operandInput.value == "" && firstInput.value.indexOf('.') == -1 && firstInput.value == "") {
		firstInput.value = '0.';
	} else if (operandInput.value == "" && firstInput.value.indexOf('.') == -1) {
		firstInput.value += '.';
	} else if (operandInput.value !== "" && secondInput.value.indexOf('.') == -1 && secondInput.value == "") {
		secondInput.value = '0.';
	} else if (operandInput.value !== "" && secondInput.value.indexOf('.') == -1) {
		secondInput.value += '.';
	}
}
var backspacer = function () {
	if (operandInput.value == "" && firstInput.value !== "") {
		firstInput.value = firstInput.value.substring(0, firstInput.value.length - 1);

	} else if (secondInput.value !== "") {
		secondInput.value = secondInput.value.substring(0, secondInput.value.length - 1);

	} else if (firstInput.value !== "" && operandInput.value !== "") {
		operandInput.value = "";
	}
}
for (var i = 0; i < this.numbers.length; i++) {
numbers[i].addEventListener('click', numberSpitter, false);
}
for (var i = 0; i < this.operands.length; i++) {
operands[i].addEventListener('click', operandSpitter, false);
}
equals.addEventListener('click', processNumbers, false);
clear.addEventListener('click', clearAllFields, false);
decimal.addEventListener('click', decimalPlacer, false);
backspace.addEventListener('click', backspacer, false);