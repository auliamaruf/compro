<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>
@include('components.navbar.index')

<body class="bg-gray-50">
    <div class="relative bg-gradient-to-br from-blue-600 to-blue-800 h-[80px]">
    </div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="mb-4">
                        <a href="{{ route('water-source.index') }}" class="text-blue-500 hover:underline">
                            ← Kembali ke daftar
                        </a>
                    </div>

                    <h2 class="text-3xl font-bold mb-6">{{ $waterSource->source_name }}</h2>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- Basic Information -->
                        <div class="bg-gray-50 p-4 rounded-lg">
                            <h3 class="text-xl font-semibold mb-3">Informasi Dasar</h3>
                            <div class="space-y-2">
                                <p><span class="font-medium">Kode:</span> {{ $waterSource->source_code }}</p>
                                <p><span class="font-medium">Tipe:</span> {{ $waterSource->source_type }}</p>
                                <p><span class="font-medium">Status:</span> {{ $waterSource->source_status }}</p>
                                <p><span class="font-medium">Kapasitas:</span> {{ $waterSource->capacity_flow_lps }} L/s
                                </p>
                            </div>
                        </div>

                        <!-- Location -->
                        <div class="bg-gray-50 p-4 rounded-lg">
                            <h3 class="text-xl font-semibold mb-3">Lokasi</h3>
                            <div class="space-y-2">
                                <p><span class="font-medium">Desa:</span> {{ $waterSource->village }}</p>
                                <p><span class="font-medium">Kecamatan:</span> {{ $waterSource->district }}</p>
                                <p><span class="font-medium">Kota:</span> {{ $waterSource->city }}</p>
                                <p><span class="font-medium">Provinsi:</span> {{ $waterSource->province }}</p>
                                <p><span class="font-medium">Koordinat:</span> {{ $waterSource->latitude }},
                                    {{ $waterSource->longitude }}</p>
                                <p><span class="font-medium">Elevasi:</span> {{ $waterSource->elevation_masl }} m</p>
                            </div>
                        </div>

                        <!-- Management -->
                        <div class="bg-gray-50 p-4 rounded-lg">
                            <h3 class="text-xl font-semibold mb-3">Manajemen</h3>
                            <div class="space-y-2">
                                <p><span class="font-medium">Pengelola:</span> {{ $waterSource->manager }}</p>
                                <p><span class="font-medium">Tahun Eksplorasi:</span>
                                    {{ $waterSource->exploration_year }}</p>
                                <p><span class="font-medium">Tahun Operasional:</span>
                                    {{ $waterSource->operational_year }}</p>
                                <p><span class="font-medium">Status Kepemilikan:</span>
                                    {{ $waterSource->ownership_status }}</p>
                            </div>
                        </div>

                        <!-- Technical -->
                        <div class="bg-gray-50 p-4 rounded-lg">
                            <h3 class="text-xl font-semibold mb-3">Teknis</h3>
                            <div class="space-y-2">
                                <p><span class="font-medium">Sistem Pemanfaatan:</span>
                                    {{ $waterSource->utilization_system }}</p>
                                <p><span class="font-medium">Jumlah Pompa:</span> {{ $waterSource->number_of_pumps }}
                                </p>
                                <p><span class="font-medium">Catatan:</span> {{ $waterSource->notes }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('components.footer.index')
</body>

</html>
