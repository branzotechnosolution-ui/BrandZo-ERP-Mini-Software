@extends('layouts.app')

@push('datatable-styles')
    @include('sections.datatable_css')
@endpush

@section('filter_section')
    <x-filters.filter-box>
        <div class="select-box d-flex py-2 pr-2 border-right-grey border-right-grey-sm-0">
            <p class="mb-0 pr-2 f-14 text-dark-grey d-flex align-items-center">@lang('app.status')</p>
            <div class="select-status">
                <select class="form-control select-picker" name="status" id="filter_status">
                    <option value="all">@lang('app.all')</option>
                    <option value="applied">Applied</option>
                    <option value="ongoing">Ongoing</option>
                    <option value="completed">Completed</option>
                    <option value="terminated">Terminated</option>
                </select>
            </div>
        </div>
    </x-filters.filter-box>
@endsection

@section('content')
    <div class="content-wrapper">
        <div class="d-block d-lg-flex d-md-flex justify-content-between action-bar mb-3">
            <div id="table-actions" class="flex-grow-1 align-items-center">
                <x-forms.link-primary :link="route('interns.create')" class="mr-3 openRightModal float-left" icon="plus">
                    Add New Intern
                </x-forms.link-primary>
            </div>
        </div>

        <div class="d-flex flex-column w-tables rounded bg-white p-3">
            <table class="table table-hover border-0 w-100" id="interns-table"></table>
        </div>
    </div>
@endsection

@push('scripts')
    @include('sections.datatable_js')

    <script>
        $(function() {
            var table = $('#interns-table').DataTable({
                responsive: true,
                serverSide: true,
                ajax: {
                    url: "{!! route('interns.data') !!}",
                    data: function(d) {
                        d.status = $('#filter_status').val();
                    }
                },
                columns: [
                    { data: 'full_name', name: 'full_name', title: 'Full Name' },
                    { data: 'email', name: 'email', title: 'Email' },
                    { data: 'phone', name: 'phone', title: 'Phone' },
                    { data: 'college_name', name: 'college_name', title: 'College & Dept' },
                    { data: 'mentor_name', name: 'mentor_name', title: 'Mentor' },
                    { data: 'dates', name: 'start_date', title: 'Duration' },
                    { data: 'status', name: 'status', title: 'Status' },
                    { data: 'action', name: 'action', orderable: false, searchable: false, title: 'Action' }
                ]
            });

            $('#filter_status').on('change', function() {
                table.draw();
            });

            $('body').on('click', '.delete-table-row', function() {
                var id = $(this).data('intern-id');
                Swal.fire({
                    title: "Are you sure?",
                    text: "You will not be able to recover the deleted intern record!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: "Yes, delete it!",
                    cancelButtonText: "Cancel",
                    customClass: {
                        confirmButton: 'btn btn-primary mr-3',
                        cancelButton: 'btn btn-secondary'
                    },
                    buttonsStyling: false
                }).then((result) => {
                    if (result.isConfirmed) {
                        var url = "{{ route('interns.destroy', ':id') }}";
                        url = url.replace(':id', id);

                        var token = "{{ csrf_token() }}";

                        $.easyAjax({
                            type: 'POST',
                            url: url,
                            data: {'_token': token, '_method': 'DELETE'},
                            success: function(response) {
                                if (response.status == "success") {
                                    table.draw();
                                }
                            }
                        });
                    }
                });
            });
        });
    </script>
@endpush
