@extends('layouts.guest')

@section('title', 'Belanja')

<style>
/* CSS Honeycomb tetap dipertahankan jika sewaktu-waktu ingin digunakan kembali */
.hero-honeycomb {
    position: absolute;
    right: 5%;
    top: 50%;
    transform: translateY(-50%);
    display: grid;
    grid-template-columns: repeat(3, 120px);
    gap: 12px;
    z-index: 2;
}

.hex {
    width: 110px;
    height: 125px;
    clip-path: polygon(50% 0%, 100% 25%, 100% 75%, 50% 100%, 0% 75%, 0% 25%);
    background: rgba(255, 255, 255, .12);
    border: 1px solid rgba(255, 255, 255, .2);
    backdrop-filter: blur(20px);
    display: flex;
    justify-content: center;
    align-items: center;
    color: white;
    font-size: 34px;
    transition: .4s ease;
    animation: floatHex 6s ease-in-out infinite;
}

@keyframes floatHex {
    0%, 100% { transform: translateY(0); }
    50% { transform: translateY(-15px); }
}

@media(max-width: 1280px) { 
    .hero-honeycomb { display: none; } 
}
</style>

@section('content')
<div class="min-h-screen bg-rose-50/30 py-12">
    <div class="mx-auto max-w-5xl px-4 sm:px-6 lg:px-8">
        
        <div class="mb-8">
            <a href="#" id="btnBackToTab" class="inline-flex items-center text-sm font-semibold text-rose-700 hover:text-rose-800 transition">
                <i class="fas fa-arrow-left mr-2"></i> Kembali
            </a>
        </div>

        <div class="mb-12 text-center">
            <div class="inline-flex h-14 w-14 items-center justify-center rounded-2xl bg-rose-100 text-rose-700 mb-4 shadow-sm">
                <i class="fas fa-shopping-bag text-2xl"></i>
            </div>
            <h1 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Detail Fitur Belanja</h1>
            <p class="mt-3 text-lg text-gray-600">Nikmati kemudahan penyediaan stok barang dagangan, teknologi otomasi AI, hingga akses permodalan syariah.</p>
        </div>

        <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
            
            <div class="rounded-2xl border border-rose-100 bg-white p-6 shadow-sm hover:shadow-md transition">
                <div class="mb-4 flex h-10 w-10 items-center justify-center rounded-xl bg-rose-50 text-rose-600">
                    <i class="fas fa-user-edit"></i>
                </div>
                <h3 class="text-lg font-bold text-gray-800 mb-2">Belanja Mandiri (Pilihan Sendiri)</h3>
                <p class="text-sm text-gray-600 leading-relaxed">
                    Fitur ini memudahkan Anda memesan barang dagangan yang sudah berkurang atau habis langsung ke Kedai Indonesia. Proses <i>restocking</i> sangat mudah, serta pembaruan data barang di kedai Anda akan berjalan otomatis seketika barang diterima karena proses pengiriman dan database dikelola penuh oleh Imagi Center.
                </p>
            </div>

            <div class="rounded-2xl border border-rose-100 bg-white p-6 shadow-sm hover:shadow-md transition">
                <div class="mb-4 flex h-10 w-10 items-center justify-center rounded-xl bg-rose-50 text-rose-600">
                    <i class="fas fa-bolt"></i>
                </div>
                <h3 class="text-lg font-bold text-gray-800 mb-2">Belanja Cepat (Bantuan Sistem AI)</h3>
                <p class="text-sm text-gray-600 leading-relaxed">
                    Sistem asisten berbasis AI akan merekomendasikan produk yang perlu di-restock berdasarkan riwayat penjualan toko Anda hanya dengan satu sentuhan. Menyediakan pilihan belanja produk sesuai prioritas normal, disesuaikan dengan ketersediaan dana, maupun mengikuti tren terlaris di lingkungan sekitar Anda.
                </p>
            </div>

            <div class="rounded-2xl border border-rose-100 bg-white p-6 shadow-sm hover:shadow-md transition">
                <div class="mb-4 flex h-10 w-10 items-center justify-center rounded-xl bg-rose-50 text-rose-600">
                    <i class="fas fa-hand-holding-usd"></i>
                </div>
                <h3 class="text-lg font-bold text-gray-800 mb-2">Pakai Dulu (Kredit Berbasis Syariah)</h3>
                <p class="text-sm text-gray-600 leading-relaxed">
                    Fasilitas khusus "kesbon" atau penyediaan modal usaha belanja. Memberikan kesempatan emas bagi mitra untuk mengisi stok toko terlebih dahulu, menerima pengiriman barang dengan segera, dan melakukan pembayaran di kemudian hari dengan akad murni syariah yang transparan.
                </p>
            </div>

            <div class="rounded-2xl border border-rose-100 bg-white p-6 shadow-sm hover:shadow-md transition">
                <div class="mb-4 flex h-10 w-10 items-center justify-center rounded-xl bg-rose-50 text-rose-600">
                    <i class="fas fa-wallet"></i>
                </div>
                <h3 class="text-lg font-bold text-gray-800 mb-2">Pembayaran Digital Terintegrasi</h3>
                <p class="text-sm text-gray-600 leading-relaxed">
                    Menyediakan kelancaran bertransaksi digital non-tunai di toko Anda. Melayani berbagai loket pembayaran digital harian seperti tagihan listrik PLN, PDAM, pulsa reguler, paket kuota data, hingga top-up saldo e-wallet yang terus diperbarui demi kenyamanan pelanggan.
                </p>
            </div>

            <div class="rounded-2xl border border-rose-100 bg-white p-6 shadow-sm hover:shadow-md transition md:col-span-2 max-w-2xl mx-auto w-full">
                <div class="mb-4 flex h-10 w-10 items-center justify-center rounded-xl bg-rose-50 text-rose-600">
                    <i class="fas fa-chart-line"></i>
                </div>
                <h3 class="text-lg font-bold text-gray-800 mb-2">Laporan Perkembangan Usaha</h3>
                <p class="text-sm text-gray-600 leading-relaxed">
                    Akses pusat informasi analisis data penjualan, rekap transaksi, manajemen kontrol stok produk, dan data wawasan bisnis esensial lainnya secara berkala (harian, mingguan, bulanan, atau custom). Dirancang khusus untuk memandu Anda mengambil keputusan ekspansi bisnis secara akurat.
                </p>
            </div>

        </div>

    </div>
</div>

<script>
    document.getElementById('btnBackToTab').addEventListener('click', function(e) {
        e.preventDefault();
        // Cek apakah ada history halaman sebelumnya
        if (document.referrer !== "") {
            window.history.back();
        } else {
            // Jika user langsung akses link belanja tanpa lewat beranda, arahkan ke beranda
            window.location.href = "{{ url('/') }}";
        }
    });
</script>
@endsection