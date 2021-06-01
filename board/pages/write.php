<!doctype html>
<head>
<meta charset="UTF-8">
<title>게시판 - 글작성</title>
<link rel="stylesheet" type="text/css" href="/board/css/style.css" />
</head>
<body>
  <div id="board-wr">
    <div class="bd-write">
      <form action="write_action.php" method="post">
        제목 : <input type="text" name="title" placeholder="제목" maxlength="30" required />
        이름 : <input type="text" name="writer" placeholder="작성자" maxlength="30" required />
        <div class="bd-cont">
            <textarea name="content" placeholder="내용" required></textarea>
        </div>
        <button type="submit" class="btn-complete">완료</button>
      </form>
    </div>
  </div>
</body>
</html>