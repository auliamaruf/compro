@extends('layouts.app')

@section('content')
    <x-articles.layout>
        <h1 class="text-4xl font-bold text-gray-800 mb-8 relative inline-block">
            Tata Cara Pemasangan Sambungan Rumah Baru
            <div class="absolute -bottom-2 left-0 w-full h-1 bg-gradient-to-r from-blue-500 to-transparent rounded-full">
            </div>
        </h1>

        <div class="prose max-w-none">
            <div class="grid md:grid-cols-2 gap-8">
                <div
                    class="bg-white/50 backdrop-blur-sm p-6 rounded-xl shadow-sm border border-gray-100 hover:shadow-md transition-all">
                    <h2 class="text-xl font-semibold text-gray-700 mb-4">Persyaratan Pemasangan Baru</h2>
                    <ul class="list-disc pl-6 mb-6 space-y-2">
                        <li>Fotokopi KTP pemohon yang masih berlaku</li>
                        <li>Fotokopi Kartu Keluarga</li>
                        <li>Fotokopi bukti kepemilikan rumah/tanah atau surat keterangan dari pemilik</li>
                        <li>Materai Rp. 10.000 (2 lembar)</li>
                        <li>Melampirkan denah lokasi</li>
                    </ul>
                </div>

                <div
                    class="bg-white/50 backdrop-blur-sm p-6 rounded-xl shadow-sm border border-gray-100 hover:shadow-md transition-all">
                    <h2 class="text-xl font-semibold text-gray-700 mb-4">Prosedur Pengajuan</h2>
                    <ol class="list-decimal pl-6 mb-6 space-y-2">
                        <li>Mengisi formulir permohonan yang disediakan di kantor PDAM</li>
                        <li>Melengkapi persyaratan administrasi</li>
                        <li>Membayar biaya pendaftaran</li>
                        <li>Menunggu survei teknis dari petugas</li>
                        <li>Pembayaran biaya pemasangan setelah survei</li>
                        <li>Proses pemasangan oleh tim teknis</li>
                    </ol>
                </div>
            </div>

            <div class="mt-8 bg-gradient-to-r from-blue-50 to-cyan-50 p-6 rounded-xl shadow-sm border border-blue-100">
                <h2 class="text-xl font-semibold text-gray-700 mb-4">Biaya Pemasangan</h2>
                <p class="mb-4">
                    Biaya pemasangan akan ditentukan setelah dilakukan survei teknis berdasarkan:
                </p>
                <ul class="list-disc pl-6 mb-6">
                    <li>Jarak dari pipa utama ke rumah</li>
                    <li>Kebutuhan material</li>
                    <li>Golongan tarif pelanggan</li>
                </ul>
            </div>
        </div>
    </x-articles.layout>
@endsection
