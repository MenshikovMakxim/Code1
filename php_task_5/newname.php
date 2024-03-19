<?php

if(isset($_POST['namefile']) && $_POST['namefile'] !== ""){
    $namefile = $_POST['namefile'];
}

?>

<body>
    <label>
        <input type="text" name="namefile" placeholder="Enter name file:">
    </label>
</body>

<p>
    <a href="upload.php">Завантажити</a>
</p>
<br>
<p>
    <a href="index.php">Go home</a>
</p>