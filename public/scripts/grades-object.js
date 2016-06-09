'use strict';

// console.log('grade question');
// var grade1 = 70;
// var grade2 = 80;
// var grade3 = 95;

// var combinedGrades = grade1 + grade2 + grade3;
// var numberOfGrades = 3;
// var awesomeGrade = 80;

// var average = combinedGrades / numberOfGrades;

// if (average > awesomeGrade) {
// 	console.log("You're Awesome!!!!");
// } else {
// 	console.log('You need more practice.');
// }







name = prompt("What is your name?");
grades =  [];
subjects = [];

	enterGrades = function () {
		for (i=0, i<grades.length - 1, i++) {
		var subject = prompt("What subject is this?");
		// grades.push[i]prompt("What is your grade?");
		var yes = confirm("Enter more grades?");

			if (!yes) {
			return grades;
			break;
	} 
}
	};


	combinedGrades = grades.forEach(function(grades,index) {
		grades = grades + grades[i];
		return grades;

	},


	average = function (combinedGrades, numberOfGrades) {
		return (combinedGrades / this.grades.length);

	});
}
}