<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemprosesan file</title>
</head>
<body>
    <h2>Pembacaan data</h2>
    <?php
    $file='D:\\modul 9.txt';
    if(file_exists($file))
    {
        $fo=fopen($file,"r");
        $isi=fread($fo,filesize("$file"));
        echo("isi dari file <b> $file </b> adalah <b>\" $isi \" </b> Text fwrite OK in C:\Text.txt");
        fclose($fo);
    }else
    {
        echo ("file <b> $file </b> tidak ada !");
        
    }
    ?>
</body>
</html>