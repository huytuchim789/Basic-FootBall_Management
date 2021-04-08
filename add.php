<DOCTYPE html>
    <html>
    <head>
       <title>
           add
       </title>
        <link rel="stylesheet" href="add.css">
    </head>
    <body>
    <form action="process.php" method="POST">
        <h1>Thêm Cầu Thủ</h1>
        <table>
            <tbody>
            <tr>
        <div class="form-group">
            <td>
            <span>Tên cầu thủ: </span>
            </td>
            <td>
            <input type="text" name="name">
            </td>
        </div>
            </tr>
            <tr>
        <div class="form-group">
            <td>
            <span>Tuổi: </span>
            </td>
            <td>
            <input type="text" name="age">
            </td>
        </div>
            </tr>
            <tr>
        <div class="form-group">
            <td>
            <span>Quốc tịch: </span>
            </td>
            <td>
            <input type="text" name="national">
            </td>
        </div>
            </tr>
            <tr>
        <div class="form-group">
            <td>
            <span>Vị trí: </span>
            </td>
            <td>
            <input type="text" name="position">
            </td>
        </div>
            </tr>
            <tr>
        <div class="form-group">
            <td>
            <span>Lương: </span>
            </td>
            <td>
            <input type="text" name="salary">
            </td>
        </div>
            </tr>
            </tbody>


        </table>

        <div class="form-group" id="foot">

            <button type="submit">Thêm</button>

            <button type="reset">Reset</button>


            <a href="index.php"><button type="button">Cancle</button></a>

        </div>
    </form>

    </body>
    </html>