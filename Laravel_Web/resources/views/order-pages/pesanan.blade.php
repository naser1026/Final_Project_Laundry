@extends('layouts.user_type.auth')

@section('content')

<div>
    <div class="container-fluid">
        <div class="card">
            <div class="card body pt-4 p-3">
                <div class="input-group mb-3 row justify-content-center">
                    <div class="col-md-10 ms-2">
                        <input type="text" class="form-control" placeholder="Cari nama / nota" aria-describedby="button-addon2">
                    </div>
                    <div class="col-md-1">
                        <button class="btn btn-warning text-body" type="button" id="button-addon2" data-bs-target="#orderAdd" data-bs-toggle="modal"><i class="fas fa-plus"></i></button>
                    </div>
                </div>
                <hr>
                <div class="container">
                    <ul class="nav nav-tabs justify-content-around" id="myTab" role="tablist">
                        <li class="nav-item m-3" role="presentation">
                            <button class="nav-link active" id="antrian-tab" data-bs-toggle="tab" data-bs-target="#antrian-tab-pane" type="button" role="tab" aria-controls="antrian-tab-pane" aria-selected="true">Antrian (0)</button>
                        </li>
                        <li class="nav-item m-3" role="presentation">
                            <button class="nav-link" id="siap-ambil-tab" data-bs-toggle="tab" data-bs-target="#siap-ambil-tab-pane" type="button" role="tab" aria-controls="siap-ambil-tab-pane" aria-selected="false">Siap Ambil (0)</button>
                        </li>
                        <li class="nav-item m-3" role="presentation">
                            <button class="nav-link" id="belum-bayar-tab" data-bs-toggle="tab" data-bs-target="#belum-bayar-tab-pane" type="button" role="tab" aria-controls="belum-bayar-tab-pane" aria-selected="false">Belum Bayar (0)</button>
                        </li>
                    </ul>
                </div>

                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="antrian-tab-pane" role="tabpanel" aria-labelledby="antrian-tab">
                        <div class="card shadow-none">
                            <div class="card-body d-flex justify-content-center">
                                @foreach ($orders as $order )

                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="siap-ambil-tab-pane" role="tabpanel" aria-labelledby="siap-ambil-tab">
                        <div class="card shadow-none">
                            <div class="card-body d-flex justify-content-center">
                                @include('order-pages.pesanan-kosong')
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="belum-bayar-tab-pane" role="tabpanel" aria-labelledby="belum-bayar-tab">
                        <div class="card shadow-none">
                            <div class="card-body d-flex justify-content-center">
                                @include('order-pages.pesanan-kosong')
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>



<!-- Modal -->
<div class="modal fade" id="orderAdd" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="orderAddLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="orderAddLabel">Tambah Kasir</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="/tambah-kasir" method="POST">
                <div class="modal-body">
                    <div class="row ms-2">
                        <div class="icon icon-shape icon-sm border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center col-md-1">
                            <i style="font-size: 1rem;" class="fas fa-lg fa fa-user ps-2 pe-2 text-center text-dark" aria-hidden="true"></i>
                        </div>
                        <div class="form-label col-md-3 pt-2 ps-0">Pilih Pelanggan</div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
