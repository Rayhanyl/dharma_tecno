@extends('layouts.app')
@section('content')
    <main class="main-content" style="margin-top: 1rem;">
        <section>
            <div class="page-header" style="min-height:100vh;">
                <div class="container">
                    <div class="row gap-4">
                        <div class="col-12 bg-gradient-success shadow py-2" style="border-radius: 25px;">
                            <h3 class="text-white">History Pelamar</h3>
                        </div>
                        <div class="col-12">
                            <div class="card"
                                style="box-shadow: rgba(17, 17, 26, 0.05) 0px 4px 16px, rgba(17, 17, 26, 0.05) 0px 8px 32px;">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12 my-3" style="width:100%">
                                            <div class="table-responsive">
                                                <table class="table table-striped " id="table-data-histroy-lamaran">
                                                    <thead class="table-orange">
                                                        <tr>
                                                            <th class="text-center">No</th>
                                                            <th class="text-center">Nama</th>
                                                            <th class="text-center">Umur</th>
                                                            <th class="text-center">Posisi</th>
                                                            <th class="text-center">Tanggal Melamar</th>
                                                            <th class="text-center">Status</th>
                                                            <th class="text-center">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($data as $item)
                                                            <tr>
                                                                <td class="text-center text-capitalize">
                                                                    {{ $loop->iteration }}</td>
                                                                <td class="text-center text-capitalize">
                                                                    {{ $item->fullname }}</td>
                                                                <td class="text-center text-capitalize">
                                                                    {{ \Carbon\Carbon::parse($item->birthdate)->age }} th
                                                                </td>
                                                                <td class="text-center text-capitalize">
                                                                    {{ $item->position->name }}</td>
                                                                <td class="text-center text-capitalize">
                                                                    {{ \Carbon\Carbon::parse($item->creaeted_at)->format('d F Y') }}
                                                                </td>
                                                                <td class="text-center text-capitalize">{{ $item->status }}
                                                                </td>
                                                                <td class="text-center text-capitalize">
                                                                    <div class="btn-group gap-2" role="group"
                                                                        aria-label="Basic example">
                                                                        <a href="{{ route('view.data.applicant', ['id' => $item->id]) }}?ref=histori_pelamar"
                                                                            class="btn btn-sm btn-primary rounded-pill">Data
                                                                            Applicant</a>
                                                                    </div>
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
                    </div>
                </div>
            </div>
        </section>
    @endsection

    @push('script')
        <script>
            $(document).ready(function() {
                $('#table-data-histroy-lamaran').DataTable({
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
