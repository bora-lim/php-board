<?php 
include  $_SERVER['DOCUMENT_ROOT']."/board/db.php"; 

$sql = queryFunc("SELECT * FROM list ORDER BY idx DESC");
?>

<!doctype html>
<head>
<meta charset="UTF-8">
<title>게시판</title>
<link rel="stylesheet" type="text/css" href="/board/css/style.css" />
</head>
<body>
<div id="board-wr"> 
  <table class="board-list">
    <thead>
        <tr>
          <th>No</th>
          <th class="title">Title</th>
          <th>Writer</th>
          <th>Date</th>
        </tr>
    </thead>

    <tbody>
      <?php
        while($result = $sql->fetch_array())
        {
      ?>
      <tr>
        <td><?php echo $result['idx']; ?></td>
        <td class="title"><a href="/board/pages/view.php?idx=<?php echo $result['idx']; ?>"><?php echo $result['title'] ?></a></td>
        <td><?php echo $result['writer']?></td>
        <td><?php echo $result['date'] ?></td>
      </tr>
      <?php } ?>
    </tbody>
  </table>

  <div class="btn-write">
    <a href="/board/pages/write.php">글쓰기</a>
  </div>
</div>
</body>
</html>