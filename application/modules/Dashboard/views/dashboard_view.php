<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.dataTables.min.css">
    

</head>
<body>

<!-- Add User Modal -->
<div id="addUserModal" class="modal">
    <div class="modal-content">
        <span id="closeAddModal" class="close">&times;</span>
        <h2>Add New User</h2>
        <form id="addUserForm">

            <label>Email:</label>
            <input type="email" name="email" required>

            <label>Password:</label>
            <input type="password" name="password" required>

            <label>Profile Image:</label>
            <input type="file" name="image" required>

            <button type="submit">Add User</button>
        </form>
    </div>
</div>

<!-- Edit User Modal -->
<div id="editUserModal" style="display: none;">
    <h2>Edit User</h2>
    <form id="editUserForm">
        <input type="hidden" name="id" id="edit_id">

        <label>Email:</label>
        <input type="email" name="email" id="edit_email" required><br>
        
        <button type="submit">Update</button>
        <button type="button" id="closeModal">Cancel</button>
    </form>
</div>



    <h2>Welcome, <?php echo $this->session->userdata('email'); ?>!</h2>
    
    <?php 

        $image = !empty($this->session->userdata('image')) ? $this->session->userdata('image') : 'default.jpg';
    
    ?>

    <img src="<?= base_url('assets/uploads/users/'. $image); ?>" alt="" style="width: 100px; height: 100px;">
    <button href="#" id="openAddUserModal">Add new User</button>

    <p>You have successfully logged in.</p>
    
    <a href="<?php echo site_url('auth/logout'); ?>">Logout</a>
    <table id="usersTable" class="display">
        <thead>
            <tr>
                <th>ID</th>
                <th>Email</th>
                <th>Photo</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($uusers as $user): ?>
                <tr>
                    <td><?php echo $user->id; ?></td>
                    <td><?php echo $user->email; ?></td>
                    <td>    
                        <img src="<?= base_url('assets/uploads/users/'. $user->image); ?>" alt="" style="width: 100px; height: 100px;">
                    </td>
                    <?php if($this->session->userdata('is_admin')): ?>
                    <td>
                        <button class="edit-btn" data-id="<?php echo $user->id; ?>">Edit</button>
                        <?php
                            if($this->session->userdata('user_id') != $user->id){
                        ?>
                            <a href="<?php echo site_url('auth/delete_user/'.$user->id); ?>" onclick="return confirm('Are you sure?');">Delete</a>
                        <?php
                            }
                        ?>                        
                    </td>
                    <?php endif; ?>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

    <!-- DataTables Buttons and Dependencies -->
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.print.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#usersTable').DataTable({
                dom: 'Bfrtip', // Add buttons
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print' // Export options
                ]
            });

            // Open Add User Modal
            $('#openAddUserModal').on('click', function () {
                $('#addUserModal').show();
            });

            // Close Add User Modal
            $('#closeAddModal').on('click', function () {
                $('#addUserModal').hide();
            });

            // Submit Add User Form with AJAX
            $('#addUserForm').on('submit', function (e) {
                e.preventDefault();
                var formData = new FormData(this);

                $.ajax({
                    url: '<?php echo site_url("auth/add_user"); ?>',
                    type: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function (response) {
                        $('#addUserModal').hide();
                        showSuccessMessage("User added successfully!");
                        location.reload(); // Refresh DataTable
                    }
                });
            });

            // Open edit modal and load user data
            $('.edit-btn').on('click', function () {
                var userId = $(this).data('id');

                $.ajax({
                    url: '<?php echo site_url("auth/get_user"); ?>/' + userId,
                    type: 'GET',
                    dataType: 'json',
                    success: function (data) {
                        $('#edit_id').val(data.id);
                        $('#edit_email').val(data.email);
                        $('#editUserModal').show();
                    }
                });
            });

            // Close modal
            $('#closeModal').on('click', function () {
                $('#editUserModal').hide();
            });

            // Submit edit form using AJAX
            $('#editUserForm').on('submit', function (e) {
                e.preventDefault();
                var formData = new FormData(this);

                $.ajax({
                    url: '<?php echo site_url("auth/update_user_ajax"); ?>',
                    type: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function () {
                        $('#editUserModal').hide();
                        showSuccessMessage("User updated successfully!");
                        location.reload(); // Refresh DataTable
                    }
                });
            });

            // Function to show success message
            function showSuccessMessage(message) {
                var msgDiv = $('<div class="success-message">' + message + '</div>');
                $('body').append(msgDiv);
                setTimeout(function () {
                    msgDiv.fadeOut(500, function () {
                        $(this).remove();
                    });
                }, 3000);
            }
        });
    </script>



</body>
</html>
