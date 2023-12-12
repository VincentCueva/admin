$(document).ready(function() {
    
    $('#userTable').DataTable();

    $('.edit-btn').on('click', function() {
        var userId = $(this).data('id');
        window.location.href = 'edit_user.php?id=' + userId;
    });

    $('.delete-btn').on('click', function() {
        var userID = $(this).data('id');

        if (confirm('Are you sure you want to delete this user?')) {
            $.ajax({
                type: 'POST',
                url: 'delete_user.php',
                data: { id: userID },
                dataType: 'json'
            })
            .done(function(response) {
                if (response.success) {
                    location.reload();
                } else {
                    console.error('Error deleting user:', response.message);
                    alert('Error deleting user. Please check the console for details.');
                }
            })
            .fail(function(xhr, status, error) {
                console.error('AJAX error:', xhr.responseText);
                alert('AJAX error. Please check the console for details.');
            });
        }
    });
});
