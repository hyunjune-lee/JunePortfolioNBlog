<?php
header("Content-Type: application/json; charset=UTF-8");
$request_body = file_get_contents('php://input');
$data = json_decode($request_body);
$condition = $data ->likecondition;
$boardnum = $data ->index;

/*DB 불러오기*/
$conn = new mysqli("127.0.0.1", "root", "Midarlk3134!", "juneblog");
mysqli_query($conn, 'SET NAMES utf8');
$sql = "SELECT *from board where index = '$boardnum'";
$res = $conn->query($sql);
$row=mysqli_fetch_array($res);
$likecount = $row['like'];

/*해당 게시글의 좋아요 상태에 따라 활성화되거나 비활성화된 로띠 애니메이션 보여주기likeView.php*/
if($condition){

    echo ' 


<lottie-player
                                    src="https://assets4.lottiefiles.com/datafiles/KZAksH53JBd6PNu/data.json"
                                    background="transparent" speed="1" style="width: 100px; height: 100px;" autoplay>
                            </lottie-player>
                            <?php $likecondition =false;?>
                            '
    ;

}
else {


    echo ' 


<lottie-player
                                    src="https://assets4.lottiefiles.com/datafiles/KZAksH53JBd6PNu/data.json"
                                    background="transparent" speed="1" style="width: 100px; height: 100px;"  >
                            </lottie-player>
                            <?php $likecondition =true;?>
                            '
    ;

}


?>

