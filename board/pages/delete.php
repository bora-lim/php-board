<?php
	require_once $_SERVER['DOCUMENT_ROOT']."/board/db.php";
	
	$no = $_GET['idx'];
	$sql = queryFunc("DELETE FROM list WHERE idx='$no';");
?>
<script type="text/javascript">
  alert("삭제되었습니다.");
  location.href="/board/index.php";
</script>

