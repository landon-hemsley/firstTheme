var resize = function(){
    var sections = document.getElementsByClassName("home-section");
    for(var i = 0; i<sections.length; i++){
        sections[i].style.height = window.innerHeight + "px";
    }
    if(window.innerHeight > 440){
        document.getElementById("home-leadbox").style.top = (0.25 * window.innerHeight) + "px";
    }
    else{
        document.getElementById("home-leadbox").style.top =  "10px";
    }
}



jQuery(document).ready(function($){
    resize();
    var mask = $("#home-header-mask:hidden");
    if(mask != null){
        mask.delay(200).fadeIn();
    }
    
    window.onresize = resize;
});
