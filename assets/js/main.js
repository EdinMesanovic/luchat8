document.addEventListener("DOMContentLoaded", () => {
    new Swiper('.swiper-container', {
        loop: true, // Beskonačno klizanje
        slidesPerView: 2, // Broj slajdova vidljivih na ekranu
        spaceBetween: 20, // Razmak između slajdova u pikselima
        allowTouchMove: false, // Onemogućava ručno pomeranje
        autoplay: {
            delay: 0, // Nema pauze između prelaza
            disableOnInteraction: false, // Slider nastavlja i nakon interakcije
        },
        speed: 3000, // Brzina prelaza (u milisekundama)
        loopedSlides: 3, // Pomaže pri pravilnom klizanju u `loop` modu
        breakpoints: {
            640: {
                slidesPerView: 1, // 1 slajd za mobilne uređaje
                spaceBetween: 10,
            },
            768: {
                slidesPerView: 2, // 2 slajda za tablete
                spaceBetween: 15,
            },
            1024: {
                slidesPerView: 3, // 3 slajda za desktop uređaje
                spaceBetween: 20,
            },
        },
    });
});