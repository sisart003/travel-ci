<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
<body>

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
    <p><a href="#">Add new User</a></p>

    <p>You have successfully logged in.</p>
    
    <a href="<?php echo site_url('auth/logout'); ?>">Logout</a>
    <table>
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
<script>
    $(document).ready(function () {
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
                    alert("User updated successfully!");
                    location.reload(); // Refresh page to update table
                }
            });
        });
    });
</script>



</body>
</html>
