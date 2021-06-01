<?php
	require_once $_SERVER['DOCUMENT_ROOT']."/board/db.php";
   
	$no = $_GET['idx'];
  $sql = queryFunc("SELECT * FROM list WHERE idx='$no';");
	$result = $sql->fetch_array();
 ?>
<!doctype html>
<head>
<meta charset="UTF-8">
<title>게시판 - 글수정</title>
<link rel="stylesheet" href="/board/css/style.css" />
</head>
<body>
<div id="board-wr">
  <div class="bd-write">
      <form action="modify_action.php?idx=<?php echo $no; ?>" method="post">
        제목 : <input type="text" name="title" placeholder="제목" maxlength="30" value="<?php echo $result['title']; ?>" required /> 
        이름 : <input type="text" name="writer" placeholder="작성자" maxlength="30" value="<?php echo $result['writer']; ?>" required /> 
        <div class="bd-cont">
            <textarea name="content" placeholder="내용" required><?php echo $result['content']; ?></textarea>
        </div>
        <button type="submit" class="btn-complete">수정</button>
      </form>
  </div>
</div>
</body>
</html>