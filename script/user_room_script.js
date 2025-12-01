document.addEventListener('DOMContentLoaded', () => {
    const filterButtons = document.querySelectorAll('.filter-btn');
    const roomCards = document.querySelectorAll('.room-card');

    filterButtons.forEach(button => {
        button.addEventListener('click', () => {
            // 1. Hapus kelas 'active' dari semua tombol
            filterButtons.forEach(btn => btn.classList.remove('active'));
            
            // 2. Tambahkan kelas 'active' ke tombol yang diklik
            button.classList.add('active');

            // 3. Ambil nilai filter (all, available, atau premium)
            const filterValue = button.getAttribute('data-filter');

            // 4. Lakukan penyaringan pada kartu kamar
            roomCards.forEach(card => {
                const status = card.getAttribute('data-status');
                const type = card.getAttribute('data-type');
                
                let shouldShow = false;

                if (filterValue === 'all') {
                    shouldShow = true;
                } else if (filterValue === 'available') {
                    // Tampilkan hanya yang berstatus 'available'
                    shouldShow = status === 'available';
                } else if (filterValue === 'premium') {
                    // Tampilkan hanya yang bertipe 'premium'
                    shouldShow = type === 'premium';
                }

                // Terapkan tampilan (display: block/none)
                if (shouldShow) {
                    card.style.display = 'block';
                } else {
                    card.style.display = 'none';
                }
            });
        });
    });

    // Opsional: Tambahkan fungsionalitas untuk menu mobile
    const menuToggle = document.querySelector('.menu-toggle');
    const navLinks = document.querySelector('.nav-links');

    menuToggle.addEventListener('click', () => {
        // Toggles a class on the navigation links for mobile view
        // Anda perlu menambahkan CSS untuk .nav-links.open (misalnya, display: flex; flex-direction: column; position: absolute;)
        // di dalam media query mobile jika Anda ingin menampilkan nav-links di menu hamburger
        navLinks.classList.toggle('open');
    });
});