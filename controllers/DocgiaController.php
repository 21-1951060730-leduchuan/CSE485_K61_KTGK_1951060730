<?php

require_once 'model/DocgiaModel.php';
class DocgiaController{
    function index(){
        $dgModal = new DocgiaModal();
        $dgonor = $dgModal->getAllDG();
        require_once 'view/Docgia/index.php';
    }
    function admin(){
        $bdModal = new DocgiaModal();
        $dgonor = $bdModal->getAllDG();
        require_once 'view/Docgia/admin.php';
    }
    function add(){
        $error = '';
        if(isset($_POST['submit'])){
            $ten_donvi = $_POST['ten_donvi'];
            $hovaten = $_POST['hovaten'];
            $gioitinh = $_POST['gioitinh'];
            $namsinh = $_POST['namsinh'];
            $nghenghiep = $_POST['nghenghiep'];
            $ngaycapthe = $_POST['ngaycapthe'];
            $ngayhethan = $_POST['ngayhethan'];
            $diachi = $_POST['diachi'];
            if(empty($ten_donvi) || empty($hovaten) || empty($gioitinh) || empty($namsinh) || empty($nghenghiep) ||empty($ngaycapthe)||empty($ngayhethan) ||  empty($diachi)){
                $error = 'Thông tin chưa đầy đủ!';
            }else{
                $gioitinh = $_POST['gioitinh'];
                $dgModal = new DocgiaModal();
                $dgArr = [
                    'ten_donvi' => $ten_donvi,
                    'hovaten' => $hovaten,
                    'gioitinh' => $gioitinh,
                    'namsinh' => $namsinh,
                    'nghenghiep' => $nghenghiep,
                    'ngaycapthe' => $ngaycapthe,
                    'ngayhethan' => $ngayhethan,
                    'diachi' => $diachi,
                ];
                $isAdd = $dgModal->insert($dgArr);
                if ($isAdd) {
                    $TT=  "Thêm mới thành công";
                }
                else {
                    $TT= "Thêm mới thất bại";
                }
                header("Location: index.php?controller=docgia&action=admin&tt=$TT");
                exit();
            }

        }
        require_once 'view/Docgia/add.php';
    }
    function edit(){
        if (!isset($_GET['ten_donvi'])) {
            $_SESSION['error'] = "Tham số không hợp lệ";
            header("Location: index.php?controller=book&action=admin");
            return;
        }
        if (!is_numeric($_GET['ten_donvi'])) {
            $_SESSION['error'] = "Id phải là số";
            header("Location: index.php?controller=book&action=admin");
            return;
        }
        $ten_donvi = $_GET['ten_donvi'];
        $dgModal = new DocgiaModal();
        $BD = $dgModal->getBDById($ten_donvi);
        $error = '';
        if (isset($_POST['submit'])) {
            $ten_donvi = $_POST['ten_donvi'];
            $hovaten = $_POST['hovaten'];
             $gioitinh = $_POST['gioitinh'];
            $namsinh = $_POST['namsinh'];
            $nghenghiep= $_POST['nghenghiep'];
            $ngaycapthe = $_POST['ngaycapthe'];
            $ngayhethan = $_POST['ngayhethan'];
            $diachi = $_POST['diachi'];
            if(empty($ten_donvi) || empty($hovaten) || empty($gioitinh) || empty($namsinh) || empty($nghenghiep) ||empty($ngaycapthe)||empty($ngayhethan) ||  empty($diachi)){
                $error = 'Thông tin chưa đầy đủ!';
            }
            else {
                
                //xử lý update dữ liệu vào hệ thống
                $gioitinh = $_POST['gioitinh'];
                $dgModal = new DocgiaModal();
                $dgArr = [
                    'ten_donvi' => $ten_donvi,
                    'hovaten' => $hovaten,
                    'gioitinh' => $gioitinh,
                    'namsinh' => $namsinh,
                    'nghenghiep' => $nghenghiep,
                    'ngaycapthe' => $ngaycapthe,
                    'ngayhethan' => $ngayhethan,
                    'diachi' => $diachi,
                ];
                $isAdd = $dgModal->update($dgArr);

                if ($isAdd) {
                    $TT= "Sửa thành công";
                }
                else {
                    $TT = "Sửa thất bại";
                }
                header("Location: index.php?controller=docgia&action=admin&tt=$TT");
                exit();
            }
        }
        require_once 'view/Docgia/edit.php';
    }
    function delete(){
        $ten_donvi = $_GET['ten_donvi'];
        if (!is_numeric($ten_donvi)) {
            header("Location: index.php?controller=book&action=index");
            exit();
        }
        $dgModal = new DocgiaModal();
        $isDelete = $dgModal->delete($ten_donvi);
        if ($isDelete) {
            //chuyển hướng về trang liệt kê danh sách
            //tạo session thông báo mesage
            $TT=  "Xóa bản ghi thành công";
        }
        else {
            //báo lỗi
            $TT = "Xóa bản ghi thất bại";
        }
        header("Location: index.php?controller=docgia&action=admin&tt=$TT");
        exit();
    }
}

?>