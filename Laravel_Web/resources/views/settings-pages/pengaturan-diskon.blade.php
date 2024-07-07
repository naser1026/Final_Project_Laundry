@extends('layouts.user_type.auth')

@section('content')

<div>

    <div class="row">
        <div class="col-12">
            <div class="card mb-4 mx-4">
                <div class="card-header pb-0">
                    <div class="d-flex flex-row justify-content-between">
                        <div>
                            <h5 class="mb-0">Semua Diskon</h5>
                        </div>
                        <button type="button" class="btn bg-gradient-primary btn-sm mb-0" type="button" data-bs-toggle="modal" data-bs-target="#discountAdd">+ Tambah Diskon</button>
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
                                        Tipe Diskon
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">
                                        Jumlah Diskon (Rp/%)
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">
                                        Aksi
                                    </th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($discounts as $discount )
                                <tr>
                                    <td class="text-center">
                                        {{$loop->iteration}}
                                    </td>
                                    <td class="text-center">
                                        {{$discount['discount_type'] == 'fixed' ? 'Nominal' : 'Persentase'}}
                                    </td>
                                    <td class="text-center">
                                        {{$discount['value']}}
                                    </td>
                                    <td class="text-center">
                                        <button type="button" class="bg-transparent border-0 edit-button" data-bs-toggle="modal" data-bs-target="#discountEdit" data-id="{{$discount['id']}}" data-type="{{$discount['discount_type']}}" data-value="{{$discount['value']}}">
                                            <i class="fas fa-user-edit text-success"></i>
                                        </button>
                                        <a href="deleteDiscount/{{$discount['id']}}" class="bg-transparent border-0 text-danger"><i class="fa fa-trash" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"></i></a>
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

<!-- Modal Add -->
<div class="modal fade" id="discountAdd" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="discountAddLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="discountAddLabel">Tambah Diskon</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="/addDiscount" method="post">
                @csrf
                <div class="modal-body">
                    <div class="row ms-2">
                        <div class="icon icon-shape icon-sm border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center col-md-1">
                            <i style="font-size: 1rem;" class="fas fa-lg fa fa-arrow-right ps-2 pe-2 text-center text-dark " aria-hidden="true"></i>
                        </div>
                        <div class="col-md-10 px-0">
                            <select class="form-select" id="discountType" name="discount_type">
                                <option value="fixed">Nominal</option>
                                <option value="percentage">Persentase</option>
                            </select>
                        </div>
                    </div>

                    <div class="row ms-2 mt-3">
                        <div class="icon icon-shape icon-sm border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center col-md-1">
                            <i style="font-size: 1rem;" class="fas fa-lg fa fa-arrow-right ps-2 pe-2 text-center text-dark " aria-hidden="true"></i>
                        </div>
                        <div class="col-md-10 px-0">
                            <div class="input-group">
                                <input type="text" class="form-control text-center" name="value" placeholder="Jumlah Diskon" aria-label="Dollar value (with dot and two decimal places)">
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

<!-- Modal Edit -->
<div class="modal fade" id="discountEdit" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="discountEditLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="discountEditLabel">Edit Diskon</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="/editDiscount" method="POST">
                @csrf
                <input type="hidden" name="id" id="editDiscountId">
                <div class="modal-body">
                    <div class="row ms-2">
                        <div class="icon icon-shape icon-sm border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center col-md-1">
                            <i style="font-size: 1rem;" class="fas fa-lg fa fa-arrow-right ps-2 pe-2 text-center text-dark " aria-hidden="true"></i>
                        </div>
                        <div class="col-md-10 px-0">
                            <select class="form-select" id="editDiscountType" name="discount_type">
                                <option value="fixed">Nominal</option>
                                <option value="percentage">Persentase</option>
                            </select>
                        </div>
                    </div>

                    <div class="row ms-2 mt-3">
                        <div class="icon icon-shape icon-sm border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center col-md-1">
                            <i style="font-size: 1rem;" class="fas fa-lg fa fa-arrow-right ps-2 pe-2 text-center text-dark " aria-hidden="true"></i>
                        </div>
                        <div class="col-md-10 px-0">
                            <div class="input-group">
                                <input type="text" class="form-control text-center" name="value" placeholder="Jumlah Diskon" aria-label="Dollar value (with dot and two decimal places)">
                            </div>
                        </div>
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
                var type = this.getAttribute('data-type');
                var value = this.getAttribute('data-value');

                // Set values in the edit modal form
                document.querySelector('#editDiscountId').value = id;
                document.querySelector('#editDiscountType').value = type;
                document.querySelector('#discountEdit input[name="value"]').value = value;
            });
        });
    });
</script>

@endsection
