$(document).on('click', '.read-more', function(){
    let data_id = '#'+ $(this).attr('data-id')
    $(data_id).css('height', 'auto');
    $(data_id).css('transition', 'transform .5s');
    // $(this).closest('.read-less').addClass('active');
    $(this).next().slideToggle('active');
    $(this).removeClass('active');


})

$(document).on('click', '.read-less', function(){
    let data_id = '#'+ $(this).attr('data-id')
    $(this).prev().addClass('active');
    $(this).removeClass('active');
    $(data_id).css('height', '100');
    $(data_id).css('transition', 'transform .5s');
})

$(document).on('click', '.option-lang', function(){
    $('.lang-dropdown').addClass('active')
})

$(document).on('click', '.burger', function(){
    $('.menu-mobile').addClass('active')
    $('.overlay').addClass('active')
    $('body').addClass('overflow-hidden')
})


$(document).on('click', '.burger', function(){
    $('.menu-mobile').addClass('active')
    $('.overlay').addClass('active')
    $('body').addClass('overflow-hidden')
})

$(document).on('click', '.close-menu, .overlay', function(){
    $('.menu-mobile').removeClass('active')
    $('.overlay').removeClass('active')
    $('.menu-mobile').css('transition', 'transform .5s')
    $('body').removeClass('overflow-hidden')
})

$(document).on('click', '.close-menu, .overlay', function(){
    $('.menu-mobile').removeClass('active')
    $('.overlay').removeClass('active')
    $('.menu-mobile').css('transition', 'transform .5s')
    $('body').removeClass('overflow-hidden')
})

$(document).on('click', '.open-modal', function(){
    $('.modal-video').addClass('active')
    $('.overlay').addClass('active')
    $('body').addClass('overflow-hidden')
})

$(document).on('click', '.close-modal', function(){
    $('.modal-video').removeClass('active')
    $('.overlay').removeClass('active')
    $('body').removeClass('overflow-hidden')
})

window.scroll({
    top: 0, 
    left: 0, 
    behavior: 'smooth'
});