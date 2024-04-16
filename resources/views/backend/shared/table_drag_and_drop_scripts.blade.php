@push('custom-scripts')
    <script src="{{ asset('libs/table-dnd/jquery.table-dnd.min.js') }}"></script>
    <script src="{{ asset('libs/table-dnd/bootstrap-table.min.js') }}"></script>
    <script src="{{ asset('libs/table-dnd/bootstrap-table-reorder-rows.min.js') }}"></script>
    <script>
        $(function () {
            $('#punch-table').bootstrapTable({
                onReorderRow: function (table, movedRow, replacedRow) {
                    console.log(movedRow._id);
                    console.log(replacedRow._id);
                    console.log(replacedRow._data.count);
                }
            });
        });
    </script>
@endpush

@push('custom-styles')
    <link href="{{ asset('libs/table-dnd/bootstrap-table.min.css') }}" rel="stylesheet">
    <link href="{{ asset('libs/table-dnd/bootstrap-table-reorder-rows.css') }}" rel="stylesheet">
@endpush
