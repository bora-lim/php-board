<?php
	include $_SERVER['DOCUMENT_ROOT']."/board/db.php"; /* db load */
?>
<!doctype html>
<head>
<meta charset="UTF-8">
<title>게시판 - 글보기</title>
<link rel="stylesheet" type="text/css" href="/board/css/style.css" />
</head>
<body>
	<?php
		$no = $_GET['idx']; 
    $sql = queryFunc("SELECT * FROM list WHERE idx='".$no."'");
		$result = $sql->fetch_array();
	?>
<div id="board-wr">
  <div class="board-view">
      <h2><?php echo $result['title']; ?></h2>
      <p class="bd-writer">작성자 : <?php echo $result['writer']; ?> </p>
      <p class="bd-date">날짜 : <?php echo $result['date']; ?> </p>

      <div class="bd-cont">
          <?php echo nl2br("$result[content]"); ?>
      </div>

      <div class="btn-box">
        <ul>
          <li><a href="/board/index.php">목록</a></li>
          <li><a href="modify.php?idx=<?php echo $result['idx']; ?>">수정</a></li>
          <li><a href="delete.php?idx=<?php echo $result['idx']; ?>">삭제</a></li>
        </ul>
      </div>
  </div>
</div>
</body>
</html>