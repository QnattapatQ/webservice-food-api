<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>

        body {
            background: linear-gradient(90deg,#e52e71,#ff8a00);
        }

        .input-value {
            background: linear-gradient(90deg,#e52e71,#ff8a00);
            outline: none;
            border: none;
            width: 100%;
            padding: 15px;
            color: white;
            caret-color: while;
        }

        .box-text {
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
        }

        .slider-thumb::before {
            position: absolute;
            content: "";
            left: 35%;
            top: 20%;
            width: 450px;
            height: 450px;
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
    <h1 class="text-center font-weight-bold text-light" id="topic"></h1>
        <div class="row mt-4">
            <div class="box-text col-md-4 mx-auto rounded p-4">

                <form action="details.php" method="POST" class="p-3" style="position: relative;">
                    <div>
                        <input class="input-value" type="text" name="search" id="search" class="form-control form-control-lg border-info rounded-0" placeholder="Search something..." autocomplete="off" required>
                        <div class="input-group-append mt-3">
                            <input style="width: 100%;" type="submit" name="submit" value="ค้นหา" class="btn btn-danger btn-lg rounded-3">
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="list-group" style="position: absolute; width: 100%; height: 250px; overflow-y: auto;" id="show-list"></div>
                    </div>
                </form>
            </div>
        </div>
        <div class="slider-thumb"></div>
    </div>
    


    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
    <script src="main.js"></script>

    <script>
        var typed = new Typed('#topic', {
            strings: ['ค้นหาอาหารด้วยชื่อจังหวัดของคุณ'],
            typeSpeed: 100,
            cursorChar: '',
            backSpeed: 50,
            loop: true
        });
    </script>

</body>
</html>