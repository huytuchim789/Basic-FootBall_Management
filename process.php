<?php
$errors=array();
$data=$_POST;
//Validate name
if (!is_string($data['name']) || strlen($data['name']) < 5
    || strlen($data['name']) > 55) {
    $errors['name'] = $data['name'] . "Tên cầu thủ không hợp lệ!";
}
//Validate age
if (!is_numeric($data['age']) || $data['age'] < 0 || $data['age'] > 150) {
    $errors['age'] = "Tuổi không hợp lệ!";
}
//Validate national
if (!is_string($data['national']) || strlen($data['national']) < 2
    || strlen($data['national']) > 55) {
    $errors['national'] = "Quốc tịch không hợp lệ!";
}
//Validate position
if (!is_string($data['position']) || strlen($data['position']) < 2
    || strlen($data['position']) > 10) {
    $errors['position'] = "Vị trí không hợp lệ!";
}
//Validate salary
if (!is_numeric($data['salary']) || $data['salary'] < 0 || $data['salary'] > 1000000) {
    $errors['salary'] = "Lương không hợp lệ!";
}
if(count($errors)>0){
    $err_str='<ul>';
    foreach ($errors as $error) {
        $err_str.='<li>'.$error.'</li>';
    }
    echo $err_str;
    }
if(!isset($_GET['id']))
    {
    $con = mysqli_connect('localhost', 'root', 'huytu291168', 'new_schema', '3306');

    $sql="INSERT INTO PLAYERS(name, age, national, position,salary) VALUES('$data[name]',$data[age],'$data[national]','$data[position]',$data[salary])";
    echo $sql;
    $result=mysqli_query($con,$sql);
        if($result) {
            echo "<h1>Thêm thành công ấn vào <a href='index.php'>đây</a></h1>";
        }
        else{
            echo "<h1>Thêm thất bại ấn vào <a href='index.php'>đây</a></h1>";

        }
    }else{
    //Chỉnh sửa thông tin
    //Kết nối databse
    $con = mysqli_connect('localhost', 'root', 'huytu291168', 'new_schema', '3306');
    //Viết câu SQL lấy tất cả dữ liệu trong bảng players
    $sql = "UPDATE new_schema.players SET name='".$data['name']."',age=".$data['age'].",national='".$data['national']."',position='".$data['position']."',salary=".$data['salary']." WHERE id = ".$_GET['id'];
    // Chạy câu SQL
    echo $sql;
    if ($result = mysqli_query($con,$sql)) {
        echo "<h1>Chỉnh sửa thông tin cầu thủ thành công Click vào <a href='index.php'>đây</a> để về trang danh sách</h1>";
    }else{
        echo "<h1>Có lỗi xảy ra Click vào <a href='index.php'>đây</a> để về trang danh sách</h1>";
    }
}
