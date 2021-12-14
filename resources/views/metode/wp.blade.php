<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Weighted Product
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="container m-3">
                    <table class="table table-dark" id="tablesawmetode">
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
                    <table class="table" id="tablesawmetode">
                        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Jumlah Bobot (W)</h2>
                        <thead>
                            <tr>
                                <th scope="col">No.</th>
                                <th scope="col">Jumlah</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($wpjumbobot as $wjb)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{ $wjb->jumlah }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="container m-3">
                    <table class="table table-dark" id="tablesawmetode">
                        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Normalisasi Terbobot</h2>
                        <thead>
                            <tr>
                                <th scope="col">No.</th>
                                <th scope="col">ID Bobot</th>
                                <th scope="col">ID Kriteria</th>
                                <th scope="col">Value</th>
                                <th scope="col">Jumlah</th>
                                <th scope="col">Normalisasi Terbobot</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($wpnormalisasiterbobot as $wnrt)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{ $wnrt->idbobot }}</td>
                                    <td>{{ $wnrt->idkriteria }}</td>
                                    <td>{{ $wnrt->value }}</td>
                                    <td>{{ $wnrt->jumlah }}</td>
                                    <td>{{ $wnrt->normalisasi_u }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="container m-3">
                    <table class="table" id="tablesawmetode">
                        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Pra-nilai S</h2>
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
                                <th scope="col">Normalisasi Terbobot</th>
                                <th scope="col">Pangkat</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($wppangkat as $wpgt)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{ $wpgt->idmatrix }}</td>
                                    <td>{{ $wpgt->idalternatif }}</td>
                                    <td>{{ $wpgt->namaalternatif }}</td>
                                    <td>{{ $wpgt->idkriteria }}</td>
                                    <td>{{ $wpgt->namakriteria }}</td>
                                    <td>{{ $wpgt->idbobot }}</td>
                                    <td>{{ $wpgt->value }}</td>
                                    <td>{{ $wpgt->nilai }}</td>
                                    <td>{{ $wpgt->keterangan }}</td>
                                    <td>{{ $wpgt->normalisasi_u }}</td>
                                    <td>{{ $wpgt->pangkat }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="container m-3">
                    <table class="table table-dark" id="tablesawmetode">
                        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Nilai S</h2>
                        <thead>
                            <tr>
                                <th scope="col">No.</th>
                                <th scope="col">ID Alternatif</th>
                                <th scope="col">Nama Alternatif</th>
                                <th scope="col">Nilai S</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($wpnilais as $wns)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{ $wns->idalternatif }}</td>
                                    <td>{{ $wns->namaalternatif }}</td>
                                    <td>{{ $wns->nilaiS }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="container m-3">
                    <table class="table" id="tablesawmetode">
                        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Total Nilai S</h2>
                        <thead>
                            <tr>
                                <th scope="col">No.</th>
                                <th scope="col">Jumlah</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($wpsums as $wss)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{ $wss->jum }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="container m-3">
                    <table class="table table-dark" id="tablesawmetode">
                        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Nilai S</h2>
                        <thead>
                            <tr>
                                <th scope="col">No.</th>
                                <th scope="col">ID Alternatif</th>
                                <th scope="col">Nama Alternatif</th>
                                <th scope="col">Nilai V</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($wpnilaiv as $wnv)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{ $wnv->idalternatif }}</td>
                                    <td>{{ $wnv->namaalternatif }}</td>
                                    <td>{{ $wnv->nilaiV }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
