<!DOCTYPE html>
<html>
<head>
    <title>Users</title>
</head>
<body>
    <h2>User List</h2>
    <a href="<?= base_url('users/create'); ?>">Add User</a>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Photo</th>
            <th>Name</th>
            <th>Email</th>
            <th>Actions</th>
        </tr>
        <?php foreach ($users as $user): ?>
        <tr>
            <td><?= $user['id']; ?></td>
            <td><?= $user['firstname']; ?> <?= $user['lastname']; ?></td>
            <td><?= $user['email']; ?></td>
            <td><img src="<?php echo base_url(); ?>uploads/users/<?= $user['image']; ?>" alt="" style="width: 128px; height: 128px;"></td>
            <td>
                <a href="<?= base_url('users/edit/'.$user['id']); ?>">Edit</a>|
                <a href="<?= base_url('users/delete/'.$user['id']); ?>" onclick="return confirm('Are you sure?')">Delete</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>

<!-- id, firstname, lastname, username, email, gender, mobile, birthday, password, image -->