<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .khoi{
            border: 1px solid black;
            border-radius: 10px;
            width: 250px;
            margin: 20vh auto;
            background-color: antiquewhite;
        }
        input{
            padding:5px 0;
            margin:10px 0;
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
                <p><b>Tên đăng nhập</b></p>
                <input type="text" name="user" id="" placeholder="Tên đăng nhập">
                <p><b>Mật khẩu</b></p>
                <input type="password" name="password" id="" placeholder="Mật khẩu">
                <button>Đăng nhập</button>
            </form>
        </div>
    </div>
    <?php
        if(isset($_POST['user']) && isset($_POST['password'])){
            $user = $_POST['user'];
            $password = $_POST['password'];
            if($user =="admin" && $password=="123"){
                session_start();
                $_SESSION['dangnhap'] = "thanhcong";
                header("Location: trangchu.php");
            }
            else{
                echo "Tên đăng nhập hoặc mật khẩu không chính xác!";
            }
        }
    ?>
</body>
</html>