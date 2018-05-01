$(document).ready(function(){
	var name = "";
	var email = "";
	var password = "";
	var confirm = "";
	var name_reg = /^[a-z ]+$/i;

	var email_reg = /^[a-z]+[0-9a-zA-Z_\.]*@[a-z_]+\.[a-z]+$/;
	//  === Name Validations ===
	$("#name").focusout(function(){
		var store = $.trim($("#name").val());
		if(store.length == "") {
			$(".name-error").html("Name is required!");
			$("#name").addClass("border-red");
			$("#name").removeClass("border-green");
			name = "";
		} else if(name_reg.test(store)) {
			$(".name-error").html("");
			$("#name").addClass("border-green");
			$("#name").removeClass("border-red");
			name = store;
		} else {
			$(".name-error").html("Numbers are not allowed!");
			$("#name").addClass("border-red");
			$("#name").removeClass("border-green");
			name = "";
		}
		
	})
	// Close Name Validations

	// === Email Validation ===
	$("#email").focusout(function(){
		var email_store = $.trim($("#email").val());
		if(email_store.length == "") {
			$(".email-error").html("Email required!");
			$("#email").addClass("border-red");
			$("#email").removeClass("border-green");
			email = "";
		} else if (email_reg.test(email_store)) {
			$(".email-error").html("");
			$("#email").addClass("border-green");
			$("#email").removeClass("border-red");
			email = email_reg;
		} else {
			$(".email-error").html("Invalid Email format!");
			$("#email").addClass("border-red");
			$("#email").removeClass("border-green");
			email = "";
		}	
	})
})