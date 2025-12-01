document.addEventListener('DOMContentLoaded', () => {
    // Fungsionalitas untuk Tombol Toggle Menu (Navbar) di mobile
    const menuToggle = document.querySelector('.menu-toggle');
    const navLinks = document.querySelector('.nav-links');
    const userInfo = document.querySelector('.user-info');
    const navbarContainer = document.querySelector('.navbar .container');

    menuToggle.addEventListener('click', () => {
        // Dalam implementasi nyata, Anda akan menggunakan class CSS 
        // untuk menampilkan nav-links dan user-info saat menu-toggle diklik 
        // (misalnya, dengan mengubah display: none menjadi display: flex)

        alert("Menu Mobile Toggle diklik! Anda dapat menambahkan class CSS untuk menampilkan navigasi.");
        // Contoh:
        // navLinks.classList.toggle('is-open'); 
        // userInfo.classList.toggle('is-open');
    });

    // Fungsionalitas tombol aksi (View/Modify/New Booking)
    const actionButtons = document.querySelectorAll('.action-btn, .new-booking-btn');
    actionButtons.forEach(button => {
        button.addEventListener('click', () => {
            const buttonText = button.textContent.trim();
            alert(`Tombol "${buttonText}" diklik. Menerapkan navigasi ke halaman yang relevan.`);
        });
    });
});