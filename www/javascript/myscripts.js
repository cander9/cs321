  var test = document.getElementById("closerLook1");
  
  test.addEventListener("mouseover", function( event ) {   
    event.target.style.opacity = 0.5;

    setTimeout(function() {
      event.target.style.opacity = 0;
    }, 750);
  }, false);

  var test = document.getElementById("closerLook2");
  
  test.addEventListener("mouseover", function( event ) {   
    event.target.style.opacity = 0.5;

    setTimeout(function() {
      event.target.style.opacity = 0;
    }, 1000);
  }, false);

  var test = document.getElementById("closerLook3");
  
  test.addEventListener("mouseover", function( event ) {   
    event.target.style.opacity = 0.5;

    setTimeout(function() {
      event.target.style.opacity = 0;
    }, 1000);
  }, false);
