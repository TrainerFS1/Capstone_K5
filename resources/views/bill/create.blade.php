@extends('adminlte.layouts.app')

<<<<<<< HEAD
<<<<<<< HEAD
@section('title', 'Uangku | Tambah Tagihan')
=======
@section('title', 'Uangku | Form Tagihan')
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
@section('title', 'Uangku | Form Tagihan')
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Tambah Tagihan</h1>
                    </div>
                </div>
            </div>
        </div>

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
<<<<<<< HEAD
<<<<<<< HEAD
                                <form method="POST" action="{{ route('store.bill') }}">
                                    @csrf
                                    <div class="form-group">
                                        <label for="date">Tanggal:</label>
                                        <input type="date" class="form-control" id="date" name="date" required>
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
                                <form  method="POST" action="{{ route('store.bill') }}">
                                    @csrf
                                    <div class="form-group">
                                        <label for="date">Tanggal:</label>
                                        <input type="date" id="date" name="date" class="form-control" required>
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
                                    </div>
                                    <div class="form-group">
                                        <label for="category">Jenis Tagihan:</label>
                                        <input type="text" class="form-control" id="category" name="category" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="amount">Jumlah:</label>
<<<<<<< HEAD
<<<<<<< HEAD
                                        <input type="text" class="form-control" id="amount" name="amount" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="due_date">Tenggat Waktu:</label>
                                        <input type="date" class="form-control" id="due_date" name="due_date" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="status">Status:</label><br>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="status" id="status_lunas"
                                                value="1">
                                            <label class="form-check-label" for="status_lunas">Lunas</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="status"
                                                id="status_belum_lunas" value="0" checked>
                                            <label class="form-check-label" for="status_belum_lunas">Belum Lunas</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="description">(Opsional) Deskripsi:</label>
                                        <textarea class="form-control" id="description" name="description" rows="3"></textarea>
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
                                        <input type="number" id="amount" name="amount" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="due_date">Tenggat Waktu:</label>
                                        <input type="date" id="due_date" name="due_date" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="status">Status:</label>
                                        <select id="status" name="status" class="form-control" required>
                                            <option value="Lunas">Lunas</option>
                                            <option value="Belum Lunas">Belum Lunas</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="description">Deskripsi:</label>
                                        <textarea id="description" name="description" class="form-control" rows="3"></textarea>
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
                                    </div>
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                    <a href="{{ route('index.bill') }}" class="btn btn-danger">Kembali</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
