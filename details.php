<?php 

    require_once 'config.php';

    if (isset($_POST['submit'])) {
        $province = $_POST['search'];
        $sql = "SELECT * FROM foods WHERE provinceName = :province";
        $stmt = $conn->prepare($sql);
        $stmt->execute(['province' => $province]);
        $row = $stmt->fetch();
    } else {
        header("location: index.php");
        exit();
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        @keyframes color {
        0%   { background: #33CCCC; }
        20%  { background: #33CC36; }
        40%  { background: #B8CC33; }
        60%  { background: #FCCA00; }
        80%  { background: #33CC36; }
        100% { background: #33CCCC; }
        }

        body {
            background: #33CCCC; /* Fallback */
            animation: color 9s infinite linear;
        }

        .img-food {
            object-fit: cover;
            width: 100%;
            height: 100%
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="row mt-5">
            <div class="col-5 mx-auto">
                <div class="card shadow text-center p-2 bg-dark bg-gradient rounded-3">
                <h5 class="text-light"><?= $row['id'] ?>. อาหารประจำจังหวัด <strong><?= $row['provinceName'] ?></strong> คือ</h5>
                    <div class="card-body">

                        <img class="img-food" src="<?= $row['imgFood'] ?>" />
                        <h5 class="mt-2 text-light">ชื่ออาหาร : <?= $row['nameFood'] ?></h5>

                    </div>
                    <a href="index.php" class="btn btn-danger">ย้อนกลับ</a>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>