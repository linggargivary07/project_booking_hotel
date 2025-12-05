document.addEventListener("DOMContentLoaded", () => {
  const sidebar = document.querySelector(".sidebar");
  const menuToggle = document.querySelector(".menu-toggle");
  const roomFilter = document.getElementById("room-filter");
  const roomSearch = document.getElementById("room-search");
  const roomDataRows = document.querySelectorAll("#room-data tr");

  // 1. Fungsionalitas Sidebar Toggle (Mobile)
  menuToggle.addEventListener("click", () => {
    sidebar.classList.toggle("open");
  });

  // 2. Fungsionalitas Filter Status Kamar
  roomFilter.addEventListener("change", () => {
    const selectedStatus = roomFilter.value;
    filterAndSearchRooms(selectedStatus, roomSearch.value.toLowerCase());
  });

  // 3. Fungsionalitas Pencarian Kamar
  roomSearch.addEventListener("keyup", () => {
    const searchTerm = roomSearch.value.toLowerCase();
    const selectedStatus = roomFilter.value;
    filterAndSearchRooms(selectedStatus, searchTerm);
  });

  // Fungsi Utama untuk Menerapkan Filter dan Pencarian
  function filterAndSearchRooms(filterStatus, searchTerm) {
    roomDataRows.forEach((row) => {
      const rowStatus = row.getAttribute("data-status");
      const rowText = row.textContent.toLowerCase();

      let statusMatch = false;
      let searchMatch = false;

      // Cek Status Filter
      if (filterStatus === "all" || rowStatus === filterStatus) {
        statusMatch = true;
      }

      // Cek Pencarian (Cari di seluruh konten baris)
      if (rowText.includes(searchTerm)) {
        searchMatch = true;
      }

      // Tampilkan jika kedua kriteria terpenuhi
      if (statusMatch && searchMatch) {
        row.style.display = "";
      } else {
        row.style.display = "none";
      }
    });
  }

  // 4. Fungsionalitas Tombol Aksi (Edit, View, Delete)
  document.getElementById("room-data").addEventListener("click", (event) => {
    const target = event.target.closest("button");
    if (!target) return;

    const row = target.closest("tr");
    const roomNumber = row.querySelector("td:first-child").textContent;
    const roomType = row.querySelector("td:nth-child(2)").textContent;

    if (target.classList.contains("edit-btn")) {
      alert(`Mengedit Kamar ${roomNumber} (${roomType})`);
    } else if (target.classList.contains("view-btn")) {
      alert(`Melihat Detail Kamar ${roomNumber} (${roomType})`);
    } else if (target.classList.contains("delete-btn")) {
      if (
        confirm(
          `Apakah Anda yakin ingin menghapus Kamar ${roomNumber} (${roomType})?`
        )
      ) {
        alert(`Kamar ${roomNumber} dihapus.`);
        // Di sini Anda akan menjalankan kode AJAX untuk menghapus data dari server
        // row.remove(); // Hapus baris dari tampilan
      }
    }
  });
});
