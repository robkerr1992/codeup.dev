var name = prompt("What is your name?");
var grades = [];
var subjects = [];
var awesomeGrade = 80;
var combinedGrades = 0;
var average;

var enterGrades = function () {
	do {
	subjects.push(prompt("What is the subject?"));
	grades.push(prompt("What is the grade?"));
	var cancel = confirm("Enter more grades?");

} while (cancel);
}

var gradeAverage = function () {
	for (i=0; i < grades.length; i++) {
	combinedGrades = combinedGrades + Number(grades[i]);
	}
	average = combinedGrades / grades.length
	return average;
}

var gradeLogger = function () {
	for (i=0; i < grades.length; i++) {
		console.log(subjects[i] + " was the subject and " + grades[i] + " was your grade.");
	}
}


enterGrades();
gradeAverage();
gradeLogger();
console.log(average + " was your average, " + name + ".");
