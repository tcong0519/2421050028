<h1>Đây là file index.php</h1>
<?php
    echo "Hello<br>";
    $hoTen = " Thành Công";
    $tuoi = 20;
    echo $hoTen . " " . $tuoi . " Tuổi<br>";
    //strlen tra ve do dai cua chuoi
    echo strlen($hoTen) . "<br>";

    //dem so tu
    echo str_word_count($hoTen) . "<br>";

    //tim kiem ki tu trong chuoi
    echo strpos($hoTen, "n") . "<br>";

    //thay the ki tu trong chuoi
    echo str_replace("Thành" , "Nguyễn ", $hoTen) . "<br>";

    $soThuNhat = 10;
    $soThuHai = 5;
    //phep cong
    echo $soThuNhat + $soThuHai . "<br>";

    //phep tru
    echo $soThuNhat - $soThuHai . "<br>";

    //phep nhan
    echo $soThuNhat * $soThuHai . "<br>";

    //phep chia
    echo $soThuNhat / $soThuHai . "<br>";

    //phep luy thua
    echo $soThuNhat ** $soThuHai . "<br>";

    //phep chia du
    echo $soThuNhat % $soThuHai . "<br>";


    //Toan tu gan
    $soThuNhat += $soThuHai; 
    echo $soThuNhat . "<br>";

    //toan tu so sanh : == ; != ; ===
    echo $soThuNhat == $soThuHai . "<br>";

    //cau dieu kien
        // if ("dieu kien"){
        //     logic
        // }
        // elseif("dk"){
        //     logic
        // }
        // else{
        //     logic
        // }
    $tong = $soThuNhat + $soThuHai;
    if($tong < 15){
        echo "Nho hon 15";
    }
    elseif($tong == 15){
        echo "Tong = 15";
    }
    else{
        echo "Lon hon 15";
    }

    // switch case
    $color = "red";
    switch($color){
        case "red":
            echo "<br>";
            echo "IS RED";
            break;
        case "blue":
            echo "<br>";
            echo "IS BLU";
            break;
        default:
            echo "<br>";
            echo "no color";
            break;
    }

    //for
    for($i=0;$i<=10;$i++){
        echo $i . "<br>";
    }
    
    //mang
    echo "<br>";
    $mang = ["Cong","Thanh Cong","My","Huong My"];
    echo count ($mang) . "<br>";
    echo $mang[1] . "<br>";
    
    //them phan tu
    $mang[] = "Thanh Doanh";
    print_r($mang);

    //xoa phan tu
    echo "<br>";
    unset($mang[0]);
    print_r($mang);
?>