<!DOCTYPE html>
<html>
<head>
    <title>Add User</title>
</head>
<body>
    <h2>Add User</h2>
    <form method="post" enctype="multipart/form-data">
        <label>First Name:</label>
        <input type="text" name="firstname" value="<?php echo set_value('firstname'); ?>" required><br>
        <?php echo form_error('firstname'); ?>

        <label>Last Name:</label>
        <input type="text" name="lastname" required value="<?php echo set_value('lastname'); ?>"><br>
        <?php echo form_error('lastname'); ?>

        <label>Email:</label>
        <input type="email" name="email" required value="<?php echo set_value('email'); ?>"><br>
        <?php echo form_error('email'); ?>

        <label>Password:</label>
        <input type="password" name="password" required><br>
        <?php echo form_error('password'); ?>

        <label>Confirm Password:</label>
        <input type="password" name="conf_password" required><br>
        <?php echo form_error('conf_password'); ?>

        <label>Upload Image:</label>
        <input type="file" name="image"><br>
        <?php echo form_error('image'); ?>

        <button type="submit">Save</button>
    </form>

</body>
</html>
