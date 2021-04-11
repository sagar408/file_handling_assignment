<?php
    echo readfile("webdictionary.txt");
?>


<?php
    $file = fopen("webdictionary.txt", "rw") or die("sorry,we are Unable to open file!");
    echo fread($file,filesize("webdictionary.txt"));
?>

<?php
$text = "sid";
fwrite($file, $text);
$text = "Safal";
fwrite($file, $text);
fclose($file);
?>


<html>
<body>

<form action="" method="post" enctype="multipart/form-data">
  Select image:
  <input type="file" name="image" id="image">
  <input type="submit" value="Upload Image" name="submit">
</form>

</body>
</html>