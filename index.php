<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<style>
    table{
        border-collapse: collapse;
        width:100%;
    }
    th, td{
        padding: 8px;
        border: 1px solid pink;
        text-align: center;
    }
</style>
<table>
    <caption><h2>Danh sach khach hang</h2></caption>
    <tr>
        <th>STT</th>
        <th>Ten</th>
        <th>Ngay sinh</th>
        <th>Dia chi</th>
        <th>Anh</th>
    </tr>
    <?php
    $customerlist = array(
      "1"  => array("ten" => "Nguyen Thi Thu Hang",
                    "ngaysinh" => "17-11-1998",
                    "diachi" => "Ha Noi",
                    "anh" => "images/cat.jpg"),
        "2" => array("ten" => "Nguyen Thi Thu Hang",
            "ngaysinh" => "17-11-1998",
            "diachi" => "Ha Noi",
            "anh" => "images/cat.jpg"),
        "3" => array("ten" => "Nguyen Thi Thu Hang",
                    "ngaysinh" => "17-11-1998",
                    "diachi" => "Ha Noi",
                    "anh" => "images/cat.jpg"),
        "4" => array("ten" => "Nguyen Thi Thu Hang",
            "ngaysinh" => "17-11-1998",
            "diachi" => "Ha Noi",
            "anh" => "images/cat.jpg"),
        "5" => array("ten" => "Nguyen Thi Thu Hang",
            "ngaysinh" => "17-11-1998",
            "diachi" => "Ha Noi",
            "anh" => "images/cat.jpg")
    );
    ?>
    <?php foreach ($customerlist as $key => $values) {?>
        <tr>
            <td><?php echo $key?></td>
            <td><?php echo $values['ten']?></td>
            <td><?php echo $values['ngaysinh']?></td>
            <td><?php echo $values['diachi']?></td>
            <td><image src="<?php echo $values['anh']?>" width="60px" height = "60px"></td>
        </tr>
    <?php }?>
</table>
</body>
</html>
