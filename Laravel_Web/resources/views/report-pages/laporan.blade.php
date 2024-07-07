@extends('layouts.user_type.auth')

@section('content')

<div>
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-center">
                    <div class="btn col-md-4 bg-success mx-2 fw-bold" data-bs-toggle="modal" data-bs-target="#addCash">Penambahan Cash</div>
                    <div class="btn col-md-4 bg-warning mx-2 fw-bold" data-bs-toggle="modal" data-bs-target="#minusCash">Pengurangan Cash</div>
                </div>
                <br>
                <div>
                </div>
                <div class="row ms-3 ">
                    <div class="col-md-2 justify-content-start d-flex pe-0"><strong>Saldo Kas Outlet</strong></div>
                    <div class="col-md-8 px-0">
                        <hr>
                    </div>

                    <div class="row d-flex justify-content-around">
                        <div class="col-md-3">
                            <div class="row">
                                <div class="icon icon-shape icon-sm border-radius-md bg-white text-center me-2  d-flex justify-content-end">
                                    <i style="font-size: 1rem;" class="fas fa-lg fa fa-dollar text-center text-dark pt-1 pe-0" aria-hidden="true"></i>
                                </div>
                                <div class="col-md-7 ps-0">
                                    <span>Saldo Tunai</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            Rp 72000
                        </div>
                    </div>

                    <div class="row d-flex justify-content-around">
                        <div class="col-md-3">
                            <div class="row">
                                <div class="icon icon-shape icon-sm border-radius-md bg-white text-center me-2  d-flex justify-content-end">
                                    <i style="font-size: 1rem;" class="fas fa-lg fa fa-credit-card text-center text-dark pt-1 pe-0" aria-hidden="true"></i>
                                </div>
                                <div class="col-md-7 ps-0">
                                    <span>Saldo Non-Tunai</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            Rp 72000
                        </div>
                    </div>
                </div>

                <div class="row ms-3  mt-3">
                    <div class="col-md-2 justify-content-start d-flex pe-0"><strong>Pesanan Hari Ini</strong></div>
                    <div class="col-md-8 px-0">
                        <hr>
                    </div>

                    <div class="row d-flex justify-content-around">
                        <div class="col-md-3">
                            <div class="row">
                                <div class="icon icon-shape icon-sm border-radius-md bg-white text-center me-2  d-flex justify-content-end">
                                    <i style="font-size: 1rem;" class="fas fa-lg fa fa-shopping-basket text-center text-dark pt-1 pe-0" aria-hidden="true"></i>
                                </div>
                                <div class="col-md-7 ps-0">
                                    <span>Nilai Pesanan</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            Rp 72000
                        </div>
                    </div>

                    <div class="row d-flex justify-content-around">
                        <div class="col-md-3">
                            <div class="row">
                                <div class="icon icon-shape icon-sm border-radius-md bg-white text-center me-2  d-flex justify-content-end">
                                    <i style="font-size: 1rem;" class="fas fa-lg fa fa-reorder text-center text-dark pt-1 pe-0" aria-hidden="true"></i>
                                </div>
                                <div class="col-md-7 ps-0">
                                    <span>Jumlah Pesanan</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            1 Pesanan
                        </div>
                    </div>
                    <div class="row d-flex justify-content-around">
                        <div class="col-md-3">
                            <div class="row">
                                <div class="icon icon-shape icon-sm border-radius-md bg-white text-center me-2  d-flex justify-content-end">
                                    <i style="font-size: 1rem;" class="fas fa-lg fa fa-user-times text-center text-dark pt-1 pe-0" aria-hidden="true"></i>
                                </div>
                                <div class="col-md-7 ps-0">
                                    <span>Pesanan Batal</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            1 Pesanan
                        </div>
                    </div>
                    <div class="row d-flex justify-content-around">
                        <div class="col-md-3">
                            <div class="row">
                                <div class="icon icon-shape icon-sm border-radius-md bg-white text-center me-2  d-flex justify-content-end">
                                    <i style="font-size: 1rem;" class="fas fa-lg fa fa-credit-card text-center text-dark pt-1 pe-0" aria-hidden="true"></i>
                                </div>
                                <div class="col-md-8 ps-0">
                                    <span>Total Belum Bayar</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            Rp 0
                        </div>
                    </div>
                </div>
                <div class="row ms-3  mt-3">
                    <div class="col-md-2 justify-content-start d-flex pe-0"><strong>Lihat Laporan</strong></div>
                    <div class="col-md-8 px-0">
                        <hr>
                    </div>
                    <div class="row d-flex justify-content-center  ">
                        <div class="btn col-md-9 justify-content-around shadow-none" data-bs-toggle="modal" data-bs-target="#mutationReport">
                            <div class="row align-items-center">
                                <div class="icon icon-shape icon-md shadow-none border-radius-md bg-warning text-center me-2 d-flex pt-2 justify-content-center ">
                                    <i style="font-size: 1.5rem;" class="fas fa-lg fa fa-dollar ps-2 pe-2 text-center text-dark " aria-hidden="true"></i>
                                </div>
                                <div class="col-md-4 row">
                                    <div class="shadow-none border-radius-md bg-transparent d-flex justify-content-start col-md-10 " style="font-size: 0.8rem; text-transform: capitalize;">Laporan Kas</div>
                                    <div class="col-md-10 d-flex justify-content-start">
                                        <p style="font-size: 0.8rem; text-transform: capitalize;">Laporan mutasi kas</p>
                                    </div>

                                </div>

                            </div>

                        </div>
                    </div>

                    <div class="row d-flex justify-content-center">
                        <div class="btn col-md-9 justify-content-around shadow-none" data-bs-toggle="modal" data-bs-target="#orderReport">
                            <div class="row align-items-center">
                                <div class="icon icon-shape icon-md shadow-none border-radius-md bg-warning text-center me-2 d-flex pt-2 justify-content-center ">
                                    <i style="font-size: 1.5rem;" class="fas fa-lg fa fa-reorder ps-2 pe-2 text-center text-dark " aria-hidden="true"></i>
                                </div>
                                <div class="col-md-4 row">
                                    <div class="shadow-none border-radius-md bg-transparent d-flex justify-content-start col-md-10 " style="font-size: 0.8rem; text-transform: capitalize;">Laporan Pesanan</div>
                                    <div class="col-md-10 d-flex justify-content-start">
                                        <p style="font-size: 0.8rem; text-transform: capitalize;">Laporan data pesanan</p>
                                    </div>

                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- Modal -->
