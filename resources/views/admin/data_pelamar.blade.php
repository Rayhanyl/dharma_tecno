@extends('layouts.app')
@section('content')
<main class="main-content mt-0">
    <section>
        <div class="page-header" style="margin-top:7rem;min-height:100vh;">
            <div class="container">
                <div class="row gap-4">
                    <div class="col-12 bg-gradient-success shadow py-2" style="border-radius: 25px;">
                        <h3 class="text-white">Data Pelamar</h3>
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
                                                        <th>Object Pemeriksaan</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @for ($i = 0; $i < 4; $i++) <tr>
                                                        <td></td>
                                                        <td></td>
                                                        </tr>
                                                        @endfor
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
