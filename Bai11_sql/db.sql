create database netflix;

-- phim
-- the_loai
-- dien_vien
-- dao_dien
-- tap_phim
-- nguoi_dung

--Table Người dùng (nguoi_dung)
CREATE TABLE if NOT EXISTS  nguoi_dung (
    id int AUTO_INCREMENT PRIMARY KEY ,
    ten_dang_nhap varchar(30) NOT NULL,
    mat_khau varchar(30) NOT NULL,
    email varchar(30) NOT NULL,
    ho_ten varchar(50) NOT NULL,
    ngay_sinh date NOT NULL,
    so_dien_thoai varchar(10) NOT NULL,
    gioi_tinh boolean  NOT NULL
)

-- the_loai
CREATE TABLE IF NOT EXISTS the_loai (
    id INT PRIMARY KEY AUTO_INCREMENT,
    ten_the_loai VARCHAR(255)
);

-- dien_vien
CREATE TABLE IF NOT EXISTS dien_vien (
    id INT AUTO_INCREMENT PRIMARY KEY,
    ho_ten VARCHAR(100) NOT NULL,
    ngay_sinh DATE
);

-- dao_dien
CREATE TABLE IF NOT EXISTS dao_dien (
    id INT AUTO_INCREMENT PRIMARY KEY,
    ho_ten VARCHAR(100) NOT NULL,
    ngay_sinh DATE
);

--phim
CREATE TABLE IF NOT EXISTS phim (
    id INT AUTO_INCREMENT PRIMARY KEY,
    ten_phim VARCHAR(255),
    quoc_gia VARCHAR(100),
    dao_dien_id INT,
    nam DATETIME,
    do_tuoi INT,
    mo_ta VARCHAR(255)
);

--phim_the_loai
CREATE TABLE IF NOT EXISTS phim_the_loai (
    id INT AUTO_INCREMENT PRIMARY KEY,
    phim_id INT NOT NULL,
    the_loai_id INT NOT NULL
);

--phim_dien_vien
CREATE TABLE IF NOT EXISTS phim_dien_vien (
    id INT AUTO_INCREMENT PRIMARY KEY,
    phim_id INT NOT NULL,
    dien_vien_id INT NOT NULL
);