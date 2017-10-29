/*(function(){
    var imgLen = document.getElementById('imgGallary');
    var images = imgLen.getElementsByTagName('img');
    var counter = 1;

    if(counter <= images.length){
        setInterval(function(){
            images[0].src = images[counter].src;
            console.log(images[counter].src);
            counter++;

            if(counter === images.length){
                counter = 1;
            }
        },8000);
    }
})();*/

/*
$(document).ready(function(){
    $(document).mousemove(function(e){
        TweenLite.to($('body'),
            .5,
            { css:
                {
                    backgroundPosition: ""+ parseInt(event.pageX/8) + "px "+parseInt(event.pageY/'12')+"px, "+parseInt(event.pageX/'15')+"px "+parseInt(event.pageY/'15')+"px, "+parseInt(event.pageX/'30')+"px "+parseInt(event.pageY/'30')+"px"
                }
            });
    });
});*/
