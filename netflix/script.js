var danhSachPhimm = [
    {
        id: 1,
        ten: "Cảnh sát trường Labrado",
        thoiluong:20,
        banner: "",
        trailer: "",
    },

    {
        id: 2,
        ten: "Zootopia",
        thoiluong:20,
        banner: "",
        trailer: "",
    },

]
    var banner = document.getElementsByClassName("banner")[0];
    var trailer = document.getElementsByClassName("banner")[1];
function xemTrailer(){
            document.getElementsByClassName("banner")[0].style = "dislay: block";
            document.getElementsByClassName("banner")[1].style = "dislay: none";

 }

 function chonPhim(id){
    

    for(var i=0;i<danhSachPhimm.length;i++){
        if(danhSachPhimm[i].id == id){
            phimDangchon.trailer = danhSachPhimm[i].banner;
            phimDangchon.trailer
        }
    }
 }