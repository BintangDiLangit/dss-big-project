<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            MULTIMOORA
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="container m-3">
                    <table class="table" id="tablesawmetode">
                        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Multimoora 1</h2>
                        <thead>
                            <tr>
                                <th scope="col">No.</th>
                                <th scope="col">ID Matrix</th>
                                <th scope="col">ID Alternatif</th>
                                <th scope="col">Nama Alternatif</th>
                                <th scope="col">ID Kriteria</th>
                                <th scope="col">Nama Kriteria</th>
                                <th scope="col">ID Bobot</th>
                                <th scope="col">Value</th>
                                <th scope="col">Nilai</th>
                                <th scope="col">Keterangan</th>
                                <th scope="col">Pra</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($multimoora1 as $m1)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{ $m1->idmatrix }}</td>
                                    <td>{{ $m1->idalternatif }}</td>
                                    <td>{{ $m1->namaalternatif }}</td>
                                    <td>{{ $m1->idkriteria }}</td>
                                    <td>{{ $m1->namakriteria }}</td>
                                    <td>{{ $m1->idbobot }}</td>
                                    <td>{{ $m1->value }}</td>
                                    <td>{{ $m1->nilai }}</td>
                                    <td>{{ $m1->keterangan }}</td>
                                    <td>{{ $m1->pra }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="container m-3">
                    <table class="table" id="tablesawmetode">
                        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Multimoora 2</h2>
                        <thead>
                            <tr>
                                <th scope="col">No.</th>
                                <th scope="col">ID Matrix</th>
                                <th scope="col">ID Alternatif</th>
                                <th scope="col">Nama Alternatif</th>
                                <th scope="col">ID Kriteria</th>
                                <th scope="col">Nama Kriteria</th>
                                <th scope="col">ID Bobot</th>
                                <th scope="col">Value</th>
                                <th scope="col">Nilai</th>
                                <th scope="col">Keterangan</th>
                                <th scope="col">Pra</th>
                                <th scope="col">Normalisasi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($multimoora2 as $m2)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{ $m2->idmatrix }}</td>
                                    <td>{{ $m2->idalternatif }}</td>
                                    <td>{{ $m2->namaalternatif }}</td>
                                    <td>{{ $m2->idkriteria }}</td>
                                    <td>{{ $m2->namakriteria }}</td>
                                    <td>{{ $m2->idbobot }}</td>
                                    <td>{{ $m2->value }}</td>
                                    <td>{{ $m2->nilai }}</td>
                                    <td>{{ $m2->keterangan }}</td>
                                    <td>{{ $m2->pra }}</td>
                                    <td>{{ $m2->normalisasi }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="container m-3">
                    <table class="table" id="tablesawmetode">
                        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Multimoora 3</h2>
                        <thead>
                            <tr>
                                <th scope="col">No.</th>
                                <th scope="col">ID Matrix</th>
                                <th scope="col">ID Alternatif</th>
                                <th scope="col">Nama Alternatif</th>
                                <th scope="col">ID Kriteria</th>
                                <th scope="col">Nama Kriteria</th>
                                <th scope="col">ID Bobot</th>
                                <th scope="col">Value</th>
                                <th scope="col">Nilai</th>
                                <th scope="col">Keterangan</th>
                                <th scope="col">Pra</th>
                                <th scope="col">Normalisasi</th>
                                <th scope="col">Normalisasi Bobot</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($multimoora3 as $m3)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{ $m3->idmatrix }}</td>
                                    <td>{{ $m3->idalternatif }}</td>
                                    <td>{{ $m3->namaalternatif }}</td>
                                    <td>{{ $m3->idkriteria }}</td>
                                    <td>{{ $m3->namakriteria }}</td>
                                    <td>{{ $m3->idbobot }}</td>
                                    <td>{{ $m3->value }}</td>
                                    <td>{{ $m3->nilai }}</td>
                                    <td>{{ $m3->keterangan }}</td>
                                    <td>{{ $m3->pra }}</td>
                                    <td>{{ $m3->normalisasi }}</td>
                                    <td>{{ $m3->normalisasibobot }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="container m-3">
                    <table class="table" id="tablesawmetode">
                        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Multimoora 4</h2>
                        <thead>
                            <tr>
                                <th scope="col">No.</th>
                                <th scope="col">ID Alternatif</th>
                                <th scope="col">Hasil</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($multimoora4 as $m4)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{ $m4->idalternatif }}</td>
                                    <td>{{ $m4->hasil }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
