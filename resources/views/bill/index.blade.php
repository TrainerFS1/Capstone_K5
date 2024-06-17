@extends('adminlte.layouts.app')

@section('title', 'Uangku | Halaman Tagihan')

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Daftar Tagihan</h1>
                    </div>
<<<<<<< HEAD
<<<<<<< HEAD
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ '/' }}">Home</a></li>
                            <li class="breadcrumb-item active">Tagihan</li>
                        </ol>
                    </div><!-- /.col -->
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
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
                                    <a href="{{ route('create.bill') }}" class="btn btn-success">Tambah Tagihan</a>
                                </div>
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
<<<<<<< HEAD
<<<<<<< HEAD
                                            <th>No</th>
                                            <th>
                                                <a
                                                    href="{{ request()->fullUrlWithQuery(['field' => 'date', 'sort' => request()->query('sort') == 'asc' ? 'desc' : 'asc']) }}">
=======
                                            <th>No</th>                                            
                                            <th>
                                                <a href="{{ request()->fullUrlWithQuery(['field' => 'date', 'sort' => request()->query('sort') == 'asc' ? 'desc' : 'asc']) }}">
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
                                            <th>No</th>                                            
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
                                            </th>
                                            <th>Kategori</th>
                                            <th>
<<<<<<< HEAD
<<<<<<< HEAD
                                                <a
                                                    href="{{ request()->fullUrlWithQuery(['field' => 'amount', 'sort' => request()->query('sort') == 'asc' ? 'desc' : 'asc']) }}">
=======
                                                <a href="{{ request()->fullUrlWithQuery(['field' => 'amount', 'sort' => request()->query('sort') == 'asc' ? 'desc' : 'asc']) }}">
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
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
                                            <th>Status</th>
                                            <th>Deskripsi</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($bills as $bill)
                                            <tr>
<<<<<<< HEAD
<<<<<<< HEAD
                                                <td>{{ $loop->iteration + ($bills->currentPage() - 1) * $bills->perPage() }}
                                                </td>
=======
                                                <td>{{ $loop->iteration + ($bills->currentPage() - 1) * $bills->perPage() }}</td>
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
                                                <td>{{ $loop->iteration + ($bills->currentPage() - 1) * $bills->perPage() }}</td>
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
                                                <td>{{ date('d-m-Y', strtotime($bill->date)) }}</td>
                                                <td>{{ $bill->category }}</td>
                                                <td>Rp {{ number_format($bill->amount, 0, ',', '.') }}</td>
                                                <td>{{ date('d-m-Y', strtotime($bill->due_date)) }}</td>
                                                <td>{{ $bill->status }}</td>
                                                <td>{{ $bill->description }}</td>
                                                <td>
<<<<<<< HEAD
<<<<<<< HEAD
                                                    <a href="{{ route('edit.bill', $bill->id) }}"
                                                        class="btn btn-warning btn-sm">Edit</a>
                                                    @if ($bill->status == 'Belum Lunas')
                                                        <form action="{{ route('bills.markAsPaid', $bill->id) }}"
                                                            method="POST" style="display:inline-block;">
                                                            @csrf
                                                            @method('PUT')
                                                            <button type="submit" class="btn btn-success">Tandai
                                                                Lunas</button>
                                                        </form>
                                                    @else
                                                        <!-- Hapus notifikasi terkait jika status lunas -->
                                                        <script>
                                                            $(document).ready(function() {
                                                                $('#notificationList').find(`a[href="/bill/{{ $bill->id }}"]`).remove();
                                                            });
                                                        </script>
                                                    @endif
                                                    <button type="button" class="btn btn-danger btn-sm"
                                                        onclick="confirmDelete({{ $bill->id }})">Delete</button>
                                                    <form id="delete-form-{{ $bill->id }}"
                                                        action="{{ route('delete.bill', $bill->id) }}" method="POST"
                                                        style="display: none;">
=======
                                                    <a href="{{ route('edit.bill', $bill->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                                    <button type="button" class="btn btn-danger btn-sm" onclick="confirmDelete({{ $bill->id }})">Delete</button>
                                                    <form id="delete-form-{{ $bill->id }}" action="{{ route('delete.bill', $bill->id) }}" method="POST" style="display: none;">
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
                                                    <a href="{{ route('edit.bill', $bill->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                                    <button type="button" class="btn btn-danger btn-sm" onclick="confirmDelete({{ $bill->id }})">Delete</button>
                                                    <form id="delete-form-{{ $bill->id }}" action="{{ route('delete.bill', $bill->id) }}" method="POST" style="display: none;">
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
                                <p>Total Tagihan: Rp {{ number_format($totalBill, 0, ',', '.') }}</p>
                                <div class="d-flex justify-content-center">
                                    {{ $bills->links('pagination::bootstrap-4') }}
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
                                <h3 class="card-title">Diagram Tagihan per Bulan</h3>
                            </div>
                            <div class="card-body">
                                <canvas id="billChart"></canvas>
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

<<<<<<< HEAD
<<<<<<< HEAD
        function markAsPaid(id) {
            // Kirim permintaan Ajax untuk menandai tagihan sebagai lunas
            $.ajax({
                url: `/bills/${id}/mark-as-paid`, // Sesuaikan dengan rute yang telah Anda definisikan
                method: 'PUT',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    // Tampilkan pesan sukses
                    Swal.fire({
                        title: 'Success!',
                        text: response.message,
                        icon: 'success',
                        confirmButtonText: 'OK'
                    });

                    // Refresh halaman setelah 2 detik
                    setTimeout(function() {
                        location.reload();
                    }, 2000);
                },
                error: function(xhr, status, error) {
                    console.error('Error marking bill as paid:', error);
                    Swal.fire({
                        title: 'Error!',
                        text: 'Gagal menandai tagihan sebagai lunas',
                        icon: 'error',
                        confirmButtonText: 'OK'
                    });
                }
            });
        }


=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
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
            var ctx = document.getElementById('billChart').getContext('2d');
            var billChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: {!! json_encode($months) !!},
                    datasets: [{
                        label: 'Tagihan',
                        data: {!! json_encode($billData->values()) !!},
                        borderColor: 'rgba(255, 1, 0, 1)',
                        backgroundColor: 'rgba(255, 1, 0, 0.2)',
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
