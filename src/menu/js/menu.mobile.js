$('.menu_cta').on('click', function(){
    if (!$('.overlay').hasClass('overlay--active')) {
        $('.overlay').addClass('overlay--active');
    }
});

$('.close').on('click', function(){
    if ($('.overlay').hasClass('overlay--active')) {
        $('.overlay').removeClass('overlay--active');
    }
});
