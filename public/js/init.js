$('.owl-carousel').owlCarousel({
    autoplay: true,
    autoplayHoverPause:true,
    autoplayTimeout: 5000,
    loop: true,
    margin: 20,
    padding: 5,
    stagePadding: 5,
    nav: true,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 2
        },
        1000: {
            items: 3
        }
    }
})