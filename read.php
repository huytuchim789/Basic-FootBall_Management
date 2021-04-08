<?php

$con = mysqli_connect('localhost', 'root', 'huytu291168', 'new_schema', '3306');
if (empty($con)) {
    echo "Cant connect to dtbase";
} else {
    $sql = "SELECT * FROM new_schema.players order by id;";
    $result = mysqli_query($con, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }
    $html = '';
    foreach ($data as $value) {
        $html .= '
            <tr style="border: 1px solid" role="row">
                <td>' . $value['id'] . '</td>
                <td>' . $value['name'] . '</td>
                <td>' . $value['age'] . '</td>
                <td>' . $value['national'] . '</td>
                <td>' . $value['position'] . '</td>
                <td>' . $value['salary'] . '$</td>
                <td><a href="edit.php?id=' . $value['id'] . '">Edit</a></td>
                <td><a href="delete.php?id=' . $value['id'] . '">Delete</a></td>
                </tr>';
    }
    echo $html;
}
?>
