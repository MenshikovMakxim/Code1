<?php
    include 'getfiles.php';
    function lists(string $put): void
    {
        $FILES = $put;
        $files = getfiles($FILES);
        print"<h2>$FILES/</h2>";
        foreach ($files as $fil){
            print"<i>".$fil."</i>"."<br>";
        }
    }

     lists('uploads');
     lists('uploads/docs');
     lists('uploads/images');
    ?>

    <form action="delete.php" method="get">
        <p>
        <label for="fileToDelete">Видалити файл:</label>
        <input type="text" id="fileToDelete" name="file" placeholder="Введіть назву файлу">
        <button type="submit">Видалити файл</button>
    </form>

    <p>
        <a href="index.php">Go home</a>
    </p>

