@extends('adminlte.layouts.app')

@section('title', 'Uangku | Form Tagihan')

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
                                <form  method="POST" action="{{ route('store.bill') }}">
                                    @csrf
                                    <div class="form-group">
                                        <label for="date">Tanggal:</label>
                                        <input type="date" id="date" name="date" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="category">Jenis Tagihan:</label>
                                        <input type="text" class="form-control" id="category" name="category" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="amount">Jumlah:</label>
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
