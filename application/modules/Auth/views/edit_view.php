<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>

    <h2>Welcome, <?php echo $this->session->userdata('email'); ?>!</h2>
    
    <?php 
    $image = !empty($this->session->userdata('image')) ? $this->session->userdata('image') : 'default.jpg';

    
    ?>

    <img src="<?= base_url('assets/uploads/users/'. $image); ?>" alt="" style="width: 100px; height: 100px;">


    <!-- <p>You have successfully logged in.</p> -->
    
    
    <a href="<?php echo site_url('auth/logout'); ?>">Logout</a>

    <h2>Edit User: </h2>

    <form action="<?php echo site_url('auth/update_user/'.$user->id); ?>" method="post" enctype="multipart/form-data">
        <input type="email" name="email" required value="<?= $user->email; ?>">

        <br>

        <label>Profile Image:</label>
        <?php if (!empty($user->image)): ?>
            <img src="<?php echo base_url('assets/uploads/users/' . $user->image); ?>" width="100"><br>
        <?php endif; ?>
        <input type="file" name="image"><br>

        <br>

        <button type="submit">Update</button>
    </form>
</body>
</html>
