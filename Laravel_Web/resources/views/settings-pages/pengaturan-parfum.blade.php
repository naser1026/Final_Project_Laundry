@extends('layouts.user_type.auth')

@section('content')

<div>
    <div class="row">
        <div class="col-12">
            <div class="card mb-4 mx-4">
                <div class="card-header pb-0">
                    <div class="d-flex flex-row justify-content-between">
                        <div>
                            <h5 class="mb-0">Semua Parfum</h5>
                        </div>
                        <button type="button" class="btn bg-gradient-primary btn-sm mb-0" type="button" data-bs-toggle="modal" data-bs-target="#parfumAdd">+&nbsp; Tambah Parfum</button>
                    </div>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">No</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">Nama Parfum</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($parfums as $parfum)
                                <tr>
                                    <td class="text-center">{{ $loop->iteration }}</td>
                                    <td class="text-center">{{ $parfum['name'] }}</td>
                                    <td class="text-center">
                                        <button type="button" class="bg-transparent border-0 edit-button" data-bs-toggle="modal" data-bs-target="#parfumEdit" data-id="{{ $parfum['id'] }}" data-name="{{ $parfum['name'] }}">
                                            <i class="fas fa-user-edit text-success"></i>
                                        </button>
                                        <a href="deleteParfum/{{$parfum['id']}}" class="bg-transparent border-0 text-danger"><i class="fa fa-trash" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"></i></a>
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

<!-- Modal for Adding Parfum -->
<div class="modal fade" id="parfumAdd" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="parfumAddLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="parfumAddLabel">Tambah Parfum</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('addParfum') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="row ms-2">
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="name" placeholder="Nama Parfum" required>
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

<!-- Modal for Editing Parfum -->
<div class="modal fade" id="parfumEdit" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="parfumEditLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="parfumEditLabel">Edit Parfum</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('editParfum') }}" method="POST">
                @csrf
                <input type="hidden" name="id" id="parfumId">
                <div class="modal-body">
                    <div class="row ms-2">
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="name" id="parfumName" placeholder="Nama Parfum" required>
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

                    // Set data to the edit modal fields
                    document.querySelector('#parfumId').value = id;
                    document.querySelector('#parfumName').value = name;
                });
            });
        });

        function confirmDelete(id) {
            if (confirm('Apakah Anda yakin ingin menghapus data ini?')) {
                window.location.href = '/deleteParfum/' + id;
            }
        }
    </script>

@endsection
