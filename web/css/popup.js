let popupBg = document.querySelectorAll('.popup__bg');
let popup = document.querySelectorAll('.popup');
let openPopupButtons = document.querySelectorAll('.open-popup');
let closePopupButton = document.querySelector('.close-popup');

openPopupButtons.forEach((button) => {
    button.addEventListener('click', (e) => {
        e.preventDefault();
        let id = $(button).attr('data-open');
        $('#'+id).addClass('active')
        $(`#${id} > form`).addClass('active')
    })
});

closePopupButton.addEventListener('click',() => {
    $('.popup__bg.active').removeClass('active')
    $('.popup.active').removeClass('active')
});

$('.popup__bg').click((e) => {
    $('.popup__bg.active').removeClass('active')
    $('.popup.active').removeClass('active')
});