<form action="upload.php" method="post" enctype="multipart/form-data">

    <!-- Виберіть файл для завантаження: -->
    <label for="fileToUpload">Виберіть файл для завантаження:<br>
        <input type="file" name="fileToUpload" id="fileToUpload">
        <input type="text" name="filename" placeholder="Дайте назву файлу">
    <br>
    <!-- Кнопка для завантаження файлу -->
    <input type="submit" value="Завантажити файл" name="upload">
    <input type="submit" value="Список файлів" name="list">

</form>
