@extends('layout')
@section('content')
<div class="row">
    <div class="col-xl-12">
        <h6 class="mb-0 text-uppercase">Product</h6>
        <hr>
        <a href="#" class="btn btn-primary waves-effect waves-light mb-4">Tambah Data</a>

        <div class="card">
            <div class="card-body">
                <table class="table mb-0">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Deskripsi</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>
                            <a href="" class="btn btn-warning waves-effect waves-light">Edit</a>
                            <a href="" action="" class="btn btn-danger" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?');">delete</a>
                        </td>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection