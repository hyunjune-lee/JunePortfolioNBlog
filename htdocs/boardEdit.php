<?php
require('lib/nav.php');
?>
<!doctype html>
<html>
  <head>
    <title>커뮤니티 웹 사이트</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- 부트스트랩 CSS 추가하기 -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/sidebar.css">
  </head>
  <body>
    <div class="container-fluid">
      <div class="row d-flex d-md-block flex-nowrap wrapper">

          <?php
          nav();
          ?>

        <main id="main" class="col-md-9 float-left col pl-md-5 pt-3 main">
          <div class="page-header mt-3">
              <h2>글 수정</h2>
          </div>
          <p class="lead">게시글을 수정합니다.</p>
          <hr>
          <form method="post" action="boardUpdate.php" class="pt-3 md-3" style="max-width: 920px">
            <div class="form-group">
                <input type="hidden" name="old_title" value="<?=$_GET['id']?>">
              <label>제목</label>
              <input type="text" name = "title"   class="form-control"  placeholder="제목을 입력하세요." value="<?php echo $_GET['id']; ?>">


            </div>
            <div class="form-group">
              <label>내용</label>
              <textarea name = "content" class="form-control" placeholder="내용을 입력하세요." style="height: 320px;"><?php
                  // 파일 열기
                  $fp = fopen("./data/".$_GET['id'] , "r") or die("파일을 열 수 없습니다！");

                  // 파일 내용 출력
                  while( !feof($fp) ) {
                      echo fgets($fp);
                  }

                  // 파일 닫기
                  fclose($fp);
                  ?></textarea>
            </div>
            <button type="submit" class="btn btn-primary">글 수정</button>
          </form>
          <footer class="text-center" style="max-width: 920px;">
<!--            <p>Copyright ⓒ 2019 <b>이현준</b> All Rights Reserved.</p>-->
          </footer>
        </main>
      </div>
    </div>
    <!-- 제이쿼리 자바스크립트 추가하기 -->
    <script src="js/jquery.min.js"></script>
    <!-- Popper 자바스크립트 추가하기 -->
    <script src="js/popper.min.js"></script>
    <!-- 부트스트랩 자바스크립트 추가하기 -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
