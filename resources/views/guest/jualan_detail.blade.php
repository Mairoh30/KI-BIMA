@extends('layouts.guest') {{-- Sesuaikan dengan nama layout master aplikasi Anda --}}

@section('content')
<div class="min-h-screen bg-emerald-50/30 py-12">
    <div class="mx-auto max-w-5xl px-4 sm:px-6 lg:px-8">
        
        <div class="mb-8">
            <a href="{{ url()->previous() }}" class="inline-flex items-center text-sm font-semibold text-emerald-700 hover:text-emerald-800 transition">
                <i class="fas fa-arrow-left mr-2"></i> Kembali
            </a>
        </div>

        <div class="mb-12 text-center">
            <div class="inline-flex h-14 w-14 items-center justify-center rounded-2xl bg-emerald-100 text-emerald-700 mb-4 shadow-sm">
                <i class="fas fa-store text-2xl"></i>
            </div>
            <h1 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Detail Fitur Jualan</h1>
            <p class="mt-3 text-lg text-gray-600">Pelajari bagaimana ekosistem kasir dan PPOB Kedai Indonesia mendorong profitabilitas usaha Anda.</p>
        </div>

        <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
            
            <div class="rounded-2xl border border-emerald-100 bg-white p-6 shadow-sm hover:shadow-md transition">
                <div class="mb-4 flex h-10 w-10 items-center justify-center rounded-xl bg-emerald-50 text-emerald-600">
                    <i class="fas fa-cash-register"></i>
                </div>
                <h3 class="text-lg font-bold text-gray-800 mb-2">Point of Sale (Kasir Digital)</h3>
                <p class="text-sm text-gray-600 leading-relaxed">
                    Sistem mesin kasir modern yang mencatat semua transaksi penjualan secara otomatis. Mempercepat proses pelayanan pembeli, meminimalkan human error saat menghitung kembalian, serta mencetak struk fisik maupun digital secara instan.
                </p>
            </div>

            <div class="rounded-2xl border border-emerald-100 bg-white p-6 shadow-sm hover:shadow-md transition">
                <div class="mb-4 flex h-10 w-10 items-center justify-center rounded-xl bg-emerald-50 text-emerald-600">
                    <i class="fas fa-mobile-alt"></i>
                </div>
                <h3 class="text-lg font-bold text-gray-800 mb-2">PPOB Lengkap</h3>
                <p class="text-sm text-gray-600 leading-relaxed">
                    Ubah kedai Anda menjadi pusat pembayaran lingkungan sekitar. Layani transaksi pembelian pulsa, paket data, token PLN, voucher game, hingga top-up saldo berbagai e-wallet (GoPay, OVO, Dana, LinkAja) dengan margin keuntungan yang bersaing.
                </p>
            </div>

            <div class="rounded-2xl border border-emerald-100 bg-white p-6 shadow-sm hover:shadow-md transition">
                <div class="mb-4 flex h-10 w-10 items-center justify-center rounded-xl bg-emerald-50 text-emerald-600">
                    <i class="fas fa-credit-card"></i>
                </div>
                <h3 class="text-lg font-bold text-gray-800 mb-2">Multi Payment Method</h3>
                <p class="text-sm text-gray-600 leading-relaxed">
                    Jangan lewatkan pembeli karena keterbatasan metode bayar. Sistem kami mendukung pembayaran tunai (Cash), integrasi satu QRIS untuk semua dompet digital, hingga metode transfer bank yang langsung terverifikasi secara real-time.
                </p>
            </div>

            <div class="rounded-2xl border border-emerald-100 bg-white p-6 shadow-sm hover:shadow-md transition">
                <div class="mb-4 flex h-10 w-10 items-center justify-center rounded-xl bg-emerald-50 text-emerald-600">
                    <i class="fas fa-boxes"></i>
                </div>
                <h3 class="text-lg font-bold text-gray-800 mb-2">Terintegrasi Manajemen Stok Retail</h3>
                <p class="text-sm text-gray-600 leading-relaxed">
                    Setiap barang yang terjual melalui kasir akan memotong jumlah stok gudang secara otomatis. Dilengkapi dengan sistem peringatan dini (alert) ketika persediaan barang dagangan Anda mulai menipis agar bisa segera restock.
                </p>
            </div>

            <div class="rounded-2xl border border-emerald-100 bg-white p-6 shadow-sm hover:shadow-md transition">
                <div class="mb-4 flex h-10 w-10 items-center justify-center rounded-xl bg-emerald-50 text-emerald-600">
                    <i class="fas fa-heart"></i>
                </div>
                <h3 class="text-lg font-bold text-gray-800 mb-2">Infak & Donasi Transparan</h3>
                <p class="text-sm text-gray-600 leading-relaxed">
                    Fitur pembulatan uang kembalian untuk dialokasikan menjadi infak atau donasi atas persetujuan konsumen. Seluruh dana yang terkumpul dikelola dalam sistem yang rapi, akuntabel, dan disalurkan secara transparan ke lembaga resmi.
                </p>
            </div>

            <div class="rounded-2xl border border-emerald-100 bg-white p-6 shadow-sm hover:shadow-md transition">
                <div class="mb-4 flex h-10 w-10 items-center justify-center rounded-xl bg-emerald-50 text-emerald-600">
                    <i class="fas fa-shield-alt"></i>
                </div>
                <h3 class="text-lg font-bold text-gray-800 mb-2">Jaminan Keamanan Data</h3>
                <p class="text-sm text-gray-600 leading-relaxed">
                    Seluruh riwayat keuangan, daftar pelanggan, dan rahasia margin keuntungan toko Anda dilindungi oleh enkripsi cloud server tingkat tinggi. Kebocoran data transaksi dijamin aman dari pihak luar.
                </p>
            </div>

            <div class="rounded-2xl border border-emerald-100 bg-white p-6 shadow-sm hover:shadow-md transition">
                <div class="mb-4 flex h-10 w-10 items-center justify-center rounded-xl bg-emerald-50 text-emerald-600">
                    <i class="fas fa-chart-pie"></i>
                </div>
                <h3 class="text-lg font-bold text-gray-800 mb-2">Koneksi Sistem Pelaporan Usaha</h3>
                <p class="text-sm text-gray-600 leading-relaxed">
                    Data penjualan harian berwujud grafik omzet, laporan laba-rugi bersih, hingga analisis produk terlaris terkoneksi otomatis tanpa perlu rekap manual menggunakan buku atau spreadsheet di akhir bulan.
                </p>
            </div>

            <div class="rounded-2xl border border-emerald-100 bg-white p-6 shadow-sm hover:shadow-md transition">
                <div class="mb-4 flex h-10 w-10 items-center justify-center rounded-xl bg-emerald-50 text-emerald-600">
                    <i class="fas fa-headset"></i>
                </div>
                <h3 class="text-lg font-bold text-gray-800 mb-2">Gratis Pendampingan Kendala</h3>
                <p class="text-sm text-gray-600 leading-relaxed">
                    Kami tidak meninggalkan Anda sendirian. Tim teknis support Kedai Indonesia siap mendampingi, memberikan training cara penggunaan aplikasi, serta siaga menyelesaikan error operasional kasir kapan saja dibutuhkan.
                </p>
            </div>

        </div>

    </div>
</div>
@endsection