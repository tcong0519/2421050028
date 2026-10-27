var danhSachPhimm = [
    {
        id: 1,
        ten: "Tuyển Thủ Dê: Mùi Vị Chiến Thắng",
        thoiluong: 100,
        banner: "../anh/phim1 (1).png",
        trailer: "https://www.youtube.com/embed/6OVConYDQOE"
    },
    {
        id: 2,
        ten: "Haikyuu - Chàng Khổng Lồ Tí Hon",
        thoiluong: 90,
        banner: "../anh/phim1 (2).png",
        trailer: "https://www.youtube.com/embed/R9eG8sJvaf8"
    },
    {
        id: 3,
        ten: "Lego Ninjago: Những Con Rồng Trỗi Dậy",
        thoiluong: 105,
        banner: "../anh/phim1 (3).png",
        trailer: "https://www.youtube.com/embed/PFuFNaBCVlQ"
    },
    {
        id: 4,
        ten: "Thợ Săn Quỷ K-Pop",
        thoiluong: 110,
        banner: "../anh/phim1 (4).png",
        trailer: "https://www.youtube.com/embed/3JTVQTk36R8"
    },
    {
        id: 5,
        ten: "Sonic Prime",
        thoiluong: 85,
        banner: "../anh/phim1 (5).png",
        trailer: "https://www.youtube.com/embed/2rShZls4Ffw"
    },
    {
        id: 6,
        ten: "Kung Fu Panda: Hiệp Sĩ Rồng",
        thoiluong: 95,
        banner: "../anh/phim1 (6).png",
        trailer: "https://www.youtube.com/embed/MYy7oGQiSqI"
    },
    {
        id: 7,
        ten: "Thợ Săn Yêu Tinh",
        thoiluong: 100,
        banner: "../anh/phim1 (7).png",
        trailer: "https://www.youtube.com/embed/6H4Y21Hg2L8"
    },
    {
        id: 8,
        ten: "PAW Patrol: Những Chú Chó Cứu Hộ",
        thoiluong: 80,
        banner: "../anh/phim1 (8).png",
        trailer: "https://www.youtube.com/embed/xgI5iYmOf5Q"
    },
    {
        id: 9,
        ten: "Xì Trum",
        thoiluong: 90,
        banner: "../anh/phim1 (9).png",
        trailer: "https://www.youtube.com/embed/yhBpgqXwrt8"
    },
    {
        id: 10,
        ten: "Masha và Chú Gấu",
        thoiluong: 75,
        banner: "../anh/phim1 (10).png",
        trailer: "https://www.youtube.com/embed/8PtaeiHGOWU"
    },
    {
        id: 11,
        ten: "Bài Ca Chiến Thắng",
        thoiluong: 100,
        banner: "../anh/phim1 (11).png",
        trailer: "https://www.youtube.com/embed/XwoSe9OfM9Y"
    },
    {
        id: 12,
        ten: "Shin Cậu Bé Bút Chì: Nhật Ký Khủng Long",
        thoiluong: 85,
        banner: "../anh/phim1 (12).png",
        trailer: "https://www.youtube.com/embed/WaOKAKYNwTk"
    },
    {
        id: 13,
        ten: "Đảo Ấu Trùng",
        thoiluong: 90,
        banner: "../anh/phim1 (13).png",
        trailer: "https://www.youtube.com/embed/0V7KE2cHOJU"
    },
    {
        id: 14,
        ten: "Khách Sạn Huyền Bí 3: Kỳ Nghỉ Ma Cà Rồng",
        thoiluong: 97,
        banner: "../anh/phim1 (14).png",
        trailer: "https://www.youtube.com/embed/Ku52zNnft8k"
    },
    {
        id: 15,
        ten: "Khách Sạn Huyền Bí 2",
        thoiluong: 93,
        banner: "../anh/phim1 (15).png",
        trailer: "https://www.youtube.com/embed/T3nqmGgnJe8"
    },
    {
        id: 16,
        ten: "Trở Lại Vùng Hoang Dã",
        thoiluong: 88,
        banner: "../anh/phim1 (16).png",
        trailer: "https://www.youtube.com/embed/dDNhtB7L8Lk"
    },
    {
        id: 17,
        ten: "Pony Bé Nhỏ: Tình Bạn Diệu Kỳ",
        thoiluong: 80,
        banner: "../anh/phim1 (17).png",
        trailer: "https://www.youtube.com/embed/aeQe_mZcyf8"
    },
    {
        id: 18,
        ten: "Quái Vật Biển Khơi",
        thoiluong: 95,
        banner: "../anh/phim1 (18).png",
        trailer: "https://www.youtube.com/embed/P-E-IGQCsPo"
    },
    {
        id: 19,
        ten: "Thế Giới Khủng Long: Thuyết Hỗn Mang",
        thoiluong: 124,
        banner: "../anh/phim1 (19).png",
        trailer: "https://www.youtube.com/embed/ftbjh-3OsuA"
    },
    {
        id: 20,
        ten: "Shrek",
        thoiluong: 90,
        banner: "../anh/phim1 (20).png",
        trailer: "https://www.youtube.com/embed/Swiz1XyfhcI"
    },
    {
        id: 21,
        ten: "Peppa Pig",
        thoiluong: 70,
        banner: "../anh/phim1 (21).png",
        trailer: "https://www.youtube.com/embed/eh9sDvmL_HA"
    }
];


var banner = document.getElementsByClassName("banner")[0];
var trailer = document.getElementsByClassName("banner")[1];
var iframeTrailer = trailer.getElementsByTagName("iframe")[0];

function xemTrailer() {
    banner.style.display = "none";
    trailer.style.display = "block";
}

function chonPhim(id) {
    for (var i=0;i<danhSachPhimm.length;i++){
        if (danhSachPhimm[i].id == id) {
            iframeTrailer.src = danhSachPhimm[i].trailer;
            xemTrailer();
            break;
        }
    }
}


var danhSachPoster = document.getElementsByClassName("phim-poster");

for (var i=0;i<danhSachPoster.length;i++) {
    danhSachPoster[i].onclick = function () {
        for (var j=0;j<danhSachPhimm.length;j++) {
            if(danhSachPhimm[j].banner == this.getAttribute("src")) {
                chonPhim(danhSachPhimm[j].id);
                break;
            }
        }
    };
}
