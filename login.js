function onFormSubmit(e) {
  e.preventDefault();
  console.log("hey");
}

function validateFields(e) {
  e.preventDefault();
  var validemail =/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+.[a-zA-Z]{2,4}$/;
  if(document.loginForm.Name.value == ""){
    document.loginForm.Name.focus();
    document.getElementById("login-name").className = "login-input-error";
    document.getElementById("login-name-error").style.display = "block";
    return false;
  }else if (document.loginForm.Email.value == "") {
    document.loginForm.Email.focus();
    document.getElementById("login-email").className = "login-input-error";
    document.getElementById("login-email-error").style.display = "block";
    return false;
  }else if(!(validemail.test(document.loginForm.Email.value))){
    document.loginForm.Email.focus();
    document.getElementById("login-email").className = "login-input-error";
    // document.getElementById("login-email-error").innerHtml = "Invalid email";
        document.getElementById("login-email-error").style.display = "block";

    return false;  
  }
  else if (document.loginForm.Password.value == "" || document.loginForm.Password.value <= 6) {
    document.loginForm.Password.focus();
    document.getElementById("login-pass").className = "login-input-error";
    document.getElementById("login-pass-error").style.display = "block";
    return false;
  }else {
      return true ;
  }
}

function onEmailChange(val) {
  if (val.length > 0) {
    console.log("greater");
    document.getElementById("login-email").className = "login-input";
    document.getElementById("login-email-error").style.display = "none";
  } else {
    document.getElementById("login-email").className = "login-input-error";
    document.getElementById("login-email-error").style.display = "block";
  }
}

function onNameChange(val) {
  if (val.length > 0) {
    console.log("greater");
    document.getElementById("login-name").className = "login-input";
    document.getElementById("login-name-error").style.display = "none";
  } else {
    document.getElementById("login-name").className = "login-input-error";
    document.getElementById("login-name-error").style.display = "block";
  }
}

function onPassChange(val) {
  if (val.length > 0) {
    console.log("greater");
    document.getElementById("login-pass").className = "login-input";
    document.getElementById("login-pass-error").style.display = "none";
  } else {
    document.getElementById("login-pass").className = "login-input-error";
    document.getElementById("login-pass-error").style.display = "block";
  }
}
