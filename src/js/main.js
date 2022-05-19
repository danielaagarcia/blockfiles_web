(function ($) {
    $('.bt-top').hide();
    $(window).scroll(function() {
        checkNav();
    });

    function checkNav(){
        var currentScroll = $(this).scrollTop();
        if(currentScroll > 110) {
            $('#navbar').addClass('navbar-fondo');            
        } else {
            $('#navbar').removeClass('navbar-fondo');
        }
    }
    checkNav();


    $("#toggle-password").on('click', function(event) {
        event.preventDefault();
        if($('#pwd').attr("type") == "text"){
            $('#pwd').attr('type', 'password');
            $('#toggle-password .toggle-icon').removeClass( "fa-eye-slash" );
            $('#toggle-password .toggle-icon').addClass( "fa-eye" );            
        }else if($('#pwd').attr("type") == "password"){
            $('#pwd').attr('type', 'text');            
            $('#toggle-password .toggle-icon').addClass( "fa-eye-slash" );
            $('#toggle-password .toggle-icon').removeClass( "fa-eye" );
        }
    });

})(jQuery);


