<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
include_once '../config/database.php';
include_once '../class/student.php';

$database = new Database;
$db = $database->getConnection();

$item = new Students($db);
$item->id = isset($_GET['id']) ? $_GET['id'] : die();

$item->getSingleStudent();
if ($item->ten != null) {
    $emp_arr = array(
        "id" => $item->id,
        "masv" => $item->masv,
        "hodem" => $item->hodem,
        "ten" => $item->ten,
        "gioitinh" => $item->gioitinh,
        "ngaysinh" => $item->ngaysinh,
        "sdt" => $item->sdt,
        "email" => $item->email,
        "noisinh" => $item->noisinh,
        "cccd" => $item->cccd,
        "diachi" => $item->diachi
    );
    http_response_code(200);
    echo json_encode($emp_arr);
} else {
    http_response_code(404);
    echo json_encode("KHONG TIM THAY BAN GHI");
}
