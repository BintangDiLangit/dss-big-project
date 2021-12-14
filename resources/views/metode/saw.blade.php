<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Simple Additive Weighting
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="container m-3">
                    <table class="table" id="tablesawmetode">
                        <h2 class="font-semibold text-xl text-gray-800 leading-tight">V Matrix Keputusan</h2>
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
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($vmatrixkeputusan as $vmk)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{ $vmk->idmatrix }}</td>
                                    <td>{{ $vmk->idalternatif }}</td>
                                    <td>{{ $vmk->namaalternatif }}</td>
                                    <td>{{ $vmk->idkriteria }}</td>
                                    <td>{{ $vmk->namakriteria }}</td>
                                    <td>{{ $vmk->idbobot }}</td>
                                    <td>{{ $vmk->value }}</td>
                                    <td>{{ $vmk->nilai }}</td>
                                    <td>{{ $vmk->keterangan }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="container m-3">
                    <table class="table table-dark" id="tablesawmetode">
                        <h2 class="font-semibold text-xl text-gray-800 leading-tight">V Normalisasi</h2>
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
                                <th scope="col">Normalisasi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($vnormalisasi as $vnm)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{ $vnm->idmatrix }}</td>
                                    <td>{{ $vnm->idalternatif }}</td>
                                    <td>{{ $vnm->namaalternatif }}</td>
                                    <td>{{ $vnm->idkriteria }}</td>
                                    <td>{{ $vnm->namakriteria }}</td>
                                    <td>{{ $vnm->idbobot }}</td>
                                    <td>{{ $vnm->value }}</td>
                                    <td>{{ $vnm->nilai }}</td>
                                    <td>{{ $vnm->keterangan }}</td>
                                    <td>{{ $vnm->normalisasi }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="container m-3">
                    <table class="table" id="tablesawmetode">
                        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Praranking</h2>
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
                                <th scope="col">Praranking</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($vpraranking as $vpk)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{ $vpk->idmatrix }}</td>
                                    <td>{{ $vpk->idalternatif }}</td>
                                    <td>{{ $vpk->namaalternatif }}</td>
                                    <td>{{ $vpk->idkriteria }}</td>
                                    <td>{{ $vpk->namakriteria }}</td>
                                    <td>{{ $vpk->idbobot }}</td>
                                    <td>{{ $vpk->value }}</td>
                                    <td>{{ $vpk->nilai }}</td>
                                    <td>{{ $vpk->keterangan }}</td>
                                    <td>{{ $vpk->praranking }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="container m-3">
                    <table class="table table-dark" id="tablesawmetode">
                        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Ranking</h2>
                        <thead>
                            <tr>
                                <th scope="col">No.</th>
                                <th scope="col">ID Alternatif</th>
                                <th scope="col">Nama Alternatif</th>
                                <th scope="col">Ranking</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($vranking as $vrk)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{ $vrk->idalternatif }}</td>
                                    <td>{{ $vrk->namaalternatif }}</td>
                                    <td>{{ $vrk->rangking }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
