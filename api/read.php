<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
include_once '../config/database.php';
include_once '../class/student.php';

$database = new Database();
$db = $database->getConnection();

$item = new Students($db);
$stmt = $item->getStudents();
$itemCount = $stmt->rowCount();

if ($itemCount > 0) {
    $studentsArr = array();
    $studentsArr["data"] = array();
    $studentsArr["itemCount"] = $itemCount;
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        extract($row);

        $ar = array(
            "id" => $id,
            "masv" => $masv,
            "hodem" => $hodem,
            "ten" => $ten,
            "gioitinh" => $gioitinh,
            "ngaysinh" => $ngaysinh,
            "sdt" => $sdt,
            "email" => $email,
            "noisinh" => $noisinh,
            "cccd" => $cccd,
            "diachi" => $diachi
        );
        array_push($studentsArr["data"], $ar);
    }
    echo json_encode($studentsArr);
} else {
    http_response_code(404);
    echo json_encode(array("message" => "KHONG TIM THAY BAN GHI NAO :(( "));
}
