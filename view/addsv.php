<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADD SV</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src=""></script>
    <style>
        .error {
            color: red;
        }

        .err {
            color: red;
        }
    </style>
</head>

<body style="background-color: rgb(93, 168, 162)">
    <div>
        <h1 style="text-align: center;">Thêm mới sinh viên</h1>
        <div class="container px-4" style="border: 2px solid aqua;">
            <form id="addForm" class=" row gx-5" method="get" action="listsv.html">
                <div class="col-md-6">
                    <label for="mahoso" class="form-label"><b class="text-danger">*</b> Mã hồ sơ </label>
                    <input class="form-control is-invalid" id="mahoso" placeholder="Nhập thông tin..." required>
                    <p id="err1"></p>
                    <!--<input type="text" class="form-control" id="inputMHS"> -->
                    <!--<div class="invalid-feedback">
                        Yêu cầu nhập đầy đủ thông tin.
                    </div>-->
                </div>
                <div class="col-md-6">
                    <label for="masinhvien" class="form-label"><b class="text-danger">*</b>Mã sinh viên</label>
                    <input class="form-control is-invalid" id="masinhvien" placeholder="Nhập thông tin..." required>
                    <p class="err"></p>
                    <!--<div class="invalid-feedback">
                        Yêu cầu nhập đầy đủ thông tin.
                    </div>-->
                </div>
                <div class="col-md-6">
                    <label for="hodem" class="form-label"><b class="text-danger">*</b>Họ đệm</label>
                    <input class="form-control is-invalid" id="hodem" placeholder="Nhập thông tin..." required>
                    <p class="err"></p>
                    <!--<div class="invalid-feedback">
                        Yêu cầu nhập đầy đủ thông tin.
                    </div>-->
                </div>
                <div class="col-md-6">
                    <label for="ten" class="form-label"><b class="text-danger">*</b>Tên</label>
                    <input class="form-control is-invalid" id="ten" placeholder="Nhập thông tin..." required>
                    <p class="err"></p>
                    <!--<div class="invalid-feedback">
                        Yêu cầu nhập đầy đủ thông tin.
                    </div>-->
                </div>

                <div class="col-md-3">
                    <fieldset class="row mb-3">
                        <label class="col-form-label col-sm-3 pt-2"><b class="text-danger">*</b>Giới tính</label>
                        <div class="col-md-4">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                                <label class="form-check-label" for="gridRadios1">
                                    Nam
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                                <label class="form-check-label" for="gridRadios2">
                                    Nữ
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1">
                                <label class="form-check-label" for="gridRadios1">
                                    Khác
                                </label>
                            </div>
                        </div>
                    </fieldset>
                </div>

                <div class="col-md-5">
                    <label for="date" class="form-label"><b class="text-danger">*</b> Ngày sinh</label>
                    <div class="col">
                        <div class="input-group date" id="datepicker">
                            <!--<input type="text" class="form-control" id="date">-->
                            <input type="text" class="form-control is-invalid" id="ngaysinh" placeholder="Nhập thông tin..." required>
                            <button class="input-group-append">
                                <span class="input-group-text bg-while">
                                    <i class="fa fa-calendar"></i>
                                </span>
                            </button>
                            <p class="err"></p>
                            <!--<div class="invalid-feedback">
                        Yêu cầu nhập đầy đủ thông tin.
                        </div>-->

                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <label for="noisinh" class="form-label"><b class="text-danger">*</b>Nơi sinh</label>
                    <input type="text" class="form-control" id="noisinh" placeholder="Nhập thông tin...">
                    <p class="err"></p>

                </div>
                <div class="col-md-6">
                    <label for="dantoc" class="form-label">Dân tộc </label>
                    <input type="text" class="form-control" id="noisinh" placeholder="Nhập thông tin...">
                    <p class="err"></p>
                </div>
                <div class="col-md-6">
                    <label for="tongiao" class="form-label">Tôn giáo</label>
                    <input type="text" class="form-control" id="tongiao" placeholder="Nhập thông tin...">
                    <p class="err"></p>
                </div>
                <div class="col-md-4">
                    <label for="cmnd" class="form-label">Số CMND </label>
                    <input type="text" class="form-control" id="cmnd" placeholder="Nhập thông tin...">
                    <p class="err"></p>
                </div>

                <div class="col-md-4">
                    <label for="ngaycap" class="form-label">Ngày cấp</label>
                    <div class="input-group mb-3 date" id="datepicker1">
                        <input id="ngaycap" type="text" class="form-control" placeholder="Nhập thông tin..." aria-label="Recipient's username" aria-describedby="button-addon2">

                        <button class="input-group-append">
                            <span class="input-group-text bg-while">
                                <i class="fa fa-calendar"></i>
                            </span>
                        </button>
                        <p class="err"></p>
                    </div>

                </div>
                <div class="col-md-4">
                    <label for="noicap" class="form-label">Nơi cấp</label>
                    <input type="text" class="form-control" id="noicap" placeholder="Nhập thông tin...">
                    <p class="err"></p>
                </div>
                <div class="col-md-6">
                    <label for="dienthoai" class="form-label">Điện thoại </label>
                    <input type="text" class="form-control" id="dienthoai" placeholder="Nhập thông tin...">
                    <p class="err"></p>
                </div>
                <div class="col-md-6">
                    <label for="email" class="form-label"><b class="text-danger">*</b> Email</label>
                    <!--<input type="text" class="form-control" id="inputEmail">-->
                    <input class="form-control is-invalid" id="email" placeholder="Nhập thông tin..." required>
                    <p class="err"></p>
                    <!--<div class="invalid-feedback">
                        Yêu cầu nhập đầy đủ thông tin.
                    </div>-->
                </div>
                <div class="col-md-12">
                    <label for="diachi" class="form-label">Địa chỉ</label>
                    <input type="text" class="form-control" id="diachi" placeholder="Nhập thông tin...">
                    <p class="err"></p>
                </div>

                <div class="row g-3">
                    <div class="col-md-8">
                        <div class="form-floating">
                            <input type="text" class="form-control" id="ghichu" placeholder="Thêm ghi chú tại đây">
                            <label for="ghichu">Ghi chú</label>
                            <p class="err"></p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-floating">
                            <select name="Khoa" id="khoa" class="form-select">
                                <option value="selected">Chọn khoa...</option>
                                <option value="1">An toàn thông tin</option>
                                <option value="2">Công nghệ thông tin</option>
                                <option value="3">Điện tử viễn thông</option>
                            </select>
                            <label for="khoa">Khoa sinh viên</label>
                        </div>
                    </div>

                </div>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end gy-4">
                    <button class="btn btn-primary me-md-2" type="submit">Thêm mới</button>
                    <button id="btn_Huy" class="btn btn-danger" type="button">Hủy</button>

                </div>

            </form>
        </div>
    </div>

    <script type="text/javascript">
        $(function() {
            $('#datepicker').datepicker();
            $('#datepicker1').datepicker();
        });
    </script>

    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js" type="text/javascript"></script>
    <script src="js/addValidate.js" type="text/javascript"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">

</body>

</html>