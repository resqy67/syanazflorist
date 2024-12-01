document.addEventListener('DOMContentLoaded', function () {
    new Swiper('.swiper-container', {
        slidesPerView: 1,
        spaceBetween: 12,
        autoplay: {
            delay: 2000, // Waktu jeda dalam milidetik (2 detik)
            disableOnInteraction: false, // Tetap autoplay meskipun user berinteraksi
        },
        breakpoints: {
            768: {
                slidesPerView: 2,
                spaceBetween: 24,
            },
            1024: {
                slidesPerView: 3,
                spaceBetween: 32,
            },
        },

        // Koordinat awal (contoh Jakarta)
    });
    const map = L.map('map').setView([-1.2523023, 116.8442284], 13);

    // Tambahkan tile layer (OpenStreetMap)
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
        attribution: '© OpenStreetMap contributors'
    }).addTo(map);

    // Tambahkan marker
    const marker = L.marker([-1.2523023, 116.8442284]).addTo(map)
        .bindPopup('<b>Syanaz Florist</b><br>Jl. D.I Panjaitan, RT.28/RW.no 2, Sumber Rejo, Kec. Balikpapan Tengah, Kota Balikpapan, Kalimantan Timur 76124')
        .openPopup();
    });

    // const menuToggle = document.getElementById('menuToggle');
    // const navMenu = document.getElementById('navMenu');

    // menuToggle.addEventListener('click', () => {
    //     navMenu.classList.toggle('hidden');
    // });

    document.getElementById('menuToggle').addEventListener('click', function() {
        var menuIcon = document.getElementById('menuIcon');
        var closeIcon = document.getElementById('closeIcon');
        var navMenu = document.getElementById('navMenu');

        menuIcon.classList.toggle('hidden');
        closeIcon.classList.toggle('hidden');
        navMenu.classList.toggle('hidden');
    });


// document.addEventListener('DOMContentLoaded', () => {

// });
