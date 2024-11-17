document.addEventListener("DOMContentLoaded", function () {
    // Fungsi untuk mengambil parameter ID dari URL
    function getArticleIdFromUrl() {
        const urlParams = new URLSearchParams(window.location.search);
        return urlParams.get('id');
    }

    // Fungsi untuk memuat data artikel berdasarkan ID
    async function loadArticleDetail() {
        const articleId = getArticleIdFromUrl();
        if (articleId) {
            try {
                // Panggil API untuk mendapatkan artikel berdasarkan ID
                const response = await fetch(`http://127.0.0.1:8001/api/artikel/${articleId}`);
                const article = await response.json();

                // Pastikan artikel ditemukan
                if (article) {
                    // Update elemen header dan konten artikel
                    const headerElement = document.querySelector('.header-gradient');
                    const base_url = "http://127.0.0.1:8001/"; // Sesuaikan base URL jika perlu

                    // Setel background image dengan data gambar dari API
                    if (article.gambar) {
                        const imageUrl = base_url + article.gambar;
                        headerElement.style.backgroundImage = `linear-gradient(to bottom, #C5E88C, hsla(97, 59%, 89%, 0.1), #C5E88C), url('${imageUrl}')`;
                    }

                    // Update judul halaman dan konten artikel
                    document.querySelector('h1').textContent = article.judul;
                    document.querySelector('.content').innerHTML = `
                        <p>${article.isi}</p>
                    `;
                } else {
                    console.error("Artikel tidak ditemukan");
                    document.querySelector('.content').textContent = "Artikel tidak ditemukan.";
                }
            } catch (error) {
                console.error("Gagal memuat artikel:", error);
            }
        } else {
            console.error("ID artikel tidak ada di URL");
        }
    }

    // Panggil fungsi untuk memuat data artikel
    loadArticleDetail();
});
