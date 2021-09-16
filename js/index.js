$('#collapsefive').on('show.bs.collapse', function() {
    $('#headingfive button').addClass('botonverde');
})
$('#collapsefive').on('hidden.bs.collapse', function() {
    $('#headingfive button').removeClass('botonverde');
})

$('#collapsefour').on('show.bs.collapse', function() {
    $('#headingfour button').addClass('botonverde');
})
$('#collapsefour').on('hidden.bs.collapse', function() {
    $('#headingfour button').removeClass('botonverde');
})
$('#collapseThree').on('show.bs.collapse', function() {
    $('#headingThree button').addClass('botonverde');
})
$('#collapseThree').on('hidden.bs.collapse', function() {
    $('#headingThree button').removeClass('botonverde');
})
$('#collapseTwo').on('show.bs.collapse', function() {
    $('#headingTwo button').addClass('botonverde');
})
$('#collapseTwo').on('hidden.bs.collapse', function() {
    $('#headingTwo button').removeClass('botonverde');
})
$('#collapseOne').on('show.bs.collapse', function() {
    $('#headingOne button').addClass('botonverde');
    $('#headingOne').addClass('quitarborde');
})
$('#collapseOne').on('hidden.bs.collapse', function() {
    $('#headingOne button').removeClass('botonverde');
    $('#headingOne').removeClass('quitarborde');
})

$('.navbar-collapse').on('show.bs.collapse', function() {
    $('#icon1').removeClass('icon-cerrado').addClass('icon-abierto');
    $('#icon2').addClass('icon-cerrado').removeClass('icon-abierto');
    $('#icon2').addClass('mejora');
    $('.navbar-brand img').addClass('mejora');

    $('body').css('overflow', 'hidden');

})
$('.navbar-collapse').on('hidden.bs.collapse', function() {
    $('#icon1').removeClass('icon-abierto').addClass('icon-cerrado');
    $('#icon2').addClass('icon-abierto').removeClass('icon-cerrado');
    $('#icon2').removeClass('mejora');
    $('.navbar-brand img').removeClass('mejora');

    $('body').css('overflow', 'unset');

})





// rutas modales

$(window).ready(function() {
    $(document.body).on('click', "#cliente", function() {
        $("#content-pages-rutas").load('clientes.php');
    });
});
$(window).ready(function() {
    $(document.body).on('click', "#landingP2W", function() {
        $("#content-pages-rutas").load('sitos_web.php');
    });
});

$(window).ready(function() {
    $(document.body).on('click', "#faswet", function() {
        $("#content-pages-rutas").load('faswet.php');
    });
});
$(window).ready(function() {
    $(document.body).on('click', "#nasbi", function() {
        $("#content-pages-rutas").load('nasbi.php');
    });
});
$(window).ready(function() {
    $(document.body).on('click', "#iwon", function() {
        $("#content-pages-rutas").load('iwon.php');
    });
});
$(window).ready(function() {
    $(document.body).on('click', "#p2w", function() {
        $("#content-pages-rutas").load('p2w.php');
    });
});
$(window).ready(function() {
    $(document.body).on('click', ".videomarketing", function() {
        $("#content-pages-rutas").load('video_marketing.php');
    });
});