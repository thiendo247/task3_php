$(document).ready(function () {
    $('#loginForm').validate({
        onfocusout: false,
        onkeyup: false,
        onclick: false,
        rules:{
            email:{
                required: true,
                email: true
            },
            pass:{
                required: true,
                minlength: 5,
                maxlength: 20
            }
        },
        messages:{
            email:{
                required: "Yeu cau khong bo trong Email",
                email: "Yeu cau nhap dung dinh dang"
            },
            pass:{
                required: "Yeu cau khong bo trong mat khau",
                minlength: "Yeu cau nhap lon hon 5 ky tu",
                maxlength: "Yeu cau nhap khong qua 20 ky tu"
            }
        }

    });
});

/*
$(document).ready(function () {
    $("#submit").click(function () { 
        //e.preventDefault();
        var email = $("email").val();
        var pass = $("#pass").val();
        
        if(email.length == ""){
            $("#err1").text("Yêu cầu nhập email");
            $("#email").focus();
            return false;
        }
        else if(pass.length == ""){
            $("#err2").text("Yêu cầu nhập mật khẩu");
            $("#pass").focus();
            return false;
        }
        else if(pass.length < 5){
            $("#err2").text("Yêu cầu nhập mật khẩu không quá ngắn");
            $("#pass").focus();
            return false;
        }
        else{
            var con = confirm("Đăng nhập ko?");
            if(con ==true){
                alert("Chuyển trang danh sách sinh viên");
                return true;
            }
            else{
                return false;
            }
            
        }
    });

}); 
*/