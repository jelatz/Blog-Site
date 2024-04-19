
$(document).ready(function () {
    $('#menu-toggle').click(function () {
        $('#mobile-menu').toggleClass('hidden');
    });   
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

    // modal.js
const modal = document.getElementById('modal');

// Show the modal
function showModal() {
    modal.classList.remove('hidden');
}

// Hide the modal
function hideModal() {
    modal.classList.add('hidden');
}

// Add event listeners to show/hide the modal
document.addEventListener('DOMContentLoaded', function() {
    const openModalButtons = document.querySelectorAll('[data-open-modal]');
    const closeModalButtons = document.querySelectorAll('[data-close-modal]');

    openModalButtons.forEach(button => {
        button.addEventListener('click', showModal);
    });

    closeModalButtons.forEach(button => {
        button.addEventListener('click', hideModal);
    });
});

});
