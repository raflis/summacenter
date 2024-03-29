/*document.onreadystatechange = function() {
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
};*/

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
var csrf_token = document.getElementsByName('csrf-token')[0].getAttribute('content');

function addToCart(id_product_, quantity_product_)
{
    if(isNaN(quantity_product_) || Number(quantity_product_) <= 0){
        return false;
    }

    $.ajax({
        type: "POST",
        headers: {
            'X-CSRF-Token': csrf_token 
        },
        url: base + '/addtocart',
        data: {
            _token: csrf_token, 
            id: id_product_, 
            quantity: 1,
        },
        success: function success(response) {
            if(response.success == true){
                $('.beforesend').removeClass('d-flex');
                $('.beforesend').addClass('d-none');

                /* popup add success */
                $('.image_product').attr('src', response.product['image']);
                $('.name_product').html(response.product['name']);
                $('.product_category').html(response.product['category']);
                $('.price_now_product').html('S/ ' + response.product['price']);
                /* end popup add success */

                /* lenght productss */
                $('#cant_header').html(Object.keys(response.cart).length);
                /* end lenght productss */
                
                /* list cart slide */
                var list = '';
                if(Object.keys(response.cart).length < 1){
                    list = '<div class="empty_cart">' +
                                '<i class="fa-solid fa-cart-shopping"></i>' +
                                '<br>' +
                                'Carrito vacío' +
                            '</div>';
                }else
                {
                    for(var i in response.cart){
                        html = '<div class="item" id="product_'+i+'">' +
                                    '<div class="image">' +
                                        '<img src="'+response.cart[i]['image']+'" alt="">' +
                                    '</div>' +
                                    '<div class="item_detail">' +
                                        '<a class="h5_name" href="'+response.cart[i]['url']+'">'+response.cart[i]['name']+'</a>' +
                                        '<div delete_product_id='+i+' class="delete_product">' +
                                            '<i class="fa-solid fa-xmark"></i>' +
                                        '</div>' +
                                        '<p class="cat">Categoria: <a href="'+response.cart[i]['url_category']+'" class="cat_name">'+response.cart[i]['category']+'</a></p>' +
                                        '<div class="amount_product">' +
                                            'Precio:' +
                                            '<div class="price_total">' +
                                                'S/ <span class="price_total_product_'+i+'">'+response.cart[i]['price']+'</span>' +
                                            '</div>' +
                                        '</div>' +
                                    '</div>' +
                                '</div>';
                        list = list + html;
                    }
                }
                $('#cartlist_items').html(list);
                $('.total').html(response.total);
                $('.subtotal').addClass('d-flex');
                $('.subtotal').removeClass('d-none');
                /* end list cart slide */
                $('#cartGracias').modal('show');
            }
        },
        beforeSend: function beforeSend() {
            $('.beforesend').removeClass('d-none');
            $('.beforesend').addClass('d-flex');
        },
        error: function error(_error3, e) {
            console.log(_error3);
            console.log(e);
        }
    });
}

function removeFromCart(delete_product_id_)
{
    $.ajax({
        type: "DELETE",
        headers: {
            'X-CSRF-Token': csrf_token 
        },
        url: base + '/removefromcart',
        data: {
            _token: csrf_token, 
            id: delete_product_id_, 
        },
        success: function success(response) {
            if(response.success == true){
                $('.beforesend').removeClass('d-flex');
                $('.beforesend').addClass('d-none');
                
                /* remove item product */
                $('#product_' + delete_product_id_).remove();
                $('.total').html(response.total);
                /* end remove item product */

                /* lenght productss */
                $('#cant_header').html(Object.keys(response.cart).length);
                /* end lenght productss */

                if(Object.keys(response.cart).length < 1){
                    list = '<div class="empty_cart">' +
                                '<i class="fa-solid fa-cart-shopping"></i>' +
                                '<br>' +
                                'Carrito vacío' +
                            '</div>';
                    $('#cartlist_items').html(list);
                    $('.subtotal').removeClass('d-flex');
                    $('.subtotal').addClass('d-none');
                }
            }
        },
        beforeSend: function beforeSend() {
            $('.beforesend').removeClass('d-none');
            $('.beforesend').addClass('d-flex');
        },
        error: function error(_error3, e) {
            console.log(_error3);
            console.log(e);
        }
    });
}

