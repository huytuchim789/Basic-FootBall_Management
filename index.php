<!DOCTYPE html>
<html>
<head>
    <title>FootBall Manager</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="index.css">
</head>
<body>
<?php


?>
<table>
    <thead role="row">
    <tr>
        <th>ID</th>
        <th>Tên Cầu Thủ</th>
        <th>Tuổi</th>
        <th>Quốc tịch</th>
        <th>Vị trí</th>
        <th>Lương</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
    </thead>
    <tbody> <!--in ra màn hình -->
    <?php
    include 'read.php';
    ?>
    </tbody>
    <tfoot>
    <tr>
       <td colspan="8">
           <a href="add.php"><button id="button">Thêm</button></a>
       </td>
    </tr>
    </tfoot>
</table>
</body>
</html>