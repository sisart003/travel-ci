<!DOCTYPE html>
<html>
<head>
    <title>Edit User</title>
</head>
<body>
    <h2>Edit User</h2>
    <form method="post" enctype="multipart/form-data">
        <label>First Name:</label>
        <input type="text" name="firstname" value="<?= $user['firstname']; ?>" required><br>

        <label>Last Name:</label>
        <input type="text" name="lastname" value="<?= $user['lastname']; ?>" required><br>

        <label>Email:</label>
        <input type="email" name="email" value="<?= $user['email']; ?>" required><br>

        <label>New Password (leave blank to keep current):</label>
        <input type="password" name="password"><br>

        <label>Upload New Image:</label>
        <input type="file" name="image"><br>

        <?php if ($user['image']): ?>
            <img src="<?= base_url('uploads/' . $user['image']); ?>" width="100"><br>
        <?php endif; ?>

        <button type="submit">Update</button>
    </form>

</body>
</html>
