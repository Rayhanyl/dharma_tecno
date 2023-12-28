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
                            <a href="{{ route('create.interviewer.page') }}" class="btn bg-gradient-primary">Add
                                Interviewer</a>
                        </div>
                        <div class="col-12">
                            <div class="card"
                                style="box-shadow: rgba(17, 17, 26, 0.05) 0px 4px 16px, rgba(17, 17, 26, 0.05) 0px 8px 32px;">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12 my-3" style="width:100%">
                                            <div class="table-responsive">
                                                <table class="table table-striped " id="table-data-user-interviewer">
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
                                                        @foreach ($interviewer as $item)
                                                            <tr>
                                                                <td>{{ $loop->iteration }}</td>
                                                                <td>{{ $item->first_name }}</td>
                                                                <td>{{ $item->last_name }}</td>
                                                                <td>{{ $item->phone_number }}</td>
                                                                <td>
                                                                    <div class="btn-group gap-2" role="group"
                                                                        aria-label="Basic example">
                                                                        <a class="btn btn-sm bg-gradient-info btn-info rounded-pill"
                                                                            href="{{ route('edit.interviewer.page', $item->id) }}">
                                                                            Ubah
                                                                        </a>
                                                                        <form
                                                                            action="{{ route('delete.user.interviewer', $item->id) }}"
                                                                            method="post">
                                                                            @csrf
                                                                            @method('delete')
                                                                            <button type="submit"
                                                                                class="btn btn-sm bg-gradient-danger btn-primary rounded-pill">
                                                                                Hapus
                                                                            </button>
                                                                        </form>
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
                $('#table-data-user-interviewer').DataTable({
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
