@extends('layouts.app')

@section('content')
<div class="container">
<form method="POST" action="{{ URL('save_input_produk') }}" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-6 col-12 ">
                    <div class="card border-0 rounded-3 p-3 shadow-sm">
                        <div class="form-floating">
                            <input id="nama_produk" type="text" placeholder="nama_produk"
                                class="rounded-3 form-control @error('nama_produk') is-invalid @enderror" name="nama_produk"
                                value="{{ old('nama_produk') }}" required>
                            <label for="floatingInput"><i class="fa fa-user pe-2" aria-hidden="true"></i>
                                Nama Produk
                            </label>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-12 ">
                    <div class="card mt-2 border-0 rounded-3 p-3 shadow-sm ">
                        <div class="d-flex">
                            <select required class="form-select py-3" style="width: 90%" id="bahan" name="bahan"
                                aria-label="Default select example">
                                <option class="align-center" selected>Pilih Bahan Tersedia</option>
                            </select>
                            <button type="button" style="background-color: #2959ad; color:white"
                                class="btn rounded shadow-sm ms-3" type="button" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                <i class="bi bi-plus-lg" data-bs-toggle="tooltip" data-bs-title="Tambah Bahan Baru"></i>
                            </button>
                        </div>
                        {{-- <div class="form-floating">
                        <input id="bahan_produk" type="bahan_produk" placeholder="bahan_produk"
                            class="rounded-3 form-control @error('bahan_produk') is-invalid @enderror" name="bahan_produk"
                            required autocomplete="current-bahan_produk">

                        <label for="bahan_produk"><i class="fa fa-key pe-2" aria-hidden="true"></i>
                            Bahan Produk
                        </label>
                    </div> --}}
                    </div>
                </div>
            </div>
            {{-- </div> --}}

            {{-- <div class="card mt-4 border-0 rounded-3 p-4 shadow-sm"> --}}
            <div class="row">
                <div class="col-md-4 col-12">
                    <div class="card mt-4 border-0 rounded-3 p-3 shadow-sm align-items-center">
                        <span style="font-weight: bolder;">TAMPAK DEPAN</span><br>
                        <img class="my-3 img-fluid shadow-sm rounded" src="{{ asset('/img/klambi.jpg') }}"
                            style="width: 300px" id="foto_depan" alt="TAMPAK DEPAN">
                        <input style="width: 73%" class="form-control mx-auto my-2" type="file" id="input_depan"
                            name="foto_depan" onchange="previewFile();" accept="image/*" required>
                    </div>
                </div>

                <div class="col-md-4 col-12">
                    <div class="card mt-4 border-0 rounded-3 p-3 shadow-sm align-items-center">
                        <span style="font-weight: bolder">TAMPAK BELAKANG</span><br>
                        <img class="my-3 img-fluid shadow-sm rounded" src="{{ asset('/img/klambi.jpg') }}"
                            style="width: 300px" id="previewImg2" alt="TAMPAK BELAKANG">
                        <input style="width: 73%" class="form-control mx-auto my-2" type="file" id="input_belakang"
                            name="foto_belakang" onchange="previewFile2();" accept="image/*" required>
                    </div>
                </div>

                <div class="col-md-4 col-12">
                    <div class="card mt-4 border-0 rounded-3 p-3 shadow-sm align-items-center">
                        <span style="font-weight: bolder">TAMPAK SAMPING</span><br>
                        <img class="my-3 img-fluid shadow-sm rounded" src="{{ asset('/img/klambi.jpg') }}"
                            style="width: 300px" id="previewImg1" alt="TAMPAK SAMPING">
                        <input style="width: 73%" class="form-control mx-auto my-2" type="file" id="input_samping"
                            name="foto_samping" onchange="previewFile1();" accept="image/*" required>
                    </div>
                </div>
            </div>
            {{-- </div> --}}

            <div class="col-md-6 col-12">
                
                <div class="card mt-4 border-0 rounded-3 p-3 shadow-sm">
                    <div class="form-floating">
                        <input style="text-transform: uppercase;" id="segmentasi_pasar" type="segmentasi_pasar" placeholder="segmentasi_pasar"
                            class="rounded-3 form-control @error('segmentasi_pasar') is-invalid @enderror" name="segmentasi_pasar"
                            required autocomplete="current-segmentasi_pasar">
                        <label for="segmentasi_pasar"><i class="fa fa-key pe-2" aria-hidden="true"></i>
                            Segmentasi Pasar
                        </label>
                    </div>
                    <div class="card mt-2 border-0 rounded-3 p-3 shadow-sm">
                        <input class="form-control " type="file" id="harga_pasar1" name="harga_pasar"
                            onchange="previewFile3();" accept="image/*" required>
                    </div>
                </div>

                <div class="col-md-6 col-12">

                    <div class="card mt-4 border-0 rounded-3 p-3 shadow-sm">
                        <div class="form-floating">
                            <input id="segmentasi_pasar" type="segmentasi_pasar" placeholder="segmentasi_pasar"
                                class="rounded-3 form-control @error('segmentasi_pasar') is-invalid @enderror"
                                name="segmentasi_pasar" required autocomplete="current-segmentasi_pasar">
                            <label for="segmentasi_pasar"><i class="fa fa-key pe-2" aria-hidden="true"></i>
                                Segmentasi Pasar
                            </label>
                        </div>
                    </div>
                    <div class="card mt-3 border-0 rounded-3 p-3 shadow-sm">
                        <div class="form-floating">
                            <input id="rekomendasi_harga" type="rekomendasi_harga" placeholder="rekomendasi_harga"
                                class="rounded-3 form-control @error('rekomendasi_harga') is-invalid @enderror"
                                name="rekomendasi_harga" required autocomplete="current-rekomendasi_harga">
                            <label for="rekomendasi_harga"><i class="fa fa-key pe-2" aria-hidden="true"></i>
                                Sumber URL
                            </label>
                        </div>
                    </div>
                    <div class="card mt-3 border-0 rounded-3 p-3 shadow-sm">
                        <button type="submit" id="btnAjukan" onclick="simpanForm()"
                            style="background-color:#2959ad; color:white;" class="btn rounded-3 float-end">
                            AJUKAN
                        </button>

                        <button type="submit" id="btnLoading" style="background-color:#2959ad; color:white;"
                            class="btn rounded-3 float-end" disabled>
                            <div class="spinner-border spinner-border-sm"></div>
                        </button>
                    </div>

                </div>
            </div>

        </form>
</div>
@endsection