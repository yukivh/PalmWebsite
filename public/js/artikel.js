document.addEventListener("DOMContentLoaded", function () {
    // Fungsi untuk memuat artikel dari API
    async function loadArticles() {
        try {
            // Panggil endpoint API artikel
            const response = await fetch('http://127.0.0.1:8001/api/artikel');
            const articles = await response.json();
            const base_url = "http://127.0.0.1:8001/";

            // Pastikan API mengembalikan data dengan benar
            if (Array.isArray(articles)) {
                const articleGrid = document.querySelector(".article-grid");
                articleGrid.innerHTML = ""; // Kosongkan konten sebelumnya

                articles.forEach(article => {
                    // Buat elemen kartu artikel untuk setiap artikel
                    const articleCard = document.createElement("div");
                    articleCard.classList.add("article-card");

                    // Tambahkan event listener untuk navigasi ke halaman detail artikel
                    articleCard.addEventListener('click', function () {
                        window.location.href = `isi_artikel?id=${article.id}`;
                    });

                    // Template konten artikel
                    articleCard.innerHTML = `
                        <img src="${base_url}${article.gambar}" alt="${article.judul}">
                        <h3>${article.judul}</h3>
                        <p>${article.isi.substring(0, 100)}...</p>
                        <p><small>Oleh: ${article.nama_pembuat}</small></p>
                    `;

                    // Tambahkan kartu artikel ke dalam grid
                    articleGrid.appendChild(articleCard);
                });
            } else {
                console.error("Data artikel tidak valid:", articles);
            }
        } catch (error) {
            console.error("Gagal memuat artikel:", error);
        }
    }

    // Panggil fungsi loadArticles saat halaman dimuat
    loadArticles();
});
