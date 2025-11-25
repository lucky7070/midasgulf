@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card mb-3">
            <div class="card-header">
                <div class="row flex-between-end">
                    <div class="col-auto align-self-center">
                        <h5 class="mb-0" id="table-example">Report :: Contact Us Leads </h5>
                    </div>
                </div>
            </div>
            <div class="card-body table-padding">
                <div class="table-responsive scrollbar">
                    <table class="table custom-table table-striped dt-table-hover fs--1 mb-0 table-datatable"
                        style="width:100%">
                        <thead class="bg-200 text-900">
                            <tr>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Email</th>
                                <th>Message</th>
                                <th>Submit Date</th>
                                <th width="100px">Action</th>
                            </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


@section('js')
<script src="{{ asset('assets/js/sweetalert2.min.js') }}"></script>
<script type="text/javascript">
    $(function() {
        var table = $('.table-datatable').DataTable({
            ajax: "{{ request()->url() }}",
            order: [
                [4, 'desc']
            ],
            columns: [{
                    data: 'full_name',
                    name: 'full_name'
                },
                {
                    data: 'last_name',
                    name: 'last_name',
                    visible: false
                },
                {
                    data: 'email',
                    name: 'email',
                },
                {
                    data: 'message',
                    name: 'message',
                },
                {
                    data: 'created_at',
                    name: 'created_at',
                },
                {
                    data: 'action',
                    name: 'action',
                    orderable: false,
                    searchable: false
                },
            ]
        });

        $(document).on('click', ".message", function() {
            const text = $(this).data('message')
            Swal.fire({
                text,
                confirmButtonColor: '#e7515a',
                cancelButtonColor: '#3b3f5c',
                confirmButtonText: 'Okay',
                customClass: {
                    confirmButton: 'btn btn-primary',
                    htmlContainer: 'text-justify'
                }
            });
        });
    });
</script>
@endsection