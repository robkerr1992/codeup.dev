var nameArray = []
var saveBtn = document.getElementById('save-name');
var addGradeBtn = document.getElementById('add-grade');
var calculateAverage = document.getElementById('calculate-average');


var removeDisable= function () {
	if (document.getElementById("name").value !== "") {
		addGradeBtn.removeAttribute('disabled');
		calculateAverage.removeAttribute('disabled');

	}
}

var pushName = function () {
	if (document.getElementById("name").value !== "") {
		nameArray.push(document.getElementById("name").value);
		document.getElementById('student-name').innerHTML = document.getElementById('name').value;

	}
}

var pushGrade = function () {
	if (document.getElementById('subject').value !== "" && document.getElementById('grade').value !== "") {
		var subjectName = document.getElementById('subject').value;
		var subjectGrade = Number(document.getElementById('grade').value);
		student.addSubject(subjectName, subjectGrade);
		var gradeEntry ='<tr><td>' + subjectName + '</td><td>' + subjectGrade + '</td></tr>';
		document.getElementById('grades').innerHTML = gradeEntry + document.getElementById('grades').innerHTML;
		document.getElementById('subject').value = "";
		document.getElementById('grade').value = "";
	}
}

var finalAverage = function () {
	var studentAverage = document.getElementById('student-average');
	// console.log(studentAverage.innerHTML);
	// console.log(student.calculateAverage());

	studentAverage.innerText = student.calculateAverage();
	// console.log(student.isAwesome());
	// console.log(document.getElementById('student-awesome'));
	// console.log(document.getElementById('student-practice'));


	if (student.isAwesome()) {
		document.getElementById('student-awesome').removeAttribute('class');
		document.getElementById('student-practice').addAttribute('class', 'hidden');
	} else {
		document.getElementById('student-practice').removeAttribute('class');
		document.getElementById('student-awesome').addAttribute('class', 'hidden');
	}



}



calculateAverage.addEventListener('click', finalAverage, false)
addGradeBtn.addEventListener('click', pushGrade, false);
saveBtn.addEventListener('click', removeDisable, false);
saveBtn.addEventListener('click', pushName, false);

console.log(saveBtn);
console.log(addGradeBtn);
console.log(calculateAverage);