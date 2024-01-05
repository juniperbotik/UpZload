<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $uploadDir = "uploads/"; // Папка для загруженных файлов
    $file = $uploadDir . basename($_FILES["file"]["name"]);
    
    $password = $_POST["password"];

    if (move_uploaded_file($_FILES["file"]["tmp_name"], $file)) {
        echo "<p>Файл успешно загружен.</p>";

        $uniqueLink = uniqid();
        echo "<p>Уникальная ссылка для скачивания: <a href='download.php?link=$uniqueLink'>download.php?link=$uniqueLink</a></p>";
    } else {
        echo "<p>Ошибка при загрузке файла.</p>";
    }
}
?>
