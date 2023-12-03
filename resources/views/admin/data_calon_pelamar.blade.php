@extends('layouts.app')
@section('content')
<main class="main-content" style="margin-top: 7rem;">
    <section>
        <div class="page-header">
            <div class="container my-2">
                <div class="row gap-4">
                    <div class="col-12 bg-gradient-success shadow py-2" style="border-radius: 25px;">
                        <h3 class="text-white">Data Calon Pelamar</h3>
                    </div>
                    <div class="col-12">
                        <div class="card"
                            style="box-shadow: rgba(17, 17, 26, 0.05) 0px 4px 16px, rgba(17, 17, 26, 0.05) 0px 8px 32px;">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 my-3" style="width:100%">
                                        <div class="table-responsive">
                                            <table class="table table-striped " id="table-data-calon-pelamar">
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
                                                        <td class="text-center text-capitalize">{{ $loop->iteration }}</td>
                                                        <td class="text-center text-capitalize">{{ $item->fullname }}</td>
                                                        <td class="text-center text-capitalize">
                                                            {{ \Carbon\Carbon::parse($item->birthdate)->age }} th</td>
                                                        <td class="text-center text-capitalize">{{ $item->position->name }}</td>
                                                        <td class="text-center text-capitalize">
                                                            {{ \Carbon\Carbon::parse($item->creaeted_at)->format('d F Y') }}
                                                        </td>
                                                        <td class="text-center text-capitalize">{{ $item->status }}</td>
                                                        <td class="text-center">
                                                            <div class="btn-group gap-2" role="group"
                                                                aria-label="Basic example">
                                                                <a class="btn btn-sm bg-gradient-info rounded-pill"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#approvalModal">Approval</a>
                                                                <a href="{{ route('view.data.applicant', ['id' => $item->id]) }}"
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

    {{-- Modal --}}
    <div class="modal fade" id="approvalModal" tabindex="-1" role="dialog" aria-labelledby="approvalModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="approvalModalLabel">Approval</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn bg-gradient-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    {{-- Modal --}}

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
