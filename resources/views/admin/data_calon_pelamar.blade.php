@extends('layouts.app')
@section('content')
<main class="main-content" style="margin-top: 1rem;">
    <section>
        <div class="page-header" style="min-height: 100vh">
            <div class="container">
                <div class="row gap-4">
                    <div class="col-12 bg-gradient-success shadow py-2" style="border-radius: 25px;">
                        <h3 class="text-white">Data Calon Pelamar</h3>
                    </div>
                    <div class="col-12">
                        <div class="card" style="box-shadow: rgba(17, 17, 26, 0.05) 0px 4px 16px, rgba(17, 17, 26, 0.05) 0px 8px 32px;">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 my-3" style="width:100%">
                                        <div class="table-responsive">
                                            <table class="table table-striped " id="table-data-calon-pelamar">
                                                <thead class="table-orange">
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Nama Pelamar</th>
                                                        <th>Umur</th>
                                                        <th>Posisi</th>
                                                        <th>Tanggal Melamar</th>
                                                        <th>Status</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($data as $item)
                                                    <tr>
                                                        <td>{{ $loop->iteration }}</td>
                                                        <td>{{ $item->fullname }}</td>
                                                        <td>{{ \Carbon\Carbon::parse($item->birthdate)->age }} th</td>
                                                        <td>{{ $item->position->name }}</td>
                                                        <td>{{ \Carbon\Carbon::parse($item->creaeted_at)->format('d F Y') }}</td>
                                                        <td>{{ $item->status }}</td>
                                                        <td>#</td>
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
                </div>
            </div>
        </div>
    </section>
    @endsection

    @push('script')
    <script>
        $(document).ready(function () {
            $('#table-data-calon-pelamar').DataTable({
                responsive: true,
                lengthMenu: [
                    [5, 10, 25, -1],
                    [5, 10, 25, 'All'],
                ],
                order: [
                    [0, 'asc']
                ],
            });
        });

    </script>
    @endpush
