// Fungsi untuk mengganti tipe input password (menampilkan/menyembunyikan)
function togglePasswordVisibility() {
  const passwordInput = document.getElementById("password");
  const toggleIcon = document.querySelector(".toggle-password");

  if (passwordInput.type === "password") {
    passwordInput.type = "text";
    toggleIcon.innerText = "visibility"; // Ganti ikon ke mata terbuka
  } else {
    passwordInput.type = "password";
    toggleIcon.innerText = "visibility_off"; // Ganti ikon ke mata tertutup
  }
}

// Logika saat formulir disubmit (hanya simulasi)
document
  .getElementById("registerForm")
  .addEventListener("submit", function (event) {
    event.preventDefault(); // Mencegah form submit default

    const firstName = document.getElementById("firstName").value;
    const email = document.getElementById("email").value;
    const password = document.getElementById("password").value;
    const phone = document.getElementById("phone").value;

    // VALIDASI SEDERHANA
    if (firstName === "" || email === "" || password === "" || phone === "") {
      alert("Semua kolom harus diisi untuk registrasi.");
      return;
    }

    // SIMULASI REGISTRASI BERHASIL
    console.log(`Pendaftaran baru: ${firstName} (${email})`);
    alert(
      "Pendaftaran berhasil! Anda dapat Sign In sekarang. (Ini hanya simulasi)"
    );

    // Di aplikasi nyata:
    // 1. Kirim data ke API menggunakan fetch()
    // 2. Jika sukses, arahkan ke halaman login (login.html)
    // window.location.href = 'login.html';
  });
