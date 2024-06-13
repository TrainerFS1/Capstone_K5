@extends('adminlte.layouts.app')

@section('title', 'Uangku | Edit Tagihan')

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Edit Tagihan</h1>
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
                                <form method="POST" action="{{ route('update.bill', $bill->id) }}">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group">
                                        <label for="date">Tanggal:</label>
                                        <input type="date" class="form-control" id="date" name="date" value="{{ $bill->date }}" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="category">Jenis Tagihan:</label>
                                        <input type="text" class="form-control" id="category" name="category" value="{{ $bill->category }}" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="amount">Jumlah:</label>
                                        <input type="text" class="form-control" id="amount" name="amount" value="{{ $bill->amount }}" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="due_date">Tenggat Waktu:</label>
                                        <input type="date" class="form-control" id="due_date" name="due_date" value="{{ $bill->due_date }}" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="status">Status:</label>
                                        <select id="status" name="status" class="form-control" required>
                                            <option value="Lunas" {{ $bill->status == 'Lunas' ? 'selected' : '' }}>Lunas</option>
                                            <option value="Belum Lunas" {{ $bill->status == 'Belum Lunas' ? 'selected' : '' }}>Belum Lunas</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="description">Deskripsi:</label>
                                        <textarea class="form-control" id="description" name="description" rows="3">{{ $bill->description }}</textarea>
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
