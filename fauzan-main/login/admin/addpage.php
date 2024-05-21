<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah akun</title>
</head>
<body>
    <div class="container">
        <h1>Tambah Akun</h1>
        <form method="post" name="form" action="koneksiadd.php">
            <div class="input">
                <label for="Username">Username</label>
                <input type="text" name="username" required>
            </div>
            <div class="input">
                <label for="Password">Password</label>
                <input type="text" name="password" required>
            </div>
            <div class="input">
                <label for="Level">Level</label>
                <select name="level" id="">
                    <option value="admin">Admin</option>
                    <option value="user">User</option>
                </select>
            </div>
            <div class="button">
                <a href="koneksiadd.php"><button class="btn" type="submit" name="submit">Tambah Akun</button></a>
            </div>
        </form>
    </div>
</body>
</html>