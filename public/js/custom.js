function checkAll(clickchk, relChkbox) {

    const checker = $('#' + clickchk);
    const multiCheck = $('.' + relChkbox);

    function updateSelectAll() {
        if (multiCheck.filter(":not(:checked)").length > 0) {
            checker.prop('checked', false);
        } else {
            checker.prop('checked', true);
        }
    }

    checker.click(function () {
        multiCheck.prop('checked', $(this).prop('checked'));
    });

    multiCheck.change(function () {
        updateSelectAll();
    });

    updateSelectAll();
}

function getSelectedIdsBtn() {
    const selectedIds = [];
    document.querySelectorAll('.checkbox-child:checked').forEach(function (checkbox) {
        selectedIds.push(checkbox.value);
    });
    console.log(selectedIds);
}
