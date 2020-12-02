function onLoginClick(e) {
  e.preventDefault();
  console.log("button clicked");
  window.location.href = "/login.php";
}


function onUploadClick(){
  window.location.href = "/login.php";
}


var nav = "home"
function onNav(h){
  console.log(h);
  nav = h ;

  var home = document.getElementById("nav-home");
  var f = document.getElementById("nav-features");
  var c = document.getElementById("nav-contact");
  var a = document.getElementById("nav-about");

  if(nav == "home"){
    home.className = "nav-main";
    f.className= "";
    c.className = "";
    a.className ="";
  }else if(nav == "features"){
    f.className = "nav-main";
    home.className= "";
    c.className = "";
    a.className ="";
  }else if(nav == "contact"){
    c.className = "nav-main";
    f.className = "";
    home.className= "";
    a.className ="";
  }else{
      c.className = "";
    f.className = "";
    home.className= "";
    a.className ="nav-main";
  }
}
