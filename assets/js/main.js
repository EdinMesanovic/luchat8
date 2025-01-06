document.addEventListener("DOMContentLoaded", () => {
    new Swiper('.swiper-container', {
        loop: true, // Beskonačno klizanje
        slidesPerView: 2,
        freeMode: true, // Broj slajdova vidljivih na ekranu
        spaceBetween: 25, // Razmak između slajdova u pikselima
        allowTouchMove: false, // Onemogućava ručno pomeranje
        grabCursor: true,
        autoplay: {
            delay: 1,
            disableOnInteraction: false
          },
        freeModeMomentum: false,
        speed: 5000, // Brzina prelaza (u milisekundama)
        loopedSlides: 3, // Pomaže pri pravilnom klizanju u `loop` modu
        breakpoints: {
            336: {
                slidesPerView: 1, // 1 slajd za mobilne uređaje
                spaceBetween: 10,
            },
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

document.addEventListener('DOMContentLoaded', function () {
    const accordionItems = document.querySelectorAll('.accordion-item');

    accordionItems.forEach(item => {
        const button = item.querySelector('button');
        const content = item.querySelector('.accordion-content');

        // Klik na dugme otvara ili zatvara sadržaj
        button.addEventListener('click', function () {
            // Zatvori sve ostale otvorene stavke
            accordionItems.forEach(otherItem => {
                const otherContent = otherItem.querySelector('.accordion-content');
                if (otherItem !== item) {
                    otherContent.classList.remove('open');
                    otherContent.style.display = 'none';
                    otherItem.style.background = ''; // Ukloni pozadinu sa drugih stavki
                    otherItem.style.borderRadius = ''; // Ukloni border-radius sa drugih stavki
                }
            });

            // Prikaži ili sakrij sadržaj za trenutnu stavku
            if (content.classList.contains('open')) {
                content.classList.remove('open');
                content.style.display = 'none';
                item.style.background = ''; // Ukloni pozadinu kada se zatvori
                item.style.borderRadius = ''; // Ukloni border-radius kada se zatvori
            } else {
                content.classList.add('open');
                content.style.display = 'block';
                item.style.background = 'white'; // Postavi belu pozadinu
                item.style.borderRadius = '20px'; // Dodaj border-radius
            }
        });
    });
});

// Funkcija za otvaranje modala
function openYouTubeModal(youtubeUrl) {
    const modal = document.getElementById('youtube-modal');
    const iframe = document.getElementById('youtube-iframe');

    // Postavi src atribut iframe-a na prosleđeni URL
    iframe.src = youtubeUrl + '?autoplay=1&rel=0';
    
    // Prikaži modal
    modal.classList.remove('hidden');
}

// Funkcija za zatvaranje modala
function closeYouTubeModal() {
    const modal = document.getElementById('youtube-modal');
    const iframe = document.getElementById('youtube-iframe');

    // Obriši src atribut iframe-a kako bi se video zaustavio
    iframe.src = '';

    // Sakrij modal
    modal.classList.add('hidden');
}
