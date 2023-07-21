function toggle() {
    var blur = document.getElementById("content");
    blur.className = "contentblur";
    function popup() {
      document.getElementsByClassName("loginpopup")[0].classList.add("active");
      document.getElementById("sidenavbarid").style.marginTop = "100px";
      window.scrollTo(0,0);
    }
    popup();
}

function remtoggle() {
        document.getElementsByClassName("loginpopup")[0].classList.remove("active");
        var remblur = document.getElementById("content");
        remblur.className = "content";
        document.getElementById("sidenavbarid").style.marginTop = "2px";
}

function regtoggle() {
  var blur = document.getElementById("content");
  blur.className = "contentblur";
  function popup() {
    document.getElementsByClassName("registrationpopup")[0].classList.add("active");
    document.getElementById("sidenavbarid").style.marginTop = "100px";
    window.scrollTo(0,0);
  }
  popup();
}

function regremtoggle() {
      document.getElementsByClassName("registrationpopup")[0].classList.remove("active");
      var remblur = document.getElementById("content");
      remblur.className = "content";
      document.getElementById("sidenavbarid").style.marginTop = "2px";
}

function disablescroll() {
    // To get the scroll position of current webpage
    TopScroll = window.pageYOffset || document.documentElement.scrollTop;
    LeftScroll = window.pageXOffset || document.documentElement.scrollLeft,
    
    // if scroll happens, set it to the previous value
    window.onscroll = function() {
    window.scrollTo(LeftScroll, TopScroll);
            };
}
    
function enablescroll() {
    window.onscroll = function() {};
}

function hidedetails() {
    document.getElementById("userdetails").style.display = "none";
}



function exitdisplayerror(){
    document.getElementsByClassName("displayerror")[0].classList.remove("active");
}


function exitdisplayerror2(){
        document.getElementsByClassName("displayerror2")[0].classList.remove("active");
}



