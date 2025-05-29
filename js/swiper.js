new Splide('#splide', {
    type: 'loop',
    perPage: 3,
    perMove: 1,
    gap: '1rem',
    pagination: false,
    arrows: true,
    autoplay: true,
    interval: 2000,
    pauseOnHover: true,
    breakpoints: {
        1024: {
            perPage: 2,
        },
        640: {
            perPage: 1,
        },
    },
}).mount();