@extends('layouts.user_type.auth')

@section('content')

<div>

    <div class="row">
        <div class="col-12">
            <div class="card mb-4 mx-4">
                <div class="card-header pb-0">
                    <div class="d-flex flex-row justify-content-between">
                        <div>
                            <h5 class="mb-0">Semua Kasir</h5>
                        </div>
                        <button type="button" class="btn bg-gradient-primary btn-sm mb-0" data-bs-toggle="modal" data-bs-target="#cashierAdd">+&nbsp; Tambah Kasir</button>
                    </div>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">
                                        No
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">
                                        ID
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">
                                        Nama
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">
                                        Tanggal dibuat
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">
                                        Status
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">
                                        Aksi
                                    </th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach($cashiers as $cashier)
                                <tr>
                                    <td class="text-center">
                                        {{ $loop->iteration }}
                                    </td>
                                    <td class="text-center">
                                        {{ $cashier['id_cashier'] }}
                                    </td>
                                    <td class="text-center">
                                        {{ $cashier['name'] }}
                                    </td>
                                    <td class="text-center">
                                        {{ \Carbon\Carbon::parse($cashier['created_at'])->format('Y-m-d H:i:s') }}
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        <span class="badge badge-sm {{ $cashier['status'] == 'active' ? 'bg-gradient-success' : 'bg-gradient-secondary' }}">{{ ucfirst($cashier['status']) }}</span>
                                    </td>
                                    <td class="text-center">
                                        <button type="button" class="bg-transparent border-0 edit-button" data-bs-toggle="modal" data-bs-target="#cashierEdit" data-id="{{ $cashier['id'] }}" data-name="{{ $cashier['name'] }}">
                                            <i class="fas fa-user-edit text-success"></i>
                                        </button>
                                        <a href="/deleteKasir/{{$cashier['id']}}" class="bg-transparent border-0 text-danger"><i class="fa fa-trash" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal for Adding Kasir -->
<div class="modal fade" id="cashierAdd" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="cashierAddLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="cashierAddLabel">Tambah Kasir</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="/addKasir" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="row ms-2">
                        <div class="icon icon-shape icon-sm border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center col-md-1">
                            <i style="font-size: 1rem;" class="fas fa-lg fa fa-user ps-2 pe-2 text-center text-dark" aria-hidden="true"></i>
                        </div>
                        <div class="col-md-10"><input type="text" name="name" class="form-control" placeholder="Nama Kasir"></div>
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

<!-- Modal for Editing Kasir -->
<div class="modal fade" id="cashierEdit" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="cashierEditLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="cashierEditLabel">Edit Kasir</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="editCashierForm" action="/editKasir" method="POST">
                @csrf
                <input type="hidden" name="id" id="cashierId">
                <div class="modal-body">
                    <div class="row ms-2">
                        <div class="icon icon-shape icon-sm border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center col-md-1">
                            <i style="font-size: 1rem;" class="fas fa-lg fa fa-user ps-2 pe-2 text-center text-dark" aria-hidden="true"></i>
                        </div>
                        <div class="col-md-10"><input type="text" id="cashierName" name="name" class="form-control" placeholder="Nama Kasir"></div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var editButtons = document.querySelectorAll('.edit-button');

        editButtons.forEach(function(button) {
            button.addEventListener('click', function() {
                var id = this.getAttribute('data-id');
                var name = this.getAttribute('data-name');

                // Set data to the edit modal fields
                document.querySelector('#cashierId').value = id;
                document.querySelector('#cashierName').value = name;
            });
        });
    });

    function confirmDelete(id) {
        if (confirm('Apakah Anda yakin ingin menghapus data ini?')) {
            window.location.href = '/deleteKasir/' + id;
        }
    }
</script>

@endsection
