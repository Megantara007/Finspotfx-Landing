$(window).scroll(function(){
    var scroll = $(this).scrollTop();

    if(scroll > 500){
        $('.navbar').css({
            'position' : 'fixed',
            'background' : '#ffffff',
            'box-shadow' : '0 0 8px #c5c5c567',
            'width' : '100%'
        })

        $('.navimg').css({
            'margin' : '0 0 0 50px'
        })

        $('.navul').css({
            'margin' : '0 50px 0 0'
        })

        $('.bar-light').css({
            'color' : '#128cc0'
        })

        if($('.dark-thm')){
            $('.dark-thm .sub-nav').removeClass('dark-b');
            $('.dark-thm .sub-nav').addClass('light-b');
    
            $('.dark-thm .navul a').removeClass('text-dark');
            $('.dark-thm .navul a').addClass('text-light');

            var id = $('#img_dark');
            var id2 = $('#img');
            id.css({
                'display' : 'inline-block',
            })
            id2.css({
                'display' : 'none',
            })
        }
    }

    if(scroll < 400){
        $('.navbar').css({
            'position' : 'relative',
            'background' : 'none',
            'box-shadow' : 'none',
            'width' : '90%',
        })

        $('.navimg').css({
            'margin' : '0 0 0 0'
        })

        $('.navul').css({
            'margin' : '0 0 0 0'
        })

        $('.bar-light').css({
            'color' : '#ffffff'
        })

        if($('.dark-thm')){
            $('.dark-thm .sub-nav').addClass('dark-b');
            $('.dark-thm .sub-nav').removeClass('light-b');
    
            $('.dark-thm .navul a').addClass('text-dark');
            $('.dark-thm .navul a').removeClass('text-light');

            var id = $('#img_dark');
            var id2 = $('#img');
            id.css({
                'display' : 'none',
            })

            id2.css({
                'display' : 'inline-block',
            })
        }
    }
})

// const swiper = new Swiper('.swiper-container', {
//     spaceBetween: 30,
//     centeredSlides: true,
//     direction: 'vertical',
//     loop: true,
//     navigation: {
//         nextEl: '.swiper-button-next',
//         prevEl: '.swiper-button-prev',
//     },
//     autoplay: {
//         delay: 5000,
//         disableOnInteraction: false,
//     },
// });

function toggle(){
    document.getElementById("sidebar").classList.toggle('side-on');
    document.getElementById("cover").classList.toggle('side-on');
}