$(function(){

    AOS.init();

    $('[data-bs-toggle="tooltip"]').tooltip(); 

    $('[id*=cart_user]').on('click',function(e){
        e.preventDefault();
        if($('.cartlist').hasClass('cartlist-active'))
        {
            $('.cartlist').removeClass('cartlist-active');
            $('.fondo').removeClass('fondo-active');
        }else
        {
            $('.cartlist').addClass('cartlist-active');
            $('.fondo').addClass('fondo-active');
        }
    });

    $('.cartlist_close').on('click',function(){
        if($('.cartlist').hasClass('cartlist-active'))
        {
            $('.cartlist').removeClass('cartlist-active');
            $('.fondo').removeClass('fondo-active');
        }
    });

    $('.btn-add').on('click', function(e){
        e.preventDefault();
        id_product = $(this).attr('id_product');
        quantity_product = 1;
        addToCart(id_product, quantity_product);
    });

    $('a[id*=delete_product_cart]').on('click', function(e){
        e.preventDefault();
        id = $(this).attr('id_product');
        $.ajax({
            url: '/removefromcart',
            method: "delete",
            headers: {
                'X-CSRF-Token': csrf_token 
            },
            data: {_token: csrf_token, id: id},
            success: function (response) {
                if(response.success == true){
                    window.location.reload();
                }
            }
        });
        return false;
    });

    $(document).on('click', '.delete_product', function(e){
        delete_product_id = $(this).attr('delete_product_id');
        removeFromCart(delete_product_id);
    });

    $('.btn-cupon').on('click', function(e){
        e.preventDefault();
        promo = $('#promo').val();
        if(promo == '')
        {
            $('#promo').focus();
            return false;
        }
        $.ajax({
            url: '/addpromo',
            method: "post",
            headers: {
                'X-CSRF-Token': csrf_token 
            },
            data: {_token: csrf_token, promo: promo},
            success: function (response) {
                if(response.success == true){
                    window.location.reload();
                }
                if(response.success == false){
                    $('#promo-error').html('El código de cupón introducido no es válido. ¿Es posible que hayas utilizado el código de cupón equivocado?');
                }
            }
        });
        return false;
    });

    $('#deletepromo').on('click', function(e){
        e.preventDefault();
        $.ajax({
            url: '/deletepromo',
            method: "DELETE",
            headers: {
                'X-CSRF-Token': csrf_token 
            },
            data: {_token: csrf_token},
            success: function (response) {
                if(response.success == true){
                    window.location.reload();
                }else{
                    $('#promo-error').html('Ah ocurrido un error :(');
                }
            }
        });
        return false;
    });

    if(route == 'post')
    {
        initialize_owl($('#carousel-blog1'));

        let tabs = [
            { target: '#pills_0', owl: '#carousel-blog0' },
            { target: '#pills_1', owl: '#carousel-blog1' },
            { target: '#pills_2', owl: '#carousel-blog2' },
            { target: '#pills_3', owl: '#carousel-blog3' },
            { target: '#pills_4', owl: '#carousel-blog4' },
            { target: '#pills_5', owl: '#carousel-blog5' },
            { target: '#pills_6', owl: '#carousel-blog6' },
            { target: '#pills_7', owl: '#carousel-blog7' },
            { target: '#pills_8', owl: '#carousel-blog8' },
            { target: '#pills_9', owl: '#carousel-blog9' },
            { target: '#pills_10', owl: '#carousel-blog10' },
            { target: '#pills_11', owl: '#carousel-blog11' },
            { target: '#pills_12', owl: '#carousel-blog12' },
            { target: '#pills_13', owl: '#carousel-blog13' },
        ];

        // Setup 'bs.tab' event listeners for each tab
        tabs.forEach((tab) => {
            $(`a[href="${ tab.target }"]`)
            .on('shown.bs.tab', () => initialize_owl($(tab.owl)))
            .on('hide.bs.tab', () => destroy_owl($(tab.owl)));
        });
    }

    $(window).on("scroll", function() {
        if($(window).scrollTop())
        {
            $('#header-second').css('position', 'fixed');
            $('#header-second').css('top', '0');
            $('#header-second').css('width', '100%');
            $('#header-second').css('background-color', 'rgba(255, 255, 255, .95)');
            $('#header-second').addClass('shadow');
        }else
        {
            console.log('top');
            $('#header-second').css('position', 'unset');
            $('#header-second').css('top', 'unset');
            $('#header-second').css('width', 'unset');
            $('#header-second').css('background-color', 'rgba(255, 255, 255, 1)');
            $('#header-second').removeClass('shadow');
        }
    });

    'use strict';
    window.addEventListener('load', function() {
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.getElementsByClassName('needs-validation');
        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function(form) {
        form.addEventListener('submit', function(event) {
            if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
            } else{ // for me
            form.classList.add('submitted'); // for me
                $('input[type=submit]').attr('value', 'Enviando ...');
                $('input[type=submit]').attr('disabled', true);
                $(this).find(':submit').html('<i class="fa fa-spinner fa-spin"></i> Enviando ...');
                $(this).find(':submit').attr('disabled', true);
            }
            form.classList.add('was-validated');
        }, false);
        });
    }, false);

    $("input[name=telephone]").bind("change keyup input", function() {
        var position = this.selectionStart - 1;
        var fixed = this.value.replace(/[^0-9]/g, "");
    
        if (this.value !== fixed) {
          this.value = fixed;
          this.selectionStart = position;
          this.selectionEnd = position;
        }
    });

    $('[id*=flag_selec]').on('click', function(){
        var imagen_bandera = $(this).attr('imagen_bandera');
        var placeholder_bandera = $(this).attr('placeholder_bandera');
        var flag_id = $(this).attr('flag_id');
        $('.flag_user').attr('src', imagen_bandera);
        $('#telephone').attr('placeholder', placeholder_bandera);
        $('input[name=flag_id]').val(flag_id);
        console.log(imagen_bandera);
    })

    $('div[id*=mode_pay]').on('click', function(e){
        e.preventDefault();
        $('div[id*=mode_pay]').removeClass('active_mode');
        $(this).addClass('active_mode');
        $('input[name=mode]').val($(this).attr('pay_value'));
        $('p[id*=mode_text]').removeClass('d-none');
        $('p[id*=mode_text]').addClass('d-none');
        $('#mode_text' + $(this).attr('pay_value')).removeClass('d-none');
    });

    $('#carousel-slider').owlCarousel({
        loop: true,
        startPosition: 0,
        dots: true,
        margin: 0,
        autoplay: true,
        autoplayTimeout: 3000,
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
        dots: false,
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

    $('#carousel-alliance').owlCarousel({
        loop: true,
        startPosition: 0,
        dots: false,
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
    
    $('#carousel-alliance .owl-next').html('<img src="' + base + '/images/arrow-right.png">');
    $('#carousel-alliance .owl-prev').html('<img src="' + base + '/images/arrow-left.png">');

    $('#carousel-chooseus').owlCarousel({
        loop: true,
        startPosition: 0,
        dots: false,
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
    
    $('#carousel-chooseus .owl-next').html('<img src="' + base + '/images/arrow-right-black.png">');
    $('#carousel-chooseus .owl-prev').html('<img src="' + base + '/images/arrow-left-black.png">');

    $('#carousel-confiaron-empresas').owlCarousel({
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
    
    $('#carousel-confiaron-empresas .owl-next').html('<img src="' + base + '/images/arrow-right.png">');
    $('#carousel-confiaron-empresas .owl-prev').html('<img src="' + base + '/images/arrow-left.png">');

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

    $('#carousel-blog-index').owlCarousel({
        loop: false,
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
            items: 3,
            nav: true,
            }
        }
    });
    
    $('#carousel-blog-index .owl-next').html('<img src="' + base + '/images/arrow-right-black.png">');
    $('#carousel-blog-index .owl-prev').html('<img src="' + base + '/images/arrow-left-black.png">');

    $('#carousel-blog-index2').owlCarousel({
        loop: false,
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
            items: 3,
            nav: true,
            }
        }
    });
    
    $('#carousel-blog-index2 .owl-next').html('<img src="' + base + '/images/arrow-right-black.png">');
    $('#carousel-blog-index2 .owl-prev').html('<img src="' + base + '/images/arrow-left-black.png">');

    $('#carousel-curso-profesor').owlCarousel({
        loop: true,
        startPosition: 0,
        dots: true,
        margin: 0,
        autoplay: false,
        autoplayTimeout: 10000,
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
            items: 1,
            nav: true,
            }
        }
    });
    
    $('#carousel-recomendaciones').owlCarousel({
        loop: true,
        startPosition: 0,
        dots: true,
        margin: 0,
        autoplay: false,
        autoplayTimeout: 8000,
        touchDrag: true,
        mouseDrag: true,
        nav: false,
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
            nav: false,
            }
        }
    });
    
    $('#carousel-recomendaciones .owl-next').html('<img src="' + base + '/images/arrow-right-black.png">');
    $('#carousel-recomendaciones .owl-prev').html('<img src="' + base + '/images/arrow-left-black.png">');

    $('[id*=carousel-blog]').owlCarousel({
        loop: true,
        startPosition: 0,
        dots: true,
        margin: 0,
        autoplay: false,
        autoplayTimeout: 8000,
        touchDrag: true,
        mouseDrag: true,
        nav: true,
        items: 3,
        responsive: {
            0: {
            items: 1,
            nav: true,
            }
        }
    });
    
    $('[id*=carousel-blog] .owl-next').html('<img src="' + base + '/images/arrow-right-black.png">');
    $('[id*=carousel-blog] .owl-prev').html('<img src="' + base + '/images/arrow-left-black.png">');

    $('#carouselblog-related').owlCarousel({
        loop: true,
        startPosition: 0,
        dots: false,
        margin: 0,
        autoplay: false,
        autoplayTimeout: 8000,
        touchDrag: true,
        mouseDrag: true,
        margin: 40,
        nav: true,
        center: true,
        responsive: {
            0: {
            items: 1,
            nav: true,
            },
            768: {
            items: 1,
            nav: true,
            },
            900: {
            items: 3,
            nav: true,
            }
        }
    });
    
    $('#carouselblog-related .owl-next').html('<img src="' + base + '/images/arrow-right-black.png">');
    $('#carouselblog-related .owl-prev').html('<img src="' + base + '/images/arrow-left-black.png">');

    $('[id*=btn-header]').on('mouseover', function(){
        var id_list = $(this).attr('list');
        if($('#' + id_list).hasClass('noActiveList')){
            $('[class*=dropPrograma]').removeClass('ActiveList');
            $('[class*=dropPrograma]').addClass('noActiveList');
            $('#' + id_list).removeClass('noActiveList');
            $('#' + id_list).addClass('ActiveList');
            $('[id*=btn-header]').removeClass('active00');
            $(this).addClass('active00');
        }else{
            $('#' + id_list).removeClass('ActiveList');
            $('#' + id_list).addClass('noActiveList');
            $(this).removeClass('active00');
        }
    });

    $('.burgergg').on('click',function(){
        if($('.content-list').hasClass('nav-mobile-active'))
        {
            $('.content-list').removeClass('nav-mobile-active');
        }else
        {
            $('.content-list').addClass('nav-mobile-active');
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

    $('#chat_formdd').on('submit', function(e){
        if (form.checkValidity() === false) {
            e.preventDefault();
            e.stopPropagation();
            console.log('bad');
          }else{
            console.log('gud');
          }
        e.preventDefault();
        chat_msg = $('#chat_msg').val();
        chat_telephone = $('#chat_telephone').val();
        if(chat_msg == ''){
            return false;
        }
        window.open('https://web.whatsapp.com/send?phone=+' + chat_telephone +'&text=' + chat_msg, '_blank');
        //window.focus();
    });

    var forms = document.getElementsByClassName('needs-validation-wp');
    var chat_telephone = document.getElementById("chat_telephone").value;

    var validation = Array.prototype.filter.call(forms, function(form){
        form.addEventListener('submit', function(event) {
            if(form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
            }else{
                event.preventDefault();
                event.stopPropagation();
                var chat_msg = document.getElementById("chat_msg").value;
                window.open('https://web.whatsapp.com/send?phone=+' + chat_telephone +'&text=' + chat_msg, '_blank');
            }
            form.classList.add('was-validated');
        }, false);
    });

    $('[id*=chat_close]').on('click', function(e){
        if($('.fondo_all').hasClass('d-none'))
        {
            $('.fondo_all').removeClass('d-none');
        }else
        {
            $('.fondo_all').addClass('d-none');
        } 
    });

    $('#btn_close_fa').on('click',function(e){
        e.preventDefault();
        $('.floating_advertising_middle').hide();
        $('.floating_advertising_left').hide();
        $('.floating_advertising_background').hide();
    });

    $('#file_front').on('change', function () {
        if($('#file_front').val() == ''){
            $('#file_front_label').text('Sube tu CV aquí:');
        }else{
            var file = $('#file_front')[0].files[0].name;
            $('#file_front_label').text(file);
        }
    }); 

})

$(document).on("click", function(event){
    var $trigger = $(".dropdown_header");
    if($trigger !== event.target && !$trigger.has(event.target).length){
        $(".dropPrograma").removeClass('ActiveList');
        $(".dropPrograma").addClass('noActiveList');
        $('[id*=btn-header]').removeClass('active00');
    }            
});

function initialize_owl(el) {
    el.owlCarousel({
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
            items: 3,
            nav: true,
            }
        }
    });
}
  
function destroy_owl(el) {
    el.data('owlCarousel').destroy();
}