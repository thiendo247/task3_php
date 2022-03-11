<?php
class Students
{
    private $conn; //connection
    private $table_db = "students"; //table

    public $id;
    public $mahs;
    public $masv;
    public $hodem;
    public $ten;
    public $gioitinh;
    public $ngaysinh;
    public $noisinh;
    public $dantoc;
    public $tongiao;
    public $cccd;
    public $ngaycap;
    public $noicap;
    public $sdt;
    public $email;
    public $diachi;
    public $ghichu;
    public $khoa;
    //connection db
    public function __construct($db)
    {
        $this->conn = $db;
    }
    public function getStudents()
    {
        $sqlQuery = "SELECT id, masv, hodem, ten, gioitinh, ngaysinh, sdt, email, noisinh, cccd, diachi 
                        FROM " . $this->table_db . " ";
        $stmt = $this->conn->prepare($sqlQuery);
        $stmt->execute();
        return $stmt;
    }

    public function getSingleStudent() // show 1 record
    {
        $sqlQuery = "SELECT id, masv, hodem, ten, gioitinh, ngaysinh, sdt, email, noisinh, cccd, diachi 
                         FROM " . $this->table_db . "
                         WHERE id = ? LIMIT 0,1   ";
        $stmt = $this->conn->prepare($sqlQuery);
        $stmt->bindParam(1, $this->id);
        $stmt->execute();
        $dataRow = $stmt->fetch(PDO::FETCH_ASSOC);

        $this->masv = $dataRow['masv'];
        $this->hodem = $dataRow['hodem'];
        $this->ten = $dataRow['ten'];
        $this->gioitinh = $dataRow['gioitinh'];
        $this->ngaysinh = $dataRow['ngaysinh'];
        $this->sdt = $dataRow['sdt'];
        $this->email = $dataRow['email'];
        $this->noicap = $dataRow['noisinh'];
        $this->cccd = $dataRow['diachi'];
    }

    public function createStudents()
    {
        $sqlQuery = "INSERT INTO " . $this->table_db . " 
                     SET 
                        mahs =: mahs, masv =: masv, hodem =: hodem, ten =: ten, gioitinh =: gioitinh, 
                        ngaysinh =: ngaysinh, noisinh =: noisinh, dantoc =: dantoc, tongiao =: tongiao, 
                        cccd =: cccd, ngaycap =: ngapcap, noicap =: noicap, sdt =: sdt, email =: email, 
                        diachi =: diachi, ghichu =: ghichu, khoa =: khoa ";
        $stmt = $this->conn->prepare($sqlQuery);

        $this->mahs = htmlspecialchars(strip_tags($this->mahs)); //clean data
        $this->masv = htmlspecialchars(strip_tags($this->masv));
        $this->hodem = htmlspecialchars(strip_tags($this->hodem));
        $this->ten = htmlspecialchars(strip_tags($this->ten));
        $this->gioitinh = htmlspecialchars(strip_tags($this->gioitinh));
        $this->ngaysinh = htmlspecialchars(strip_tags($this->ngaysinh));
        $this->noisinh = htmlspecialchars(strip_tags($this->noisinh));
        $this->dantoc = htmlspecialchars(strip_tags($this->dantoc));
        $this->tongiao = htmlspecialchars(strip_tags($this->tongiao));
        $this->cccd = htmlspecialchars(strip_tags($this->cccd));
        $this->ngaycap = htmlspecialchars(strip_tags($this->ngaycap));
        $this->noicap = htmlspecialchars(strip_tags($this->noicap));
        $this->sdt = htmlspecialchars(strip_tags($this->sdt));
        $this->email = htmlspecialchars(strip_tags($this->email));
        $this->diachi = htmlspecialchars(strip_tags($this->diachi));
        $this->ghichu = htmlspecialchars(strip_tags($this->ghichu));
        $this->khoa = htmlspecialchars(strip_tags($this->khoa));

        $stmt->bindParam(":mahs", $this->mahs);
        $stmt->bindParam(":masv", $this->masv);
        $stmt->bindParam(":hodem", $this->hodem);
        $stmt->bindParam(":ten", $this->ten);
        $stmt->bindParam(":gioitinh", $this->gioitinh);
        $stmt->bindParam(":ngaysinh", $this->ngaysinh);
        $stmt->bindParam(":noisinh", $this->noisinh);
        $stmt->bindParam(":dantoc", $this->dantoc);
        $stmt->bindParam(":tongiao", $this->tongiao);
        $stmt->bindParam(":cccd", $this->cccd);
        $stmt->bindParam(":ngaycap", $this->ngaycap);
        $stmt->bindParam(":noicap", $this->noicap);
        $stmt->bindParam(":sdt", $this->sdt);
        $stmt->bindParam(":email", $this->email);
        $stmt->bindParam(":diachi", $this->diachi);
        $stmt->bindParam(":ghichu", $this->ghichu);

        if ($stmt->execute()) {
            return true;
        }
        return false;
    }

