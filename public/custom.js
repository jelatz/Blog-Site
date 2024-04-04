
$(document).ready(function () {
    $('#menu-toggle').click(function () {
        $('#mobile-menu').toggleClass('hidden');
    });
    // document.getElementById('menu-toggle').addEventListener('click', function () {
    //     document.getElementById('mobile-menu').classList.toggle('hidden');
    // });
   
    $('#eye-pass').click(function () {
        if($('#eye-pass').attr('name') == 'eye'){
        $('#password').attr('type', 'text');
            $('#eye-pass').attr('name', 'eye-off');
        } else {
            $('#password').attr('type', 'password');
            $('#eye-pass').attr('name', 'eye');
        }
    });


    $('#eye-confirm-pass').click(function () {
        if($('#eye-confirm-pass').attr('name') == 'eye'){
        $('#password_confirmation').attr('type', 'text');
            $('#eye-confirm-pass').attr('name', 'eye-off');
        } else {
            $('#password_confirmation').attr('type', 'password');
            $('#eye-confirm-pass').attr('name', 'eye');
        }
    });
});
