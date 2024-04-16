let deleteButton = document.querySelector('.btn-delete');

// Attach a click event listener to the delete button
deleteButton.addEventListener('click', function (event) {
    // Prevent the default form submission
    event.preventDefault();

    // Show the confirmation modal
    Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.isConfirmed) {
            // Submit the form if the user confirms the deletion
            event.target.closest('form').submit();
        }
    });
});