    public function updateStudents()
    {
        $sqlQuery = "UPDATE" . $this->table_db . " 
                     SET mahs =: mahs, masv =: masv, hodem =: hodem, ten =: ten, gioitinh =: gioitinh, 
                     ngaysinh =: ngaysinh, noisinh =: noisinh, dantoc =: dantoc, tongiao =: tongiao, 
                     cccd =: cccd, ngaycap =: ngapcap, noicap =: noicap, sdt =: sdt, email =: email, 
                     diachi =: diachi, ghichu =: ghichu, khoa =: khoa 
                     WHERE id =:id";

        $stmt = $this->conn->prepare($sqlQuery);

        $this->mahs = htmlspecialchars(strip_tags($this->mahs));
        $this->masv = htmlspecialchars(strip_tags($this->masv));
        $this->hodem = htmlspecialchars(strip_tags($this->hodem));
        $this->ten = htmlspecialchars(strip_tags($this->ten));
        $this->gioitinh = htmlspecialchars(strip_tags($this->gioitinh));
        $this->ngaysinh = htmlspecialchars(strip_tags($this->ngaysinh));
        $this->noisinh = htmlspecialchars(strip_tags($this->noisinh));
        $this->dantoc = htmlspecialchars(strip_tags($this->dantoc));
        $this->tongiao = htmlspecialchars(strip_tags($this->tongiao));
        $this->cccd = htmlspecialchars(strip_tags($this->cccd));
        $this->ngaycap = htmlspecialchars(strip_tags($this->ngaycap));
        $this->noicap = htmlspecialchars(strip_tags($this->noicap));
        $this->sdt = htmlspecialchars(strip_tags($this->sdt));
        $this->email = htmlspecialchars(strip_tags($this->email));
        $this->diachi = htmlspecialchars(strip_tags($this->diachi));
        $this->ghichu = htmlspecialchars(strip_tags($this->ghichu));
        $this->khoa = htmlspecialchars(strip_tags($this->khoa));
        $this->id = htmlspecialchars(strip_tags($this->id));

        $stmt->bindParam(":mahs", $this->mahs);
        $stmt->bindParam(":masv", $this->masv);
        $stmt->bindParam(":hodem", $this->hodem);
        $stmt->bindParam(":ten", $this->ten);
        $stmt->bindParam(":gioitinh", $this->gioitinh);
        $stmt->bindParam(":ngaysinh", $this->ngaysinh);
        $stmt->bindParam(":noisinh", $this->noisinh);
        $stmt->bindParam(":dantoc", $this->dantoc);
        $stmt->bindParam(":tongiao", $this->tongiao);
        $stmt->bindParam(":cccd", $this->cccd);
        $stmt->bindParam(":ngaycap", $this->ngaycap);
        $stmt->bindParam(":noicap", $this->noicap);
        $stmt->bindParam(":sdt", $this->sdt);
        $stmt->bindParam(":email", $this->email);
        $stmt->bindParam(":diachi", $this->diachi);
        $stmt->bindParam(":ghichu", $this->ghichu);
        $stmt->bindParam(":id", $this->id);

        if ($stmt->execute()) {
            return true;
        }
        return false;
    }

    public function delStudents()
    {
        $sqlQuery = "DELETE FROM " . $this->table_db . " WHERE id = ?";
        $stmt = $this->conn->prepare($sqlQuery);

        $this->id = htmlspecialchars(strip_tags($this->id));

        $stmt->bindParam(1, $this->id);

        if ($stmt->execute()) {
            return true;
        }
        return false;
    }
}
