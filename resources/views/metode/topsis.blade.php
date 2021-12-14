<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            TOPSIS
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="container m-3">
                    <table class="table" id="tablesawmetode">
                        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Topsis Pembagi</h2>
                        <thead>
                            <tr>
                                <th scope="col">No.</th>
                                <th scope="col">ID Kriteria</th>
                                <th scope="col">Nama Kriteria</th>
                                <th scope="col">Bagi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($topsispembagi as $tp)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{ $tp->idkriteria }}</td>
                                    <td>{{ $tp->namakriteria }}</td>
                                    <td>{{ $tp->bagi }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="container m-3">
                    <table class="table table-dark" id="tablesawmetode">
                        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Topsis Normalisasi</h2>
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
                            @foreach ($topsisnormalisasi as $tnm)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{ $tnm->idmatrix }}</td>
                                    <td>{{ $tnm->idalternatif }}</td>
                                    <td>{{ $tnm->namaalternatif }}</td>
                                    <td>{{ $tnm->idkriteria }}</td>
                                    <td>{{ $tnm->namakriteria }}</td>
                                    <td>{{ $tnm->idbobot }}</td>
                                    <td>{{ $tnm->value }}</td>
                                    <td>{{ $tnm->nilai }}</td>
                                    <td>{{ $tnm->keterangan }}</td>
                                    <td>{{ $tnm->normalisasi }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="container m-3">
                    <table class="table" id="tablesawmetode">
                        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Topsis Terbobot</h2>
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
                                <th scope="col">Terbobot</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($topsisterbobot as $tbb)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{ $tbb->idmatrix }}</td>
                                    <td>{{ $tbb->idalternatif }}</td>
                                    <td>{{ $tbb->namaalternatif }}</td>
                                    <td>{{ $tbb->idkriteria }}</td>
                                    <td>{{ $tbb->namakriteria }}</td>
                                    <td>{{ $tbb->idbobot }}</td>
                                    <td>{{ $tbb->value }}</td>
                                    <td>{{ $tbb->nilai }}</td>
                                    <td>{{ $tbb->keterangan }}</td>
                                    <td>{{ $tbb->normalisasi }}</td>
                                    <td>{{ $tbb->terbobot }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="container m-3">
                    <table class="table table-dark" id="tablesawmetode">
                        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Topsis MaxMin</h2>
                        <thead>
                            <tr>
                                <th scope="col">No.</th>
                                <th scope="col">ID Matrix</th>
                                <th scope="col">ID Kriteria</th>
                                <th scope="col">Nama Kriteria</th>
                                <th scope="col">Maximum</th>
                                <th scope="col">Minimum</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($topsismaxmin as $tmm)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{ $tmm->idmatrix }}</td>
                                    <td>{{ $tmm->idkriteria }}</td>
                                    <td>{{ $tmm->namakriteria }}</td>
                                    <td>{{ $tmm->maximum }}</td>
                                    <td>{{ $tmm->minimum }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="container m-3">
                    <table class="table" id="tablesawmetode">
                        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Topsis SipSin</h2>
                        <thead>
                            <tr>
                                <th scope="col">No.</th>
                                <th scope="col">ID Alternatif</th>
                                <th scope="col">D Plus</th>
                                <th scope="col">D Min</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($topsissipsin as $tss)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{ $tss->idalternatif }}</td>
                                    <td>{{ $tss->dplus }}</td>
                                    <td>{{ $tss->dmin }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="container m-3">
                    <table class="table table-dark" id="tablesawmetode">
                        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Topsis Nilai V</h2>
                        <thead>
                            <tr>
                                <th scope="col">No.</th>
                                <th scope="col">ID Alternatif</th>
                                <th scope="col">D Plus</th>
                                <th scope="col">D Min</th>
                                <th scope="col">Nilai V</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($topsisnilaiv as $tnv)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{ $tnv->idalternatif }}</td>
                                    <td>{{ $tnv->dplus }}</td>
                                    <td>{{ $tnv->dmin }}</td>
                                    <td>{{ $tnv->nilaiv }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
