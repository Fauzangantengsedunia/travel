<table border="1" class="table">
    <tr>
        <th>no</th>
        <th>username</th>
        <th>password</th>
        <th>level</th>
    </tr>
    
    <?php
    // Menggunakan koneksi mysqli atau PDO yang benar
    include ('koneksi.php');

    // Select data dari tabel user
    $query_mysql = mysqli_query($mysqli, "SELECT * FROM akun") or die(mysqli_error($mysqli));

    // Variabel nomor dimulai dari 1    
    $nomor = 1;

    // Loop untuk menampilkan data dalam tabel
    while ($data = mysqli_fetch_array($query_mysql)) {
        ?>
        <tr>
            <td><?php echo $nomor++; ?></td>
            <td><?php echo $data['username']; ?></td>
            <td><?php echo $data['password']; ?></td>
            <td><?php echo $data['level']; ?></td>
            <td><a href="edit.php?id=<?php echo $data['id'];?>">Edit</a>
                <!-- Isi kolom aksi sesuai dengan kebutuhan -->
                <a href="delete.php?id=<?php echo $data['id'];?>">delete</a>
            </td>
        </tr>
    <?php } ?>
</table>
<a href="addpage.php"><button>add</button></a>
<a href="join.php"><button>see</button></a>
