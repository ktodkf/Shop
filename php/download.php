<?php
    $mysql = new mysqli('localhost', 'root', '', 'library');
    
    $query=mysqli_query($mysql,'SELECT * FROM books');
    $foo=array();
    while($bar=mysqli_fetch_assoc($query)){
        $foo[]=$bar;
    }
    file_put_contents('php/books.json',json_encode($foo));
?>