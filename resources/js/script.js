$(document).ready(function(){
    $(window).scroll(function(){
        if(this.scrollY > 20){
            $('.navbar').addClass("sticky");
        }else {
            $('.navbar').removeClass("sticky");
        }
        if(this.scrollY > 500){
            $('.scroll-up-btn').addClass("show"); 
        }else{
            $('.scroll-up-btn').removeClass("show"); 
        }
    });

    //slide-up script
    $('.scroll-up-btn').click(function (){          
        $('html').animate({scrollTop: 0});       
    }); 
    

    //toogle menu/navbar script
    $('.menu-btn').click(function () {
        console.log("ok")
        $('.navbar .menu').toggleClass("active");
        $('.menu-btn i').toggleClass("active");
    });
})