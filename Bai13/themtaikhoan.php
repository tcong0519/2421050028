<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ThemTaiKhoan</title>
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
        text-align: center;
        margin: 5px 2px;
    }
    </style>
</head>
<body>
    <div class=khoi>
        <div>
        <h1>Thêm tài khoản</h1>
        <form action="khoi"method="POST">
            <div class="">
                <input type="text" name="tenDangNhap" id="" placeholder="Tên đăng nhập">
            </div>
            <div class="">
                <input type="password" name="matKhau" id="" placeholder="Mật khẩu">
            </div>
            <div class="">
                <input type="email" name="email" id="" placeholder="Email">
            </div>
            <div class="">
                <input type="text" name="hoten" id="" placeholder="Họ và tên">
            </div>
            <div class="">
                <input type="date" name="ngaysinh" id="" placeholder="Ngày sinh">
            </div>
            <div class="">
                <input type="text" name="sdt" id="" placeholder="Số điẹn thoại">
            </div>
            <div class="">
                <input type="radio" name="gioitinh" id=""> Nam
                <input type="radio" name="gioitinh" id=""> Nữ
            </div>
            <button>Thêm</button>
        </form>
        </div>
    </div>
    
</body>
</html>