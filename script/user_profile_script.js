document.addEventListener("DOMContentLoaded", () => {
  // 1. Menangani Toggle Switches
  const toggles = document.querySelectorAll('.switch input[type="checkbox"]');
  toggles.forEach((toggle) => {
    toggle.addEventListener("change", (event) => {
      const settingId = event.target.id;
      const status = event.target.checked ? "ON" : "OFF";
      console.log(`Pengaturan ${settingId} diubah menjadi: ${status}`);
      // Di sini Anda akan menambahkan kode AJAX untuk menyimpan preferensi pengguna ke server
    });
  });

  // 2. Menangani Tombol Aksi (Edit Profile dan Setup 2FA)
  const editBtn = document.querySelector(".edit-btn");
  const setupBtn = document.querySelector(".setup-btn");

  // if (editBtn) {
  //     editBtn.addEventListener('click', () => {
  //         alert('Tombol "Edit Profile" diklik. Arahkan ke halaman edit formulir.');
  //     });
  // }

  if (setupBtn) {
    setupBtn.addEventListener("click", () => {
      alert(
        'Tombol "Setup" Two-Factor Authentication diklik. Mulai proses pengaturan 2FA.'
      );
    });
  }

  // 3. Fungsionalitas Toggle Menu (Mobile, opsional)
  const menuToggle = document.querySelector(".menu-toggle");
  menuToggle.addEventListener("click", () => {
    alert(
      "Menu Mobile Toggle diklik! Tambahkan CSS untuk menampilkan navigasi."
    );
  });
});
