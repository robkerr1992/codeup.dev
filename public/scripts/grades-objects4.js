var awesomeGrade = 80;
var combinedGrades = 0;
var average;
var	name = prompt("What is your name?");

var gradeObject = {
	grades : [],
	subjects : [],

	Grades : function () {
		do {
		this.subjects.push(prompt("What is the subject?"));
		this.grades.push(Number(prompt("What is the grade?")));
		var cancel = confirm("Enter more grades?");

		} 	while (cancel);
		},

	Average : function () {
		for (i=0; i < this.grades.length; i++) {
		combinedGrades = combinedGrades + this.grades[i];
		}
		average = combinedGrades / this.grades.length
		return average;
		},

	Logger : function () {
		for (i=0; i < this.grades.length; i++) {
		console.log(this.subjects[i] + " was the subject and " + this.grades[i] + " was your grade.");
		}
		},

	goodOrBad : function () {
		if (average > awesomeGrade) {
			console.log("Good job, Bro! " + Math.round(average) 
				+ " was your average!")
		} else {
			console.log("Work harder next time! " + Math.round(average) 
				+ " isn't good enough.")
		}

	}




};



gradeObject.Grades();
gradeObject.Average();
gradeObject.Logger();
gradeObject.goodOrBad();