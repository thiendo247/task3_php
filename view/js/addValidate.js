console.log("abc")

$(document).ready(function () {
    $('#addForm').validate({
        
        onfocusout: false,
        onkeyup: false,
        onclick: false,
        rules:{
            mahoso:{
                required: true,
                minlength: 3
            },
            masinhvien:{
                required: true
            },
            hodem:{
                required: true
            },
            ten:{
                required: true
            },
            ngaysinh:{
                required: true,
                date: true

            },
            email:{
                required: true,
                email: true
            },
            dienthoai:{
                number: true,
                rangelength: 10
            }
        },
        messages:{
            mahoso:{
                required: "Yeu cau nhap thong tin Ma ho so",
                minlength: "Nhap it nhat 3 ký tự"
            },
            masinhvien:{
                required: "Yeu cau nhap Ma sinh vien"
            },
            
            hodem:{
                required: "Yeu cau nhap ho dem"
            },
            ten:{
                required: "Yeu cau nhap ten"
            },
            ngaysinh:{
                required: "Yêu cầu nhập ngày sinh",
                date: "Yêu cầu nhập đúng định dạng ngày"
            },
            email:{
                required: "Yeu cau nhap email",
                email: "Yeu cau nhap dung dinh dang"
            },
            dienthoai:{
                number: "Yêu cầu nhập số", 
                rangelength:"Yêu cầu nhập đúng 10 số"
            }

        }
        
    });
});

$('#btn_Huy').click(function (e) {
     if(window.confirm("Bạn có muốn Hủy")){
         window.open("listsv.html", "Byeee")
     }
    e.preventDefault();
    
});





