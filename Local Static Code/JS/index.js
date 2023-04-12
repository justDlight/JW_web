function blackOut(x) {
  x.style.background = "black";
  x.style.color = "white";
}

function normalImg(x) {
    x.style.background = "#01FF56";
    x.style.color = "black";
}

function blackOut1(x) {
    x.style.background = "white";
    x.style.color = "black";
  }

function normalImg1(x) {
    x.style.background = "#01FF56";
    x.style.color = "black";
}

function dwn_resume() {
    var link = document.createElement("a")
    link.href = "https://lightintime.com/img/John_Weiss_Resume.pdf";
    link.target = "_blank"
    link.click()
  }

  function climb_tas_link () {
    var link = document.createElement("a")
    link.href = "https://climbingtasmania.com/login.php";
    link.target = "_blank"
    link.click()
  }

  function climb_tas_github () {
    var link = document.createElement("a")
    link.href = "https://github.com/justDlight/list_web_app";
    link.target = "_blank"
    link.click()
  }

  function android_link () {
    var link = document.createElement("a")
    link.href = "https://play.google.com/store/apps/details?id=com.eaziapps.cms.android635f10feb6de3&hl=en&gl=US";
    link.target = "_blank"
    link.click()
  }

  function iOS_link () {
    var link = document.createElement("a")
    link.href = "https://apps.apple.com/au/app/shop-tasmania/id6444770736";
    link.target = "_blank"
    link.click()
  }

  function shop_github_link () {
    var link = document.createElement("a")
    link.href = "https://github.com/justDlight/Shop_Tasmania_CSS";
    link.target = "_blank"
    link.click()
  }

  function light_link () {
    var link = document.createElement("a")
    link.href = "http://www.lightintime.com/";
    link.target = "_blank"
    link.click()
  }

  function light_github_link () {
    var link = document.createElement("a")
    link.href = "https://github.com/justDlight/Light_In_Time";
    link.target = "_blank"
    link.click()
  }

  function web_github_link () {
    var link = document.createElement("a")
    link.href = "https://github.com/justDlight/JW_web";
    link.target = "_blank"
    link.click()
  }

  function eweb_github_link () {
    var link = document.createElement("a")
    link.href = "https://github.com/justDlight/ecommerce_site";
    link.target = "_blank"
    link.click()
  }


  function switchVisible() {
    // hide all description paragraphs
    document.getElementById("description-txt-1").style.display = "none";
    document.getElementById("description-txt-2").style.display = "none";
    document.getElementById("description-txt-3").style.display = "none";
    document.getElementById("description-txt-4").style.display = "none";
  
    // show the selected description paragraph
    if (document.getElementById("web-txt").classList.contains("active")) {
      document.getElementById("description-txt-1").style.display = "block";
    } else if (document.getElementById("app-txt").classList.contains("active")) {
      document.getElementById("description-txt-2").style.display = "block";
    } else if (document.getElementById("ui-txt").classList.contains("active")) {
      document.getElementById("description-txt-3").style.display = "block";
    } else if (document.getElementById("other-txt").classList.contains("active")) {
      document.getElementById("description-txt-4").style.display = "block";
    }
  }
  
  // add click event listeners to the header elements
  document.getElementById("web-txt").addEventListener("click", function() {
    document.getElementById("web-txt").classList.add("active");
    document.getElementById("app-txt").classList.remove("active");
    document.getElementById("ui-txt").classList.remove("active");
    document.getElementById("other-txt").classList.remove("active");
    switchVisible();
  });
  
  document.getElementById("app-txt").addEventListener("click", function() {
    document.getElementById("web-txt").classList.remove("active");
    document.getElementById("app-txt").classList.add("active");
    document.getElementById("ui-txt").classList.remove("active");
    document.getElementById("other-txt").classList.remove("active");
    switchVisible();
  });
  
  document.getElementById("ui-txt").addEventListener("click", function() {
    document.getElementById("web-txt").classList.remove("active");
    document.getElementById("app-txt").classList.remove("active");
    document.getElementById("ui-txt").classList.add("active");
    document.getElementById("other-txt").classList.remove("active");
    switchVisible();
  });
  
  document.getElementById("other-txt").addEventListener("click", function() {
    document.getElementById("web-txt").classList.remove("active");
    document.getElementById("app-txt").classList.remove("active");
    document.getElementById("ui-txt").classList.remove("active");
    document.getElementById("other-txt").classList.add("active");
    switchVisible();
  });
  
  
function toContactme() {
    window.location.href = "https://johnweiss1996.com/#footer-row";
}

function goMobile() {
  window.location.href = "http://localhost/Portfolio/Local%20Static%20Code/PHP/mobileHome.php";
}
  
function goDesktop() {
  window.location.href = "http://localhost/Portfolio/Local%20Static%20Code/PHP/";
}

function toHome() {
  window.location.href = "https://johnweiss1996.com";
}
  

  
  






