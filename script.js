$(document).ready(function() {
    
    $('#userTable').DataTable();

    
    $('.edit-btn').on('click', function() {
        var userId = $(this).data('id');
        window.location.href = 'edit_user.php?id=' + userId;
    });

    
    $('.delete-btn').on('click', function() {
        var userId = $(this).data('id');

        
        Swal.fire({
            title: 'Are you sure?',
            text: 'This action cannot be undone!',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                
                $.ajax({
                    type: 'POST',
                    url: 'delete_user.php',
                    data: { id: userId },
                    dataType: 'json',
                    success: function(response) {
                        if (response.success) {
                            
                            location.reload();
                        } else {
                            Swal.fire('Error', response.message, 'error');
                        }
                    },
                    error: function(error) {
                        console.error('Error deleting user:', error);
                        Swal.fire('Error', 'An unexpected error occurred.', 'error');
                    }
                });
            }
        });
    });
});
