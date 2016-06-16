//var nameArray = []
//var saveButton = document.getElementById('save-name');
var saveButton = $('#save-name');
//var addGradeButton = document.getElementById('add-grade');
var addGradeButton = $('#add-grade');
//var calculateAverage = document.getElementById('calculate-average');
var calculateAverageButton = $('#calculate-average');


var removeDisable= function () {
	if ($("#name").val() !== "") {
		addGradeButton.removeAttr('disabled');
		calculateAverageButton.removeAttr('disabled');

	}
}

var pushName = function () {
	if ($("name").val() !== "") {
		//nameArray.push($("#name").val());
		$('#student-name').html($('#name').val());

	}
}

var pushGrade = function () {
	if ($('#subject').val() !== "" && $('#grade').val() !== "") {
		var subjectName = $('#subject').val();
		var subjectGrade = Number($('#grade').val());
		student.addSubject(subjectName, subjectGrade);
		var gradeEntry ='<tr><td>' + subjectName + '</td><td>' + subjectGrade + '</td></tr>';
		$('#grades').html(gradeEntry + $('#grades').html());
		$('#subject').val("");
		$('#grade').val("");
	}
}

var finalAverage = function () {
	//var studentAverage = $('#student-average');
	// console.log(studentAverage.innerHTML);
	// console.log(student.calculateAverage());

	$('#student-average').text(student.calculateAverage());
	// console.log(student.isAwesome());
	// console.log(document.getElementById('student-awesome'));
	// console.log(document.getElementById('student-practice'));


	if (student.isAwesome()) {
		$('#student-awesome').removeAttr('class');
		$('#student-practice').addClass('hidden');
	} else {
		$('#student-practice').removeAttr('class');
		$('#student-awesome').addClass('hidden');
	}



}



//calculateAverage.addEventListener('click', finalAverage, false)
calculateAverageButton.on('click', finalAverage);
//addGradeButton.addEventListener('click', pushGrade, false);
addGradeButton.on('click', pushGrade);
//saveButton.addEventListener('click', removeDisable, false);
saveButton.on('click', removeDisable);
//saveButton.addEventListener('click', pushName, false);
saveButton.on('click', pushName);

console.log(saveButton);
console.log(addGradeButton);
console.log(calculateAverageButton);