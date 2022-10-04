<script src="<?php echo JQUERY ?>"></script>
<script src="<?php echo SCRIPT ?>"></script>

<script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
const swiper = new Swiper('.swiper-container', {
    spaceBetween: 30,
    centeredSlides: true,
    direction: 'vertical',
    loop: true,
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    autoplay: {
        delay: 5000,
        disableOnInteraction: false,
    },
});

</script>