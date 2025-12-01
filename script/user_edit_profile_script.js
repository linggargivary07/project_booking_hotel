document.addEventListener('DOMContentLoaded', () => {
    // 1. Fungsionalitas Pratinjau Gambar Profil
    const fileUpload = document.getElementById('file-upload');
    const imagePreview = document.getElementById('profileImagePreview');

    if (fileUpload && imagePreview) {
        fileUpload.addEventListener('change', (event) => {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = (e) => {
                    imagePreview.src = e.target.result;
                };
                reader.readAsDataURL(file);
            }
        });
    }

    // 2. Fungsionalitas Pengiriman Formulir
    const editForm = document.getElementById('editProfileForm');
    if (editForm) {
        editForm.addEventListener('submit', (event) => {
            event.preventDefault(); // Mencegah pengiriman formulir standar
            
            // Dapatkan data dari formulir (contoh: hanya nama depan)
            const firstName = document.getElementById('firstName').value;
            
            alert(`Perubahan disimpan! Nama Depan yang diperbarui: ${firstName}\n (Di lingkungan nyata, data akan dikirim ke server.)`);
            
            // Di sini Anda akan menambahkan kode AJAX untuk mengirim data ke API server
            // Contoh: fetch('/api/user/profile', { method: 'POST', body: formData }).then(...)
        });
    }

    // 3. Fungsionalitas Tombol Cancel
    const cancelBtn = document.querySelector('.cancel-btn');
    if (cancelBtn) {
        cancelBtn.addEventListener('click', () => {
            alert('Perubahan dibatalkan. Kembali ke halaman profil.');
            // Implementasi nyata: window.location.href = 'profile.html';
        });
    }

    // 4. Fungsionalitas Toggle Preferences
    const toggles = document.querySelectorAll('.switch input[type="checkbox"]');
    toggles.forEach(toggle => {
        toggle.addEventListener('change', (event) => {
            const settingId = event.target.id;
            const status = event.target.checked ? 'diaktifkan' : 'dinonaktifkan';
            console.log(`Pengaturan ${settingId} ${status}.`);
        });
    });
});