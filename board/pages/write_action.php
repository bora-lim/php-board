<?php

include  $_SERVER['DOCUMENT_ROOT']."/board/db.php"; 

$title = $_POST['title'];
$writer = $_POST['writer'];
$content = $_POST['content'];
$date = date('Y-m-d');

if($title && $writer && $content){
    $sql = queryFunc("INSERT INTO list(title,writer,content,date) VALUES('".$title."', '".$writer."', '".$content."','".$date."')"); 
    echo "<script>
    alert('등록 되었습니다 :)');
    location.href='/board/index.php';</script>";
}else{
    echo "<script>
    alert('등록 실패했습니다 :(');
    history.back();</script>";
}
?>