document.addEventListener('DOMContentLoaded', () => {
    const tabButtons = document.querySelectorAll('.tab-btn');
    const historyCards = document.querySelectorAll('.history-card');

    tabButtons.forEach(button => {
        button.addEventListener('click', () => {
            // 1. Hapus kelas 'active' dari semua tombol tab
            tabButtons.forEach(btn => btn.classList.remove('active'));
            
            // 2. Tambahkan kelas 'active' ke tombol yang diklik
            button.classList.add('active');

            // 3. Ambil nilai filter (all, upcoming, completed, cancelled)
            const filterValue = button.getAttribute('data-filter');

            // 4. Lakukan penyaringan pada kartu riwayat
            historyCards.forEach(card => {
                const status = card.getAttribute('data-status');
                
                let shouldShow = false;

                if (filterValue === 'all') {
                    shouldShow = true;
                } else if (filterValue === status) {
                    shouldShow = true;
                }

                // Terapkan tampilan (display: flex/none)
                if (shouldShow) {
                    card.style.display = 'flex';
                } else {
                    card.style.display = 'none';
                }
            });
        });
    });

    // Fungsionalitas Tombol View Details (Opsional)
    const viewDetailsButtons = document.querySelectorAll('.view-details-btn');
    viewDetailsButtons.forEach(btn => {
        btn.addEventListener('click', () => {
            alert('Tombol "View Details" diklik. Mengarahkan ke halaman detail pesanan.');
        });
    });

    // Fungsionalitas Pagination (Opsional)
    const pageButtons = document.querySelectorAll('.page-number');
    pageButtons.forEach(btn => {
        btn.addEventListener('click', () => {
            pageButtons.forEach(p => p.classList.remove('active'));
            btn.classList.add('active');
            alert(`Pindah ke Halaman ${btn.textContent}`);
            // Di lingkungan nyata, ini akan memicu pemuatan data baru
        });
    });
});