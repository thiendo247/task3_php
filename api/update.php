<?php
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");
    header("Access-Control-Allow-Methods: POST");
    header("Access-Control-Max-Age: 3600");
    header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

    include_once '../config/database.php';
    include_once '../class/student.php';

    $database = new Database();
    $db = $database->getConnection();
    $item = new Students($db);
    $data = json_decode(file_get_contents("php://input"));

    $item->id = $data->id;
    $item->mahs = $data->mahs;
    $item->masv = $data->masv;
    $item->hodem = $data->hodem;
    $item->ten = $data->ten;
    $item->gioitinh = $data->gioitinh;
    $item->ngaysinh = $data->ngaysinh;
    $item->noisinh = $data->noisinh;
    $item->dantoc = $data->dantoc;
    $item->tongiao = $data->tongiao;
    $item->cccd = $data->cccd;
    $item->ngaycap = $data->ngaycap;
    $item->noicap = $data->noicap;
    $item->sdt = $data->sdt;
    $item->email = $data->email;
    $item->diachi = $data->diachi;
    $item->ghichu = $data->ghichu;
    $item->khoa = $data->khoa;

    if($item->updateStudents()){
        echo "CAP NHAT SINH VIEN THANH CONG";
    }
    else{
        echo "CAP NHAT THAT BAI";
    }
