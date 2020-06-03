$('a.remove').click(function () {
    event.preventDefault();
    $(this).parent().parent().parent().hide(400);
})

$('.remove').click(function() {
    $('.subtotal').hide();
})

$('a.btn.continue').click(function () {
    $('li.items').show(400);
    $('.subtotal').show(400);
})