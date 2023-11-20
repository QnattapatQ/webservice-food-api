<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ชื่ออาหาร</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body {
            background: linear-gradient(90deg,#e52e71,#ff8a00);
        }

        .box-detail {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: rgba(255, 255, 255, 0.2);
            border-radius: 16px;
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(5px);
            -webkit-backdrop-filter: blur(5px);
            border: 1px solid rgba(255, 255, 255, 0.3);
            width: 350px;
        }

        .slider-thumb::before {
            position: absolute;
            content: "";
            left: 35%;
            top: 20%;
            width: 650px;
            height: 650px;
            background: linear-gradient(90deg,#e52e71,#ff8a00);
            border-radius: 62% 47% 82% 35% / 45% 45% 80% 66%;
            will-change: border-radius, transform, opacity;
            animation: sliderShape 5s linear infinite;
            display: block;
            z-index: -1;
            -webkit-animation: sliderShape 5s linear infinite;
        }

        @keyframes sliderShape{
            0%,100%{
                border-radius: 42% 58% 70% 30% / 45% 45% 55% 55%;
                transform: translate3d(0,0,0) rotateZ(0.01deg);
            }
            34%{
                border-radius: 70% 30% 46% 54% / 30% 29% 71% 70%;
                transform:  translate3d(0,5px,0) rotateZ(0.01deg);
            }
            50%{
                transform: translate3d(0,0,0) rotateZ(0.01deg);
            }
            67% {
                border-radius: 100% 60% 60% 100% / 100% 100% 60% 60% ;
                transform: translate3d(0,-3px,0) rotateZ(0.01deg);
            }
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="row mt-5">
            <div class="col-5 mx-auto">
                <div class="box-detail card shadow text-center p-2 rounded-3">
                    <h2 class="text-light">ไม่มีข้อมูล</h2>
                    <a href="index.php" class="btn btn-danger mt-4">ย้อนกลับ</a>
                </div>
            </div>
        </div>
        <div class="slider-thumb"></div>
    </div>
    
</body>
</html>