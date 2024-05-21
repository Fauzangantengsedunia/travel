<?php
include '../koneksi.php';

if (isset($_GET['id'])) {
    $id_article = $_GET['id'];

    if (isset($_POST['submit'])) {
        $title = $_POST['title'];
        $information = $_POST['information'];
        $content = $_POST['content'];

        $query = "UPDATE article SET title='$title', information='$information', content='$content' WHERE id_article='$id_article'";
        $result = mysqli_query($mysqli, $query);

        if ($result) {
            header("Location: index.php");
            exit;
        } else {
            echo "Error: " . mysqli_error($mysqli);
        }
    }

    $query = "SELECT * FROM article WHERE id_article='$id_article'";
    $result = mysqli_query($mysqli, $query);
    $data = mysqli_fetch_assoc($result);
} else {
    header("Location: indes.php.php");
    exit;
}
?>