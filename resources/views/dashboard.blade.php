<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-3xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-gray-100">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white rounded-lg shadow-lg p-8">
                <h1 class="text-4xl font-bold mb-8 text-center text-indigo-600">Dashboard Pariwisata</h1>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Card for Jenis Usaha -->
                    <div
                        class="bg-gradient-to-r from-blue-400 to-blue-600 p-6 rounded-lg shadow-lg transform hover:scale-105 transition-transform duration-300">
                        <h3 class="text-2xl font-semibold mb-2 text-dark">Jenis Usaha</h3>
                        <p class="text-dark mb-4">Lihat grafik mengenai banyak jenis usaha di Jakarta.</p>
                        <a href="{{ url('/dashboard/jenis-usaha') }}"
                            class="bg-white text-blue-600 font-semibold py-2 px-4 rounded-full inline-block hover:bg-gray-100">Lihat
                            Grafik</a>
                    </div>

                    <!-- Card for Kecamatan -->
                    <div
                        class="bg-gradient-to-r from-green-400 to-green-600 p-6 rounded-lg shadow-lg transform hover:scale-105 transition-transform duration-300">
                        <h3 class="text-2xl font-semibold mb-2 text-dark">Kecamatan</h3>
                        <p class="text-dark mb-4">Lihat grafik mengenai banyak kecamatan yang memiliki jenis usaha.</p>
                        <a href="{{ url('/dashboard/kecamatan') }}"
                            class="bg-white text-green-600 font-semibold py-2 px-4 rounded-full inline-block hover:bg-gray-100">Lihat
                            Grafik</a>
                    </div>

                    <!-- Card for Wilayah -->
                    <div
                        class="bg-gradient-to-r from-yellow-400 to-yellow-600 p-6 rounded-lg shadow-lg transform hover:scale-105 transition-transform duration-300">
                        <h3 class="text-2xl font-semibold mb-2 text-dark">Wilayah</h3>
                        <p class="text-dark mb-4">Lihat grafik mengenai banyak wilayah yang memiliki jenis usaha.</p>
                        <a href="{{ url('/dashboard/wilayah') }}"
                            class="bg-white text-yellow-600 font-semibold py-2 px-4 rounded-full inline-block hover:bg-gray-100">Lihat
                            Grafik</a>
                    </div>

                    <!-- Card for Sebaran Jenis Usaha per Kecamatan -->
                    <div
                        class="bg-gradient-to-r from-purple-400 to-purple-600 p-6 rounded-lg shadow-lg transform hover:scale-105 transition-transform duration-300">
                        <h3 class="text-2xl font-semibold mb-2 text-dark">Sebaran Jenis Usaha per Kecamatan</h3>
                        <p class="text-dark mb-4">Lihat grafik mengenai sebaran jenis usaha di setiap kecamatan.</p>
                        <a href="{{ url('/dashboard/sebaran-jenis-usaha-per-kecamatan') }}"
                            class="bg-white text-purple-600 font-semibold py-2 px-4 rounded-full inline-block hover:bg-gray-100">Lihat
                            Grafik</a>
                    </div>

                    <!-- Card for Sebaran Kecamatan per Wilayah -->
                    <div
                        class="bg-gradient-to-r from-red-400 to-red-600 p-6 rounded-lg shadow-lg transform hover:scale-105 transition-transform duration-300">
                        <h3 class="text-2xl font-semibold mb-2 text-dark">Sebaran Kecamatan per Wilayah</h3>
                        <p class="text-dark mb-4">Lihat grafik mengenai sebaran kecamatan pada setiap wilayah.</p>
                        <a href="{{ url('/dashboard/sebaran-kecamatan-per-wilayah') }}"
                            class="bg-white text-red-600 font-semibold py-2 px-4 rounded-full inline-block hover:bg-gray-100">Lihat
                            Grafik</a>
                    </div>

                    <!-- Card for Sebaran Jenis Usaha per Wilayah -->
                    <div
                        class="bg-gradient-to-r from-teal-400 to-teal-600 p-6 rounded-lg shadow-lg transform hover:scale-105 transition-transform duration-300">
                        <h3 class="text-2xl font-semibold mb-2 text-dark">Sebaran Jenis Usaha per Wilayah</h3>
                        <p class="text-dark mb-4">Lihat grafik mengenai sebaran jenis usaha di setiap wilayah.</p>
                        <a href="{{ url('/dashboard/sebaran-jenis-usaha-per-wilayah') }}"
                            class="bg-white text-teal-600 font-semibold py-2 px-4 rounded-full inline-block hover:bg-gray-100">Lihat
                            Grafik</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
