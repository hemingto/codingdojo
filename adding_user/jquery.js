
$(document).ready( function() {


$("form").submit(function() {
	var fname = $("#first_name").val();
	var lname = $("#last_name").val();
	var email = $("#email").val();
	var contact = $("#contact").val();
	
	$('tr:last-child').after('<td>' +fname + '</td>' + '<td>' +lname + '</td>' + '<td>' +email + '</td>' + '<td>' +contact + '</td>' );
	return false;
});



});