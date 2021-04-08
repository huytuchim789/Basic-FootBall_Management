<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="edit.css">
</head>
<body>
<?php
$id = $_GET['id'];
//Kết nối databse
$con = mysqli_connect('localhost', 'root', 'huytu291168', 'new_schema', '3306');
//Viết câu SQL lấy tất cả dữ liệu trong bảng players
$sql="SELECT * FROM new_schema.players WHERE id= ".$id;
//Chạy câu SQL
$result=mysqli_query($con,$sql);
//Gắn dữ liệu lấy được vào mảng $data
if($result)
    echo "run";
$info=array();
while ($row=mysqli_fetch_assoc($result)) {
    $info= $row;
}
print_r($info);
?>
<form action="process.php?id=<?php $info['id']?>" method="POST">
    <h1>Chỉnh sửa thông tin cầu thủ</h1>
    <div class="form-group">
        <input type="text" name="name" value="<?php echo $info['name'] ?>"><span>Tên cầu thủ: </span>
    </div>
    <div class="form-group">
        <input type="text" name="age" value="<?php echo $info['age'] ?>"><span>Tuổi: </span>
    </div>
    <div class="form-group">
        <input type="text" name="national" value="<?php echo $info['national'] ?>"><span>Quốc tịch: </span>
    </div>
    <div class="form-group">
        <input type="text" name="position" value="<?php echo $info['position'] ?>"><span>Vị trí: </span>
    </div>
    <div class="form-group">
        <input type="text" name="salary" value="<?php echo $info['salary'] ?>"><span>Lương: </span>
    </div>
    <div class="form-group">
        <button type="submit">Cập nhật</button>
        <button type="reset">Reset</button>
        <a href="index.php"><button type="button">Cancel</button></a>
    </div>
</form>
</body>
</html>
