document.onreadystatechange = function() {
    if (document.readyState !== "complete") {
        document.querySelector(
          "body").style.visibility = "hidden";
        document.querySelector(
          ".loading").style.visibility = "visible";
        document.querySelector(
          "#loader").style.visibility = "visible";
    } else {
        setTimeout(function(){document.querySelector(
          ".loading").style.display = "none"}, 300);
        setTimeout(function(){document.querySelector(
          "#loader").style.display = "none"}, 300);
        document.querySelector(
          "body").style.visibility = "visible";
    }
};

/*document.body.onload=function(){
    setTimeout(function(){
        var preloader=document.getElementById('loader');
        if(!preloader.classList.contains('done')){
            preloader.classList.add('done');
        }
    },800)
}*/

var base = location.protocol+'//'+location.host;
var route = document.getElementsByName('routeName')[0].getAttribute('content');

$(document).ready(function(){

    AOS.init();

    $(window).on("scroll", function() {
        if($(window).scrollTop())
        {
            $('#header-second').css('position', 'fixed');
            $('#header-second').css('top', '0');
            $('#header-second').css('width', '100%');
            $('#header-second').css('background-color', 'rgba(6, 29, 56, .95)');
            $('#header-second').css('padding', '6px 20px');
            $('#header-second').addClass('shadow');
        }else
        {
            $('#header-second').css('position', 'unset');
            $('#header-second').css('top', 'unset');
            $('#header-second').css('width', 'unset');
            $('#header-second').css('background-color', 'rgba(6, 29, 56, .5)');
            $('#header-second').css('padding', '9px 20px');
            $('#header-second').removeClass('shadow');
        }
    })

    $("input[name=telephone]").bind("change keyup input", function() {
        var position = this.selectionStart - 1;
        var fixed = this.value.replace(/[^0-9]/g, "");
    
        if (this.value !== fixed) {
          this.value = fixed;
          this.selectionStart = position;
          this.selectionEnd = position;
        }
    });

    $('#carousel-slider').owlCarousel({
        loop: true,
        startPosition: 0,
        dots: true,
        margin: 0,
        autoplay: false,
        autoplayTimeout: 8000,
        touchDrag: true,
        mouseDrag: true,
        responsive: {
            0: {
            items: 1,
            nav: false,
            },
            768: {
            items: 1,
            nav: false,
            },
            900: {
            items: 1,
            nav: false,
            dots: true,
            }
        }
    });
    
    $('#carousel-header .owl-next').html('<img src="' + base + '/images/arrow-right.png">');
    $('#carousel-header .owl-prev').html('<img src="' + base + '/images/arrow-left.png">');

    $('#carousel-partners').owlCarousel({
        loop: true,
        startPosition: 0,
        dots: true,
        margin: 0,
        autoplay: false,
        autoplayTimeout: 8000,
        touchDrag: true,
        mouseDrag: true,
        nav: true,
        responsive: {
            0: {
            items: 1,
            nav: false,
            },
            768: {
            items: 1,
            nav: false,
            },
            900: {
            items: 5,
            nav: true,
            }
        }
    });
    
    $('#carousel-partners .owl-next').html('<img src="' + base + '/images/arrow-right.png">');
    $('#carousel-partners .owl-prev').html('<img src="' + base + '/images/arrow-left.png">');

    $('#carousel-cursos').owlCarousel({
        loop: true,
        startPosition: 0,
        dots: true,
        margin: 10,
        autoplay: false,
        autoplayTimeout: 8000,
        touchDrag: true,
        mouseDrag: true,
        nav: true,
        responsive: {
            0: {
            items: 1,
            nav: false,
            },
            768: {
            items: 1,
            nav: false,
            },
            900: {
            items: 4,
            nav: true,
            }
        }
    });
    
    $('#carousel-cursos .owl-next').html('<img src="' + base + '/images/arrow-right-black.png">');
    $('#carousel-cursos .owl-prev').html('<img src="' + base + '/images/arrow-left-black.png">');

    $('#carousel-recomendaciones').owlCarousel({
        loop: true,
        startPosition: 0,
        dots: true,
        margin: 20,
        autoplay: false,
        autoplayTimeout: 8000,
        touchDrag: true,
        mouseDrag: true,
        nav: true,
        responsive: {
            0: {
            items: 1,
            nav: false,
            },
            768: {
            items: 1,
            nav: false,
            },
            900: {
            items: 4,
            nav: true,
            }
        }
    });
    
    $('#carousel-recomendaciones .owl-next').html('<img src="' + base + '/images/arrow-right-black.png">');
    $('#carousel-recomendaciones .owl-prev').html('<img src="' + base + '/images/arrow-left-black.png">');

    $('[id*=btn-header]').on('click', function(){
        var id_list = $(this).attr('list');
        if($('#' + id_list).hasClass('noActiveList')){
            $('[class*=dropPrograma]').removeClass('ActiveList');
            $('[class*=dropPrograma]').addClass('noActiveList');
            $('#' + id_list).removeClass('noActiveList');
            $('#' + id_list).addClass('ActiveList');
            $('[id*=btn-header]').removeClass('active0');
            $(this).addClass('active0');
        }else{
            $('#' + id_list).removeClass('ActiveList');
            $('#' + id_list).addClass('noActiveList');
            $(this).removeClass('active0');
        }
    });

    $('.burgergg').on('click',function(){
        if($('.nav-mobile').hasClass('nav-mobile-active'))
        {
            $('.nav-mobile').removeClass('nav-mobile-active');
        }else
        {
            $('.nav-mobile').addClass('nav-mobile-active');
        }
        if($('.linea1').hasClass('toggle1')){$('.linea1').removeClass('toggle1');}else{$('.linea1').addClass('toggle1');}
        if($('.linea2').hasClass('toggle2')){$('.linea2').removeClass('toggle2');}else{$('.linea2').addClass('toggle2');}
        if($('.linea3').hasClass('toggle3')){$('.linea3').removeClass('toggle3');}else{$('.linea3').addClass('toggle3');}
    });

    $('.btn-cerrar').on('click',function(){
        if($('.nav-mobile').hasClass('nav-mobile-active'))
        {
            $('.nav-mobile').removeClass('nav-mobile-active');
        }else
        {
            $('.nav-mobile').addClass('nav-mobile-active');
        }
        if($('.linea1').hasClass('toggle1')){$('.linea1').removeClass('toggle1');}else{$('.linea1').addClass('toggle1');}
        if($('.linea2').hasClass('toggle2')){$('.linea2').removeClass('toggle2');}else{$('.linea2').addClass('toggle2');}
        if($('.linea3').hasClass('toggle3')){$('.linea3').removeClass('toggle3');}else{$('.linea3').addClass('toggle3');}
    });

})

$(document).on("click", function(event){
    var $trigger = $(".dropdown");
    if($trigger !== event.target && !$trigger.has(event.target).length){
        $(".dropPrograma").removeClass('ActiveList');
        $(".dropPrograma").addClass('noActiveList');
        $('[id*=btn-header]').removeClass('active0');
    }            
});