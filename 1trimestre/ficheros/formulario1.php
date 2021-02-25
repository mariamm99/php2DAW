<?

$allowedExts = array("gif", "jpeg", "jpg", "png");
 $temp = explode(".", $_FILES["file"]["name"]);
 $extension = end($temp);
 if ((($_FILES["file"]["type"] == "image/gif")
 || ($_FILES["file"]["type"] == "image/jpeg")
 || ($_FILES["file"]["type"] == "image/jpg")
 || ($_FILES["file"]["type"] == "image/pjpeg")
 || ($_FILES["file"]["type"] == "image/x-png")
 || ($_FILES["file"]["type"] == "image/png"))
 && ($_FILES["file"]["size"] < 300000)
 && in_array($extension, $allowedExts)) {
        if ($_FILES["file"]["error"] > 0) {
        echo "Error: " . $_FILES["file"]["error"] . "<br/>";
        } else {
            //info
        echo "Upload: " . $_FILES["file"]["name"] . "<br>";
        echo "Type: " . $_FILES["file"]["type"] . "<br>";
        echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
        echo "Stored in: " . $_FILES["file"]["tmp_name"];

        //guardar archivo

        //primero mirar si existe yaa
            if (file_exists("upload/" . $_FILES["file"]["name"])) {
                echo $_FILES["file"]["name"] . " already exists. ";
            }else {
                $nombre= $_FILES["file"]["name"];
                move_uploaded_file($_FILES["file"]["tmp_name"],
                "upload/" .$_FILES["file"]["name"]);
                echo "Stored in: " . "upload/" . $_FILES["file"]["name"];
            } 
           
        }
 } else {
 echo "Invalid file";
 }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
        <p> <label for="file">Filename: </label>
            <input type="file" name="file" id="file">
        </p>
        <input type="submit" value="submit">
    </form>
</body>

</html>

<?


//PARA VER LAS IMAGENES

$aDirectorio=scandir("upload");

foreach ($aDirectorio as  $value) {
    if ($value !="." && $value !=".." ) {
    
    $direccion="upload/". $value;
   echo "<img src=\"$direccion\" alt=\"\" width=\"300\" height=\"200\"> ";
}
}

?>