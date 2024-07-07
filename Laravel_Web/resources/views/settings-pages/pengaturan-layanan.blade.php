@extends('layouts.user_type.auth')

@section('content')

<div>

    <div class="row">
        <div class="col-12">
            <div class="card mb-4 mx-4">
                <div class="card-header pb-0">
                    <div class="d-flex flex-row justify-content-between">
                        <div>
                            <h5 class="mb-0">Semua Layanan</h5>
                        </div>
                        <button type="button" class="btn bg-gradient-primary btn-sm mb-0" type="button" data-bs-toggle="modal" data-bs-target="#serviceAdd">+&nbsp; Tambah Layanan</button>
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
                                        Tipe Layanan
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">
                                        Durasi Layanan
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">
                                        Nama Layanan
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">
                                        Harga
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($packages as $index => $item)
                                <tr>
                                    <td class="text-center">
                                        {{ $index + 1 }}
                                    </td>
                                    <td class="text-center">
                                        {{ $item['package_type'] }}
                                    </td>
                                    <td class="text-center">
                                        {{ $item['id_duration'] == 1 ? '6 Jam' : ($item['id_duration'] == 2 ? '12 Jam' : '24 Jam') }}
                                    </td>
                                    <td class="text-center">
                                        {{ $item['name'] }}
                                    </td>
                                    <td class="text-center">
                                        Rp {{ number_format($item['price'], 2) }}
                                    </td>
                                    <td class="text-center">

                                        <button type="button" class="bg-transparent border-0 edit-button" data-bs-toggle="modal" data-bs-target="#editModal{{ $index }}" data-id="{{$item['id']}}">
                                            <i class="fas fa-user-edit text-success"></i>
                                        </button>
                                        <a href="deleteLayanan/{{$item['id']}}" class="bg-transparent border-0 text-danger"><i class="fa fa-trash" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"></i></a>

                                    </td>
                                </tr>

                                <!-- Modal Edit untuk setiap item -->

<!-- Modal Edit untuk setiap item -->
<div class="modal fade" id="editModal{{ $index }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="editModalLabel{{ $index }}" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="/editLayanan/{{ $item['id'] }}" method="POST">
                @csrf
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="editModalLabel{{ $index }}">Edit Layanan</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row ms-2">
                        <div class="icon icon-shape icon-sm border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center col-md-1">
                            <i style="font-size: 1rem;" class="fas fa-lg fa fa-arrow-right ps-2 pe-2 text-center text-dark " aria-hidden="true"></i>
                        </div>
                        <div class="col-md-10 px-0">
                            <select class="form-select shadow-none border" name="package_type">
                                <option selected disabled>Pilih Tipe Layanan</option>
                                <option value="Meteran" {{ $item['package_type'] == 'Meteran' ? 'selected' : '' }}>Meteran</option>
                                <option value="Kiloan" {{ $item['package_type'] == 'Kiloan' ? 'selected' : '' }}>Kiloan</option>
                                <option value="Satuan" {{ $item['package_type'] == 'Satuan' ? 'selected' : '' }}>Satuan</option>
                            </select>
                        </div>
                    </div>

                    <div class="row ms-2 mt-3">
                        <div class="icon icon-shape icon-sm border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center col-md-1">
                            <i style="font-size: 1rem;" class="fas fa-lg fa fa-arrow-right ps-2 pe-2 text-center text-dark " aria-hidden="true"></i>
                        </div>
                        <div class="col-md-10 px-0">
                            <select class="form-select shadow-none border" name="id_duration">
                                <option selected disabled>Pilih Durasi Layanan</option>
                                <option value="1" {{ $item['id_duration'] == 1 ? 'selected' : '' }}>6 Jam</option>
                                <option value="2" {{ $item['id_duration'] == 2 ? 'selected' : '' }}>12 Jam</option>
                                <option value="3" {{ $item['id_duration'] == 3 ? 'selected' : '' }}>24 Jam</option>
                            </select>
                        </div>
                    </div>

                    <div class="row ms-2 mt-3">
                        <div class="icon icon-shape icon-sm border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center col-md-1">
                            <i style="font-size: 1rem;" class="fas fa-lg fa fa-arrow-right ps-2 pe-2 text-center text-dark " aria-hidden="true"></i>
                        </div>
                        <div class="col-md-10 px-0">
                            <input type="text" class="form-control text-center" name="name" placeholder="Nama Layanan" value="{{ $item['name'] }}">
                        </div>
                    </div>
                    <div class="row ms-2 mt-3">
                        <div class="icon icon-shape icon-sm border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center col-md-1">
                            <i style="font-size: 1rem;" class="fas fa-lg fa fa-arrow-right ps-2 pe-2 text-center text-dark " aria-hidden="true"></i>
                        </div>
                        <div class="col-md-10 px-0">
                            <div class="input-group">
                                <span class="input-group-text">Rp</span>
                                <input type="text" class="form-control text-center" name="price" placeholder="Harga" aria-label="Dollar amount (with dot and two decimal places)" value="{{ $item['price'] }}">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- End Modal Edit -->
@endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Tambah Layanan -->
<div class="modal fade" id="serviceAdd" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="serviceAddLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="/addLayanan" method="POST">
                @csrf
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="serviceAddLabel">Tambah Layanan</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row ms-2">
                        <div class="icon icon-shape icon-sm border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center col-md-1">
                            <i style="font-size: 1rem;" class="fas fa-lg fa fa-arrow-right ps-2 pe-2 text-center text-dark " aria-hidden="true"></i>
                        </div>
                        <div class="col-md-10 px-0">
                            <select class=" form-select shadow-none border" name="package_type">
                                <option selected disabled>Pilih Tipe Layanan</option>
                                <option value="Meteran">Meteran</option>
                                <option value="Kiloan">Kiloan</option>
                                <option value="Satuan">Satuan</option>
                            </select>
                        </div>
                    </div>

                    <div class="row ms-2 mt-3">
                        <div class="icon icon-shape icon-sm border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center col-md-1">
                            <i style="font-size: 1rem;" class="fas fa-lg fa fa-arrow-right ps-2 pe-2 text-center text-dark " aria-hidden="true"></i>
                        </div>
                        <div class="col-md-10 px-0">
                            <select class="form-select shadow-none border" name="id_duration">
                                <option selected disabled>Pilih Durasi Layanan</option>
                                <option value="1">6 Jam</option>
                                <option value="2">12 Jam</option>
                                <option value="3">24 Jam</option>
                            </select>
                        </div>
                    </div>

                    <div class="row ms-2 mt-3">
                        <div class="icon icon-shape icon-sm border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center col-md-1">
                            <i style="font-size: 1rem;" class="fas fa-lg fa fa-arrow-right ps-2 pe-2 text-center text-dark " aria-hidden="true"></i>
                        </div>
                        <div class="col-md-10 px-0">
                            <input type="text" class="form-control text-center" name="name" placeholder="Nama Layanan">
                        </div>
                    </div>
                    <div class="row ms-2 mt-3">
                        <div class="icon icon-shape icon-sm border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center col-md-1">
                            <i style="font-size: 1rem;" class="fas fa-lg fa fa-arrow-right ps-2 pe-2 text-center text-dark " aria-hidden="true"></i>
                        </div>
                        <div class="col-md-10 px-0">
                            <div class="input-group">
                                <span class="input-group-text">Rp</span>
                                <input type="text" class="form-control text-center" name="price" placeholder="Harga" aria-label="Dollar amount (with dot and two decimal places)">
                            </div>
                        </div>
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
<!-- End Modal Tambah Layanan -->

@endsection
