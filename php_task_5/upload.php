<?php
    include 'filenames+date.php';
    // 1. Перевірити, чи була натиснута кнопка "submit" на формі
    if(!isset($_POST["upload"])){
        header("Location: index.php");
    }
    if(isset($_POST["list"])){
        header("Location: list.php");
    }
    if(isset($_POST['filename']) && ($_POST['filename']) !== ''){
        $fileName = filedates($_FILES["fileToUpload"]["name"], $_POST['filename']);
    } else { $fileName = filedate($_FILES["fileToUpload"]["name"]); }
    // 2. Отримаємо ім'я файлу, який користувач вибрав для завантаження
    $fileSize = $_FILES["fileToUpload"]["size"];
    $fileExtension = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
    $fileExtensions = ['txt', 'pdf', 'doc', 'docx', 'xls', 'xlsx', 'ppt', 'pptx', 'jpg', 'jpeg', 'png', 'gif'];
    $docs = ['txt', 'pdf', 'doc', 'docx', 'xls', 'xlsx', 'ppt', 'pptx'];
    $images = ['jpg', 'jpeg', 'png', 'gif'];

    // 3. Перевірити, чи файл вже існує в папці "uploads"
    if(file_exists("uploads/docs/" . $fileName)||file_exists("uploads/images/" . $fileName)){
        echo "Файл з ім'ям $fileName вже існує.";
    }
    // 4. Перевірити чи це текстовий файл
    elseif(!in_array($fileExtension, $fileExtensions)){
        echo "Цей тип файлу не підтримується.";
    }
    // 5. Перевірити розмір файлу
    elseif($fileSize > 10000000){
        echo "Файл занадто великий. Максимальний розмір файлу - 10MB.";
    }
    // Все ОК, завантажуємо файл
    else{
        if(in_array($fileExtension, $docs)){
        move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], "uploads/docs/" . $fileName);
            echo "<b>Документ:</b> ". "<i>".$fileName."</i>" ."<b> - успішно завантажено. </b>";
        }
        else{move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], "uploads/images/" . $fileName);
            echo "<b>Зображення:</b> ". "<i>".$fileName."</i>" ." <b> - успішно завантажено.</b>";
        }
    }
?>

    <p>
        <a href="index.php">Go home</a>
    </p>



