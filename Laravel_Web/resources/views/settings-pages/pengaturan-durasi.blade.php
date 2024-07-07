@extends('layouts.user_type.auth')

@section('content')

<div>

    <div class="row">
        <div class="col-12">
            <div class="card mb-4 mx-4">
                <div class="card-header pb-0">
                    <div class="d-flex flex-row justify-content-between">
                        <div>
                            <h5 class="mb-0">Semua Durasi</h5>
                        </div>
                        <button type="button" class="btn bg-gradient-primary btn-sm mb-0" type="button" data-bs-toggle="modal" data-bs-target="#durationAdd">+&nbsp; Tambah Durasi</button>
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
                                        Nama Durasi
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">
                                        Lama Durasi (jam)
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($durations as $duration )
                                <tr>
                                    <td class="text-center">
                                        {{$loop->iteration}}
                                    </td>
                                    <td class="text-center">
                                        {{$duration['name']}}
                                    </td>
                                    <td class="text-center">
                                        {{$duration['value']}}
                                    </td>
                                    <td class="text-center">
                                        <button type="button" class="bg-transparent border-0 edit-button" data-bs-toggle="modal" data-bs-target="#durationEdit" data-id="{{$duration['id']}}" data-name="{{$duration['name']}}" data-value="{{$duration['value']}}">
                                            <i class="fas fa-user-edit text-success"></i>
                                        </button>
                                        <a href="deleteDuration/{{$duration['id']}}" class="bg-transparent border-0 text-danger"><i class="fa fa-trash" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"></i></a>
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

<!-- Modal -->
<div class="modal fade" id="durationAdd" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="durationAddLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="durationAddLabel">Tambah Durasi</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="addDuration" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="modal-body">
                    <div class="row ms-2">
                        <div class="icon icon-shape icon-sm border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center col-md-1">
                            <i style="font-size: 1rem;" class="fas fa-lg fa fa-arrow-right ps-2 pe-2 text-center text-dark " aria-hidden="true"></i>
                        </div>
                        <div class="col-md-10"><input type="text" class="form-control" placeholder="Nama Durasi" name="name"></div>
                    </div>
                    <div class="row ms-2 mt-3">
                        <div class="icon icon-shape icon-sm border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center col-md-1">
                            <i style="font-size: 1rem;" class="fas fa-lg fa fa-arrow-right ps-2 pe-2 text-center text-dark " aria-hidden="true"></i>
                        </div>
                        <div class="col-md-10">
                            <div class="input-group px-0">
                                <input type="text" class="form-control" name="value" placeholder="Lama Durasi"">
                            <span class=" input-group-text">Jam</span>
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

<!-- Modal -->
<div class="modal fade" id="durationEdit" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="durationAddLaEdit" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="durationAddLaEdit">Edit Durasi</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="editDuration" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" id="durationId">
                <div class="modal-body">
                    <div class="row ms-2">
                        <div class="icon icon-shape icon-sm border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center col-md-1">
                            <i style="font-size: 1rem;" class="fas fa-lg fa fa-arrow-right ps-2 pe-2 text-center text-dark " aria-hidden="true"></i>
                        </div>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="name" placeholder="Nama Durasi">
                        </div>
                    </div>
                    <div class="row ms-2 mt-3">
                        <div class="icon icon-shape icon-sm border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center col-md-1">
                            <i style="font-size: 1rem;" class="fas fa-lg fa fa-arrow-right ps-2 pe-2 text-center text-dark " aria-hidden="true"></i>
                        </div>
                        <div class="col-md-10">
                            <div class="input-group px-0">
                                <input type="text" class="form-control" name="value" placeholder="Lama Durasi">
                                <span class="input-group-text">Jam</span>
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
                var name = this.getAttribute('data-name');
                var value = this.getAttribute('data-value');

                document.querySelector('#durationEdit input[name="name"]').value = name;
                document.querySelector('#durationEdit input[name="value"]').value = value;
                document.querySelector('#durationEdit input[name="id"]').value = id;
            });
        });
    });
</script>



@endsection
