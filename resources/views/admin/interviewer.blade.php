@extends('layouts.app')
@section('content')
    <main class="main-content" style="margin-top: 7rem;">
        <section>
            <div class="page-header">
                <div class="container my-2">
                    <div class="row gap-4">
                        <div class="col-12 bg-gradient-success shadow py-2" style="border-radius: 25px;">
                            <h3 class="text-white">Data Calon Interview</h3>
                        </div>
                        <div class="col-12">
                            <a href="{{ route ('create.interviewer.page') }}" class="btn bg-gradient-primary">Add Interviewer</a>
                        </div>
                        <div class="col-12">
                            <div class="card"
                                style="box-shadow: rgba(17, 17, 26, 0.05) 0px 4px 16px, rgba(17, 17, 26, 0.05) 0px 8px 32px;">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12 my-3" style="width:100%">
                                            <div class="table-responsive">
                                                <table class="table table-striped " id="table-data-calon-interview">
                                                    <thead class="table-orange">
                                                        <tr>
                                                            <th class="text-center">No</th>
                                                            <th class="text-center">First Name</th>
                                                            <th class="text-center">Lastname</th>
                                                            <th class="text-center">Phone number</th>
                                                            <th class="text-center">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                        </tr>
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
                        <div id="loader-approval"></div>
                        <div id="detail-form-approval"></div>
                    </div>
                </div>
            </div>
        </div>
        {{-- Modal --}}
    @endsection

    @push('script')
        <script>
            $(document).ready(function() {
                $('#table-data-calon-interview').DataTable({
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
