<!DOCTYPE html>
<html>

<head>
    <title>Slide Navbar</title>
    <link rel="stylesheet" type="text/css" href="slide navbar style.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
</head>

<body>
    <div class="main">
        <input type="checkbox" id="chk" aria-hidden="true">

        <div class="signup">
            <form method="post" action="<?= base_url('login/signup') ?>">
                <label for="chk" aria-hidden="true">Sparepart</label>
            </form>
        </div>

        <div class="login">
            <form method="post" action="<?= base_url('login/login_aksi'); ?>">
                <label for="chk" aria-hidden="true">Login</label>
                <input type="text" name="username" placeholder="username" autocomplete="off">
                <input type="password" name="password" placeholder="Password" autocomplete="off">
                <button type="submit">Login</button>
            </form>
        </div>
    </div>
</body>

</html>