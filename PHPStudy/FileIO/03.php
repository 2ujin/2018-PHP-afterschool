<?php

// $source = "mirim.txt";
// $dest = "mirim_copy.txt"; //������

// $result = copy($source, $dest);

// if($result)
//     echo "���� ���� ���� �ߴ�";
// else 
//     echo"���� ���� �����ص� �Ф�";
// $pFile = fopen("mirim.txt", "w");
// $data = "";

$exist = file_exists("mirim_copy.txt");

    if($exist)
    $result = unlink("mirim_copy.txt");
    else{
        echo "���� �������մϴ� <br> ���� ������";
        die();
    }
    
    if($result)
        echo "���� ���� ����";
?>