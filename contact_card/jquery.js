
$(document).ready(function() {


$("#form_container").hide();

$("button").click(function(){

	$("#form_container").slideToggle("slow");

});



$(document).on("click", "#submit", function (){

	var fname = $("#fname").val();
	var lname = $("#lname").val();
	var description = $("#description").val();

	$("#container").append("<div><h2 class='fname'>" +fname +"</h2> <h2>" + lname + "</h2><p class='click_des'> Click for description </p> <p class='hidden_des'>" + description +"</p></div>");

	return false;


});


$(document).on("click", ".click_des", function() {

	$(this).hide();
	$(this).siblings(".hidden_des").show();



});







});