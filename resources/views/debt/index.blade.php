@extends('adminlte.layouts.app')

@section('title', 'Uangku | Halaman Hutang')

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Daftar Hutang</h1>
                    </div>
<<<<<<< HEAD
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ '/' }}">Home</a></li>
                            <li class="breadcrumb-item active">Hutang</li>
                        </ol>
                    </div>
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
                </div>
            </div>
        </div>

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="text-right">
                                    <a href="{{ route('create.debt') }}" class="btn btn-success">Tambah Hutang</a>
                                </div>
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
<<<<<<< HEAD
                                            <th>No</th>
                                            <th>Jenis Hutang</th>
                                            <th>
                                                <a
                                                    href="{{ request()->fullUrlWithQuery(['field' => 'date', 'sort' => request()->query('sort') == 'asc' ? 'desc' : 'asc']) }}">
=======
                                            <th>No</th>                                            
                                            <th>Jenis Hutang</th> 
                                            <th>
                                                <a href="{{ request()->fullUrlWithQuery(['field' => 'date', 'sort' => request()->query('sort') == 'asc' ? 'desc' : 'asc']) }}">
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
                                                    Tanggal
                                                    @if (request()->query('field') == 'date')
                                                        @if (request()->query('sort') == 'asc')
                                                            <i class="fas fa-sort-up"></i>
                                                        @elseif(request()->query('sort') == 'desc')
                                                            <i class="fas fa-sort-down"></i>
                                                        @endif
                                                    @else
                                                        <i class="fas fa-sort"></i>
                                                    @endif
                                                </a>
<<<<<<< HEAD
                                            </th>
                                            <th>
                                                <a
                                                    href="{{ request()->fullUrlWithQuery(['field' => 'amount', 'sort' => request()->query('sort') == 'asc' ? 'desc' : 'asc']) }}">
=======
                                            </th>                                            
                                            <th>
                                                <a href="{{ request()->fullUrlWithQuery(['field' => 'amount', 'sort' => request()->query('sort') == 'asc' ? 'desc' : 'asc']) }}">
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
                                                    Jumlah
                                                    @if (request()->query('field') == 'amount')
                                                        @if (request()->query('sort') == 'asc')
                                                            <i class="fas fa-sort-up"></i>
                                                        @elseif(request()->query('sort') == 'desc')
                                                            <i class="fas fa-sort-down"></i>
                                                        @endif
                                                    @else
                                                        <i class="fas fa-sort"></i>
                                                    @endif
                                                </a>
<<<<<<< HEAD
                                            </th>
                                            <th>
                                                <a
                                                    href="{{ request()->fullUrlWithQuery(['field' => 'due_date', 'sort' => request()->query('sort') == 'asc' ? 'desc' : 'asc']) }}">
=======
                                            </th>                                                                                    
                                            <th>
                                                <a href="{{ request()->fullUrlWithQuery(['field' => 'due_date', 'sort' => request()->query('sort') == 'asc' ? 'desc' : 'asc']) }}">
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
                                                    Tenggat Waktu
                                                    @if (request()->query('field') == 'due_date')
                                                        @if (request()->query('sort') == 'asc')
                                                            <i class="fas fa-sort-up"></i>
                                                        @elseif(request()->query('sort') == 'desc')
                                                            <i class="fas fa-sort-down"></i>
                                                        @endif
                                                    @else
                                                        <i class="fas fa-sort"></i>
                                                    @endif
                                                </a>
                                            </th>
                                            <th>Deskripsi</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($debts as $debt)
                                            <tr>
<<<<<<< HEAD
                                                <td>{{ $loop->iteration + ($debts->currentPage() - 1) * $debts->perPage() }}
                                                </td>
                                                <td>{{ $debt->debt_type }}</td>
                                                <td>{{ date('d-m-Y', strtotime($debt->date)) }}</td>
                                                <td>Rp {{ number_format($debt->amount, 0, ',', '.') }}</td>
                                                <td>{{ date('d-m-Y', strtotime($debt->due_date)) }}</td>
                                                <td>{{ $debt->description }}</td>
                                                <td>
                                                    <a href="{{ route('edit.debt', $debt->id) }}"
                                                        class="btn btn-warning btn-sm">Edit</a>
                                                    <button type="button" class="btn btn-danger btn-sm"
                                                        onclick="confirmDelete({{ $debt->id }})">Delete</button>
                                                    <form id="delete-form-{{ $debt->id }}"
                                                        action="{{ route('delete.debt', $debt->id) }}" method="POST"
                                                        style="display: none;">
=======
                                                <td>{{ $loop->iteration + ($debts->currentPage() - 1) * $debts->perPage() }}</td>
                                                <td>{{ $debt->debt_type }}</td>
                                                <td>{{ date('d-m-Y', strtotime($debt->date)) }}</td>                                                
                                                <td>Rp {{ number_format($debt->amount, 0, ',', '.') }}</td>
                                                <td>{{ date('d-m-Y', strtotime($debt->due_date)) }}</td>       
                                                <td>{{ $debt->description }}</td>
                                                <td>
                                                    <a href="{{ route('edit.debt', $debt->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                                    <button type="button" class="btn btn-danger btn-sm" onclick="confirmDelete({{ $debt->id }})">Delete</button>
                                                    <form id="delete-form-{{ $debt->id }}" action="{{ route('delete.debt', $debt->id) }}" method="POST" style="display: none;">
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
                                                        @csrf
                                                        @method('DELETE')
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <p>Total Hutang: Rp {{ number_format($totalDebt, 0, ',', '.') }}</p>
                                <div class="d-flex justify-content-center">
                                    {{ $debts->links('pagination::bootstrap-4') }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Chart Section -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Diagram Hutang per Bulan</h3>
                            </div>
                            <div class="card-body">
                                <canvas id="debtChart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </section>
    </div>
@endsection

@push('scripts')
    <script>
        function confirmDelete(id) {
            Swal.fire({
                title: 'Delete Data!',
                text: 'Anda yakin ingin menghapus?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Ya, hapus!',
                cancelButtonText: 'Tidak, batalkan',
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('delete-form-' + id).submit();
                }
            });
        }

        @if (session('success'))
            Swal.fire({
                title: 'Success!',
                text: '{{ session('success') }}',
                icon: 'success',
                confirmButtonText: 'OK'
            });
        @endif

        @if (session('error'))
            Swal.fire({
                title: 'Error!',
                text: '{{ session('error') }}',
                icon: 'error',
                confirmButtonText: 'OK'
            });
        @endif
    </script>

    <!-- Chart.js Script -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var ctx = document.getElementById('debtChart').getContext('2d');
            var debtChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: {!! json_encode($months) !!},
                    datasets: [{
                        label: 'Hutang',
                        data: {!! json_encode($debtData->values()) !!},
                        borderColor: 'rgba(255, 111, 0, 1)',
                        backgroundColor: 'rgba(255, 111, 0, 0.2)',
                        fill: true
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        });
    </script>
@endpush
