<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DangNhap</title>
    <style>
        .khoi{
            border: 1px solid black;
            border-radius: 10px;
            width: 250px;
            margin: 20vh auto;
            background-color: antiquewhite;
            display: flex;
            text-align: center;
        }
        input{
            padding:5px 0;
            margin:10px 0;
            border-radius: 10px;
        }
        form{
            padding: 10px;
        }
        h1{
            margin: 5px 2px;
        }
    </style>
</head>
<body>
    <div class="khoi">
        <div class="" >
            <h1>Đăng nhập</h1>
            <form action="dangnhap.php" method="POST">
                <!-- <p><b>Tên đăng nhập</b></p> -->
                <input type="text" name="user" id="" placeholder="Tên đăng nhập">
                <!-- <p><b>Mật khẩu</b></p> -->
                <input type="password" name="password" id="" placeholder="Mật khẩu">
                <button>Đăng nhập</button>
            </form>
        </div>
    </div>
    <?php
        // Su dung include de ket noi 2 file php
        include 'connect.php'; 
        session_start();
        if(isset($_POST['user']) && isset($_POST['password'])){
            $user = $_POST['user'];
            $password = $_POST['password'];

            $sql = "SELECT * FROM `nguoi_dung` WHERE ten_dang_nhap = '$user' and mat_khau = '$password'";

            $result = mysqli_query($conn,$sql);

            if(mysqli_num_rows($result) > 0){
                
                $_SESSION['dangnhap'] = "thanhcong";
                header("Location: index.php");
            }
            else{
                echo "Tên đăng nhập hoặc mật khẩu không chính xác!";
            }
        }
    ?>
</body>
</html>