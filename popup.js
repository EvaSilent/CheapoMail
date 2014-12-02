$(document).ready(function() {

function popup() {
$("#logindiv").css("display", "block");
}
$("#login #cancel").click(function() {
$(this).parent().parent().hide();
});
$("#sentmessage").click(function() {
$("#senddiv").css("display", "block");
});
$("#out #cancel").click(function() {
$(this).parent().parent().hide();
});
$("#inbox").click(function() {
$("#sentdiv").css("display", "block");
});
$("#in #cancel").click(function() {
$(this).parent().parent().hide();
});

$("#onclick").click(function() {
$("#contactdiv").css("display", "block");
});
$("#contact #cancel").click(function() {
$(this).parent().parent().hide();
});
// Contact form popup send-button click event.
$("#send").click(function() {
var name = $("#name").val();
var subject = $("#subject").val();
var message = $("#message").val();
if (name == "" || email == "" || message == ""){
alert("Please Fill All Fields");
}else{
if (validateEmail(email)) {
$("#contactdiv").css("display", "none");
}else {
alert('Invalid Email Address');
}

}
});

});