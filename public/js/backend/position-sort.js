$(function () {
    $("#tableHover tbody").sortable({
        update: function (event, ui) {
            // Get the old and new position of the row
            let oldIndex = ui.item.data("row-id");
            let newIndex = ui.item.index() + 1;

            // Get the item ID and table of the row
            let itemId = ui.item.data("row-item-id");
            let table = ui.item.data("row-table");

            toggleLoader()
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: url,
                method: "POST",
                data: {
                    id: itemId,
                    table: table,
                    position: oldIndex,
                    newPosition: newIndex
                },
                success: function (response) {
                    toggleLoader()
                    Swal.fire({
                        title: "Success!",
                        text: response.message,
                        icon: "success",
                        button: "OK",
                    }).then(function () {
                        toggleLoader()
                        location.reload();
                    });
                },
                error: function () {
                    toggleLoader()
                    Swal.fire({
                        title: "Error!",
                        text: "Something went wrong please try again later!!!",
                        icon: "error",
                        button: "OK",
                    }).then(function () {
                        toggleLoader()
                        location.reload();
                    });
                }
            });
        }
    }).disableSelection();
});
