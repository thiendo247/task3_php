<?php session_start(); ?>
<!doctype html>
<html lang="en">

<head>
    <title>LIST SV</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS fontawesome -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css" integrity="sha384-ejwKkLla8gPP8t2u0eQyL0Q/4ItcnyveF505U0NIobD/SMsNyXrLti6CWaD0L52l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!--CDN jquery-->
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js" type="text/javascript"></script>
</head>

<body style="background-color: rgb(93, 168, 162)">
    <?php
        if (isset($_SESSION['email'])) {
            echo "Hello " . $_SESSION['email'] . "<br/>";
        } else {
            echo "chua dang nhap";
            header('Location: form.php');
        }
    ?>

    <div>
        <h1 class="text-center">Danh sách sinh viên</h1>
        <div class="container py-2" style="border: 2px solid aqua;">
            <form class="form-horizontal">
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button id="btn_add" class="btn btn-primary" type="button">Thêm sinh viên</button>
                </div><br>
                <div class="row">
                    <div class="col-md-3">
                        <label for="" class="form-label">Họ và tên</label>
                        <input type="text" name="" id="" class="form-control">
                    </div>
                    <div class="col md-3">
                        <label for="" class="form-label">Mã hồ sơ</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="col-md-3">
                        <label for="" class="form-label">Mã sinh viên</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="col-md-3">
                        <label for="" class="form-label">Tìm kiếm</label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control border rounded-pill" placeholder="Search......." aria-label="Recipient's username" aria-describedby="button-addon2">
                            <button class="btn btn-outline-info" type="submit"><span class="bi-search"></span></button>
                        </div>

                    </div>

                    <br><br>
                    <div class="table-responsive table-info table-bordered">
                        <table class="table align-middle caption-top" id="scroll" style="width:1600px; overflow:scroll">
                            <caption>List of Students</caption>
                            <thead class="table-dark">
                                <tr>
                                    <th scope="col">STT</th>
                                    <th scope="col">Mã sinh viên</th>
                                    <th scope="col">Họ tên</th>
                                    <th scope="col">Giới tính</th>
                                    <th scope="col">Ngày sinh</th>
                                    <th scope="col">Số điện thoại</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Nơi sinh</th>
                                    <th scope="col">CMND/CCCD</th>
                                    <th scope="col">Địa chỉ</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody id="table_api">
                                <!-- <tr>
                                    <th scope="row">1</th>
                                    <td>AT12</td>
                                    <td>Thiện Đô</td>
                                    <td>Nam</td>
                                    <td>24/12/2000</td>
                                    <td>19001009</td>
                                    <td>tdokma@gmail.com</td>
                                    <td>Hà Nội</td>
                                    <td>1234567890</td>
                                    <td>NG - Chiến Thắng</td>
                                    <td>
                                        <button type="button" class="btn btn-outline-primary btn-sm"><i class="fa fa-edit"></i></button>
                                        <button type="button" class="btn btn-outline-danger btn-sm"><i class="fa fa-trash"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>AT06</td>
                                    <td>Lê Văn Chiến</td>
                                    <td>Nam</td>
                                    <td>4/12/2000</td>
                                    <td>84722923</td>
                                    <td>lvchien@gmail.com</td>
                                    <td>Thanh Hóa</td>
                                    <td>948292309</td>
                                    <td>151 Team</td>
                                    <td>
                                        <button type="button" class="btn btn-outline-primary btn-sm"><i class="fa fa-edit"></i></button>
                                        <button type="button" class="btn btn-outline-danger btn-sm"><i class="fa fa-trash"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>AT20</td>
                                    <td>Tất Hòa</td>
                                    <td>Khác</td>
                                    <td>4/7/2000</td>
                                    <td>784398492</td>
                                    <td>tthoa@gmail.com</td>
                                    <td>Nam Định</td>
                                    <td>123123456</td>
                                    <td>141 NG</td>
                                    <td>
                                        <button type="button" class="btn btn-outline-primary btn-sm"><i class="fa fa-edit"></i></button>
                                        <button type="button" class="btn btn-outline-danger btn-sm"><i class="fa fa-trash"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td>DT02</td>
                                    <td>Hải Châu</td>
                                    <td>Nữ</td>
                                    <td>3/3/2000</td>
                                    <td>784398492</td>
                                    <td>hchau@gmail.com</td>
                                    <td>Vĩnh Phúc</td>
                                    <td>1414141456</td>
                                    <td>30 Thanh Xuân</td>
                                    <td>
                                        <button type="button" class="btn btn-outline-primary btn-sm"><i class="fa fa-edit"></i></button>
                                        <button type="button" class="btn btn-outline-danger btn-sm"><i class="fa fa-trash"></i></button>
                                    </td>
                                </tr> -->
                            </tbody>
                        </table>

                    </div>
                    <div>
                        <nav aria-label="Page navigation example">
                            <ul class="pagination justify-content-center">
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                    </a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>

                </div>
            </form>

        </div>
    </div>

    <script type="text/javascript" src="js/listSv.js"></script>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>



</html>