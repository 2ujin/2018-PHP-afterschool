<?php

// $source = "mirim.txt";
// $dest = "mirim_copy.txt"; //목적지

// $result = copy($source, $dest);

// if($result)
//     echo "파일 복사 성공 했당";
// else 
//     echo"파일 복사 실패해따 ㅠㅠ";
// $pFile = fopen("mirim.txt", "w");
// $data = "";

$exist = file_exists("mirim_copy.txt");

    if($exist)
    $result = unlink("mirim_copy.txt");
    else{
        echo "파일 미존재합니당 <br> 강제 종료함";
        die();
    }
    
    if($result)
        echo "파일 삭제 성공";
?>