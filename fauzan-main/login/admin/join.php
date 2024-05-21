<table border="1" class="table">
    <tr>
        <th>no</th>
        <th>username</th>
        <th>tujuan pariwisata</th>

    </tr>
    
    <?php
    // Menggunakan koneksi mysqli atau PDO yang benar
    include ('koneksi.php');

    // Select data dari tabel user
    $query_mysql = mysqli_query($mysqli, "SELECT akun.username, tujuan_pariwisata.tujuan FROM akun JOIN tujuan_pariwisata ON akun.id = tujuan_pariwisata.id") or die(mysqli_error($mysqli));

    // Variabel nomor dimulai dari 1    
    $nomor = 1;

    // Loop untuk menampilkan data dalam tabel
    while ($data = mysqli_fetch_array($query_mysql)) {
        ?>
        <tr>
            <td><?php echo $nomor++; ?></td>
            <td><?php echo $data['username']; ?></td>
            <td><?php echo $data['tujuan']; ?></td>
        </tr>
    <?php } ?>
</table>