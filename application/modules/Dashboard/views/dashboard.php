<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h3>Welcome to the Dashboard</h3>
        <p>Email: <?= $this->session->userdata('email'); ?></p>
        <a href="<?= base_url('auth/logout'); ?>" class="btn btn-danger">Logout</a>
    </div>
</body>
</html>