<div class="modal fade " id="mutationReport" data-bs-keyboard="false" tabindex="-1" aria-labelledby="mutationReport" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">

                <div class="row justify-content-center ms-3 me-2">
                    <div class="col-md-5 row">
                        <div class="col-md-2">
                            <i class="fas fa-md fa fa-calendar pt-1" aria-hidden="true"></i>
                            </div>
                            <div class="col-md-10">
                            <span>Pilih Periode</span>
                            </div>
                            </div>
                            </div>
                            <div class="row m-2 p-2 border border-radius-md justify-content-around">
                                <div class="col-md-5 pe-0">
                                    <input type="date" class="form-control">
                                    </div>
                                    <div class="col-md-1 d-flex align-items-center">
                                        ~
                                        </div>
                                        <div class="col-md-5 ps-0">
                        <input type="date" class="form-control">
                        </div>
                        </div>

                        <div class="row ms-2 mt-2">
                            <div class="d-flex justify-content-center mt-3">
                                <button type="button" class="btn btn-primary">Lihat Laporan Kas</button>
                                </div>
                                </div>
                                </div>
                                </div>
                                </div>
                                </div>


                                <!-- Modal -->
                                <div class="modal fade " id="orderReport" data-bs-keyboard="false" tabindex="-1" aria-labelledby="orderReport" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
            <div class="modal-body">

                <div class="row justify-content-center ms-3 me-2">
                    <div class="col-md-5 row">
                        <div class="col-md-2">
                            <i class="fas fa-md fa fa-calendar pt-1" aria-hidden="true"></i>
                            </div>
                            <div class="col-md-10">
                                <span>Pilih Periode</span>
                                </div>
                                </div>
                                </div>
                                <div class="row m-2 p-2 border border-radius-md justify-content-around">
                                    <div class="col-md-5 pe-0">
                                        <input type="date" class="form-control">
                                        </div>
                                        <div class="col-md-1 d-flex align-items-center">
                                            ~
                                            </div>
                    <div class="col-md-5 ps-0">
                        <input type="date" class="form-control">
                        </div>
                </div>

                <div class="row ms-2 mt-2">
                    <div class="d-flex justify-content-center mt-3">
                        <button type="button" class="btn btn-primary">Lihat Laporan Pesanan</button>
                        </div>
                        </div>
                        </div>
                        </div>
                        </div>
                        </div>


                        <!-- Modal -->
                        <div class="modal fade " id="addCash" data-bs-keyboard="false" tabindex="-1" aria-labelledby="addCash" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
            <div class="modal-header">
                <div class="modal-title">
                    <button type="button" data-bs-dismiss="modal" class="btn shadow-none pe-1 "><i class="fas fa-lg fa fa-arrow-left pt-3"></i></button>
                    <span class="ps-0">Penambahan Kas</span>
                    </div>

                    </div>
                    <div class="modal-body">
                        <div class="row m-3 ">
                            <div class="col-md-4 justify-content-start d-flex pe-0"><strong>Saldo Kas Outlet</strong></div>
                            <div class="col-md-7 px-0">
                                <hr>
                                </div>
                                </div>

                                <div class="row ms-3">
                                    <div class="col-md-6 ms-3">
                                        <div class="row">
                                            <div class="icon icon-shape icon-sm border-radius-md bg-white text-center me-2  d-flex justify-content-end">
                                                <i style="font-size: 1rem;" class="fas fa-lg fa fa-dollar text-center text-dark pt-1 pe-0" aria-hidden="true"></i>
                                                </div>
                                                <div class="col-md-8 ps-0">
                                <span>Saldo Tunai</span>
                                </div>
                                </div>
                                </div>
                                <div class="col-md-5 d-flex justify-content-center">
                        Rp 72000
                    </div>
                </div>
                <div class="row ms-3">
                    <div class="col-md-6 ms-3">
                        <div class="row">
                            <div class="icon icon-shape icon-sm border-radius-md bg-white text-center me-2  d-flex justify-content-end">
                                <i style="font-size: 1rem;" class="fas fa-lg fa fa-credit-card text-center text-dark pt-1 pe-0" aria-hidden="true"></i>
                                </div>
                            <div class="col-md-8 ps-0">
                                <span>Saldo Non-Tunai</span>
                                </div>
                                </div>
                                </div>
                                <div class="col-md-5 d-flex justify-content-center">
                                    Rp 72000
                                    </div>
                                    </div>
                                    <br>
                                    <div class="p-3">
                                        <div class="row ms-2">
                                            <div class="icon icon-shape icon-sm border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center col-md-1">
                                                <i style="font-size: 1rem;" class="fas fa-lg fa fa-arrow-right ps-2 pe-2 text-center text-dark " aria-hidden="true"></i>
                                                </div>
                                                <button class="col-md-9 btn dropdown-togle shadow-none border" data-bs-toggle="dropdown" id="typeCash" aria-expanded="true">Tipe Kas</button>
                                                <ul class="dropdown-menu border border-primary" style="width: 71%;">
                            <li><a class="dropdown-item text-center disabled " data-value="meteran" type="button"><strong>Tipe Kas</strong> </a></li>
                            <li><a class="dropdown-item" data-value="meteran" onclick="setDropdownValue(this, 'typeCash')" type="button">Tunai</a></li>
                            <li><a class="dropdown-item" data-value="kiloan" onclick="setDropdownValue(this, 'typeCash')" type="button">Non-Tunai</a></li>
                            </ul>
                            </div>

                            <div class="row ms-2">
                                <div class="icon icon-shape icon-sm border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center col-md-1">
                            <i style="font-size: 1rem;" class="fas fa-lg fa fa-arrow-right ps-2 pe-2 text-center text-dark " aria-hidden="true"></i>
                        </div>
                        <div class="col-md-9 px-0">
                            <div class="input-group">
                                <span class="input-group-text">Rp</span>
                                <input type="text" class="form-control" placeholder="Jumlah">
                                </div>
                                </div>

                                </div>
                                <div class="row ms-2 mt-3">
                        <div class="icon icon-shape icon-sm border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center col-md-1">
                            <i style="font-size: 1rem;" class="fas fa-lg fa fa-arrow-right ps-2 pe-2 text-center text-dark " aria-hidden="true"></i>
                            </div>
                            <div class="col-md-9 px-0">
                                <input type="text" class="form-control" placeholder="Keterangan">
                                </div>
                                </div>

                                </div>

                                <div class="row ms-2 mt-2">
                                    <div class="d-flex justify-content-center mt-3">
                                        <button type="button" class="btn btn-success">Tambahkan Kas</button>
                                        </div>
                                        </div>
                                        </div>
                                        </div>
                                        </div>
                                        </div>

                                        <!-- Modal -->
                                        <div class="modal fade " id="minusCash" data-bs-keyboard="false" tabindex="-1" aria-labelledby="minusCash" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <div class="modal-title">
                    <button type="button" data-bs-dismiss="modal" class="btn shadow-none pe-1 "><i class="fas fa-lg fa fa-arrow-left pt-3"></i></button>
                    <span class="ps-0">Pengurangan Kas</span>
                    </div>

            </div>
            <div class="modal-body">
                <div class="row m-3 ">
                    <div class="col-md-4 justify-content-start d-flex pe-0"><strong>Saldo Kas Outlet</strong></div>
                    <div class="col-md-7 px-0">
                        <hr>
                        </div>
                        </div>

                        <div class="row ms-3">
                            <div class="col-md-6 ms-3">
                                <div class="row">
                                    <div class="icon icon-shape icon-sm border-radius-md bg-white text-center me-2  d-flex justify-content-end">
                                        <i style="font-size: 1rem;" class="fas fa-lg fa fa-dollar text-center text-dark pt-1 pe-0" aria-hidden="true"></i>
                                        </div>
                                        <div class="col-md-8 ps-0">
                                            <span>Saldo Tunai</span>
                                            </div>
                        </div>
                        </div>
                        <div class="col-md-5 d-flex justify-content-center">
                            Rp 72000
                            </div>
                            </div>
                            <div class="row ms-3">
                                <div class="col-md-6 ms-3">
                                    <div class="row">
                            <div class="icon icon-shape icon-sm border-radius-md bg-white text-center me-2  d-flex justify-content-end">
                                <i style="font-size: 1rem;" class="fas fa-lg fa fa-credit-card text-center text-dark pt-1 pe-0" aria-hidden="true"></i>
                            </div>
                            <div class="col-md-8 ps-0">
                                <span>Saldo Non-Tunai</span>
                                </div>
                                </div>
                                </div>
                                <div class="col-md-5 d-flex justify-content-center">
                                    Rp 72000
                    </div>
                    </div>
                <br>
                <div class="p-3">
                    <div class="row ms-2">
                        <div class="icon icon-shape icon-sm border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center col-md-1">
                            <i style="font-size: 1rem;" class="fas fa-lg fa fa-arrow-right ps-2 pe-2 text-center text-dark " aria-hidden="true"></i>
                        </div>
                        <button class="col-md-9 btn dropdown-togle shadow-none border" data-bs-toggle="dropdown" id="typeCash" aria-expanded="true">Tipe Kas</button>
                        <ul class="dropdown-menu border border-primary" style="width: 71%;">
                            <li><a class="dropdown-item text-center disabled " data-value="meteran" type="button"><strong>Tipe Kas</strong> </a></li>
                            <li><a class="dropdown-item" data-value="meteran" onclick="setDropdownValue(this, 'typeCash')" type="button">Tunai</a></li>
                            <li><a class="dropdown-item" data-value="kiloan" onclick="setDropdownValue(this, 'typeCash')" type="button">Non-Tunai</a></li>
                            </ul>
                            </div>

                            <div class="row ms-2">
                                <div class="icon icon-shape icon-sm border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center col-md-1">
                                    <i style="font-size: 1rem;" class="fas fa-lg fa fa-arrow-right ps-2 pe-2 text-center text-dark " aria-hidden="true"></i>
                                    </div>
                                    <div class="col-md-9 px-0">
                            <div class="input-group">
                                <span class="input-group-text">Rp</span>
                                <input type="text" class="form-control" placeholder="Jumlah">
                            </div>
                        </div>

                        </div>
                        <div class="row ms-2 mt-3">
                            <div class="icon icon-shape icon-sm border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center col-md-1">
                            <i style="font-size: 1rem;" class="fas fa-lg fa fa-arrow-right ps-2 pe-2 text-center text-dark " aria-hidden="true"></i>
                        </div>
                        <div class="col-md-9 px-0">
                            <input type="text" class="form-control" placeholder="Keterangan">
                            </div>
                    </div>

                </div>

                <div class="row ms-2 mt-2">
                    <div class="d-flex justify-content-center mt-3">
                        <button type="button" class="btn btn-warning">Kurangi Kas</button>
                        </div>
                        </div>
                        </div>
                        </div>
                        </div>
                        </div>




                        <script>
    function setDropdownValue(element, idDropdown) {
        var selectedText = element.textContent;
        var selectedValue = element.getAttribute('data-value');
        document.getElementById(idDropdown).textContent = selectedText;
        document.getElementById('typeCash').value = selectedValue;
        }
        </script>

@endsection
