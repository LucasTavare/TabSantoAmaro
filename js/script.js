$('#menu-hamburguer > img').click(function () {

    $('body').css('overflow', 'hidden');

    $(this).siblings('.modal-wrapper').css('display', 'flex');

});

$('#menu-hamburguer .modal-exit, #menu-hamburguer #icon-modal-exit, #menu-hamburguer .burguer-actions-wrapper a').click(function () {

    $('body').css('overflow', 'auto');

    $('#menu-hamburguer .modal-wrapper').css('display', 'none');
});