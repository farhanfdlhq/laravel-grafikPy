<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Pariwisata') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="text-lg font-semibold mb-4">{{ __('Data Pariwisata') }}</h3>
                    <canvas id="pariwisataChart" width="400" height="200"></canvas>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            fetch('/api/pariwisata')
                .then(response => response.json())
                .then(data => {
                    let labels = [];
                    let jenisUsahaCounts = {};
                    let kecamatanCounts = {};
                    let wilayahCounts = {};

                    data.forEach(item => {
                        if (!jenisUsahaCounts[item.jenis_usaha]) {
                            jenisUsahaCounts[item.jenis_usaha] = 0;
                        }
                        if (!kecamatanCounts[item.kecamatan]) {
                            kecamatanCounts[item.kecamatan] = 0;
                        }
                        if (!wilayahCounts[item.wilayah]) {
                            wilayahCounts[item.wilayah] = 0;
                        }

                        jenisUsahaCounts[item.jenis_usaha]++;
                        kecamatanCounts[item.kecamatan]++;
                        wilayahCounts[item.wilayah]++;
                    });

                    labels = Object.keys(jenisUsahaCounts);

                    const ctx = document.getElementById('pariwisataChart').getContext('2d');
                    const chart = new Chart(ctx, {
                        type: 'bar',
                        data: {
                            labels: labels,
                            datasets: [{
                                    label: 'Jenis Usaha',
                                    data: Object.values(jenisUsahaCounts),
                                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                                    borderColor: 'rgba(75, 192, 192, 1)',
                                    borderWidth: 1
                                },
                                {
                                    label: 'Kecamatan',
                                    data: Object.values(kecamatanCounts),
                                    backgroundColor: 'rgba(153, 102, 255, 0.2)',
                                    borderColor: 'rgba(153, 102, 255, 1)',
                                    borderWidth: 1
                                },
                                {
                                    label: 'Wilayah',
                                    data: Object.values(wilayahCounts),
                                    backgroundColor: 'rgba(255, 159, 64, 0.2)',
                                    borderColor: 'rgba(255, 159, 64, 1)',
                                    borderWidth: 1
                                }
                            ]
                        },
                        options: {
                            scales: {
                                y: {
                                    beginAtZero: true
                                }
                            }
                        }
                    });
                })
                .catch(error => console.error('Error:', error));
        });
    </script>
</x-app-layout>
