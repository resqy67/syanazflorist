let currentIndex = 0;
const items = document.querySelectorAll(".carousel-item");

function showSlide(index) {
    items.forEach((item, i) => {
        item.classList.add('hidden'); // Sembunyikan semua item
        // item.classList.remove('active'); // Hapus status aktif
        if (i === index) {
            // item.classList.remove('hidden'); // Tampilkan item yang sesuai
            item.classList.add('active'); // Tandai sebagai aktif
        }
    });
}

function nextSlide() {
    currentIndex = (currentIndex + 1) % items.length;
    showSlide(currentIndex);
}

function prevSlide() {
    currentIndex = (currentIndex - 1 + items.length) % items.length;
    showSlide(currentIndex);
}

// Jalankan auto-slide setiap 5 detik
setInterval(() => {
    // items[currentIndex].classList.remove("active");

    // Pindah ke slide berikutnya setelah 1 detik
    setTimeout(() => {
        nextSlide();
    }, 5000);
}, 1000);

// Tampilkan slide pertama saat halaman dimuat
showSlide(currentIndex);
