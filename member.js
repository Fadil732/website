// JavaScript for email validation
function validateEmail() {
  var emailInput = document.getElementById("Email");
  var email = emailInput.value;
  var atPosition = email.indexOf("@");
  var dotPosition = email.lastIndexOf(".");
  if (atPosition < 1 || dotPosition < atPosition + 2 || dotPosition + 2 >= email.length) {
      alert("Please enter a valid email address.");
      return false;
  }
  return true;
}