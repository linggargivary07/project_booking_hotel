document.addEventListener('DOMContentLoaded', () => {
    const checkInInput = document.getElementById('checkInDate');
    const checkOutInput = document.getElementById('checkOutDate');
    const bookRoomBtn = document.getElementById('bookRoomBtn');
    
    // Konstanta Harga
    const PRICE_PER_NIGHT = 249;
    const SERVICE_FEE = 37;
    const TAX_RATE = 0.083; // Contoh 8.3% pajak (Taxes: $62, Total: $846)

    // Elemen untuk menampilkan perhitungan
    const nightsElement = document.querySelector('.price-line:nth-child(1) span:nth-child(1)');
    const subTotalElement = document.querySelector('.price-line:nth-child(1) span:nth-child(2)');
    const taxElement = document.querySelector('.price-line:nth-child(3) span:nth-child(2)');
    const totalElement = document.querySelector('.total-line span:nth-child(2)');

    function calculatePrice() {
        const checkInDate = new Date(checkInInput.value);
        const checkOutDate = new Date(checkOutInput.value);

        if (isNaN(checkInDate) || isNaN(checkOutDate) || checkOutDate <= checkInDate) {
            // Jika tanggal tidak valid, reset tampilan harga
            nightsElement.textContent = `0 nights × $${PRICE_PER_NIGHT}`;
            subTotalElement.textContent = '$0';
            taxElement.textContent = '$0';
            totalElement.textContent = '$0';
            return 0;
        }

        // Hitung selisih hari (malam)
        const diffTime = Math.abs(checkOutDate - checkInDate);
        const diffDays = Math.ceil(diffTime / (1000 * 60 * 60 * 24));
        const nights = diffDays;

        if (nights < 1) {
             nightsElement.textContent = `0 nights × $${PRICE_PER_NIGHT}`;
             subTotalElement.textContent = '$0';
             taxElement.textContent = '$0';
             totalElement.textContent = '$0';
             return;
        }

        const subTotal = nights * PRICE_PER_NIGHT;
        const totalBeforeTax = subTotal + SERVICE_FEE;
        const taxes = totalBeforeTax * TAX_RATE;
        const finalTotal = totalBeforeTax + taxes;

        // Update tampilan
        nightsElement.textContent = `${nights} nights × $${PRICE_PER_NIGHT}`;
        subTotalElement.textContent = `$${subTotal.toFixed(0)}`;
        // Tetapkan biaya layanan (service fee)
        document.querySelector('.price-line:nth-child(2) span:nth-child(2)').textContent = `$${SERVICE_FEE}`;
        taxElement.textContent = `$${taxes.toFixed(0)}`;
        totalElement.textContent = `$${finalTotal.toFixed(0)}`;
    }

    // Panggil perhitungan saat tanggal berubah
    checkInInput.addEventListener('change', calculatePrice);
    checkOutInput.addEventListener('change', calculatePrice);
    
    // Panggil saat halaman dimuat untuk inisialisasi harga awal
    calculatePrice(); 

    // Fungsionalitas Tombol Booking
    bookRoomBtn.addEventListener('click', (event) => {
        event.preventDefault();
        
        const total = totalElement.textContent;
        alert(`Anda memesan kamar ini dengan total ${total}.\n (Lanjutkan ke halaman Checkout...)`);
        
        // Implementasi nyata: window.location.href = 'checkout.html';
    });
});