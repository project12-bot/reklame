<!DOCTYPE html>
<html>
<head>
<title>Login Sistem Reklame</title>

</head>

<body>

<div class="container">

<div class="row justify-content-center mt-5">

<div class="col-md-4">

<h4 class="text-center">LOGIN SISTEM REKLAME</h4>

<?php if($this->session->flashdata('error')){ ?>

<div class="alert alert-danger">
<?= $this->session->flashdata('error'); ?>
</div>

<?php } ?>

<form method="post" action="<?= base_url('auth/login') ?>">

<div class="form-group">
<label>Username</label>
<input type="text" name="username" class="form-control" required>
</div>

<div class="form-group">
<label>Password</label>
<input type="password" name="password" class="form-control" required>
</div>

<button type="submit" class="btn btn-primary btn-block">
Login
</button>

</form>

</div>
</div>
</div>

</body>
</html>