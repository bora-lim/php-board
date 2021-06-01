<?php
  require_once $_SERVER['DOCUMENT_ROOT']."/board/db.php";

  $no = $_GET['idx'];
  $title = $_POST['title'];
  $writer = $_POST['writer'];
  $content = $_POST['content'];
  $sql = queryFunc("UPDATE list SET title='".$title."', writer='".$writer."', content='".$content."' WHERE idx='".$no."'"); 
?>

<script type="text/javascript">
  alert("수정되었습니다.");
  location.href="/board/pages/view.php?idx=<?php echo $no; ?>";
</script>
