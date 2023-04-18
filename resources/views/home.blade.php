<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('assets/custom3.css') }}" rel="stylesheet">

    <title>ঈদ মোবারক </title>
    <style>
        @font-face {
            font-family: "Kongshomj";
            src: url("/assets/fonts/KongshoMJRegular.ttf") format("truetype");
            font-weight: normal;
            font-style: normal;
        }

        html,
        body {
            font-family: "Hind Siliguri", sans-serif;
        }

        .fs-35px {
            font-size: 35px !important;
        }

        .w-33 {
            width: 33.3333%;
        }

        .home {
            background: url("/images/bg-01.png");
            background-size: cover;
        }

        .w-90 {
            width: 90%;
        }

        .home .star {
            position: absolute;
            top: -15vh;
            width: 50vw;
            right: 0;
            z-index: -999;
        }

        @media screen and (max-width: 768px) {
            .home .nimonic {
                margin-top: 5vh;
                margin-bottom: 13vh !important;
            }

            .home .star {
                position: absolute;
                top: 0px;
                width: 65vw;
                right: 14px;
                z-index: -999;
            }
        }

        @keyframes bop {
            0% {
                transform: scale(0.9);
            }

            80%,
            100% {
                transform: scale(1) rotateZ(0deg);
            }
        }

        @keyframes fly-cycle {
            100% {
                background-position: -900px 0;
            }
        }

        .home .get-start {
            background-color: #000e14;
            background-image: linear-gradient(to right, #000e14, #023a54, #000e14);
            border: white 3px solid;
            padding: 2vh 8vw;
            padding-top: 2.6vh;
            font-weight: bolder;
            font-size: 25px;
            border-radius: 50px;
            animation: bop 1s 0.2s cubic-bezier(0.175, 0.885, 0.32, 1.275) forwards infinite alternate;
            position: relative;
        }

        .home .get-start::before {
            content: "";
            position: absolute;
            inset: 0;
            border-radius: 50px;
            padding: 3px;
            background: linear-gradient(to right, #d9b34b, #846c2c, #d9b34b, #846c2c, #d9b34b);
            -webkit-mask: linear-gradient(#fff 0 0) content-box, linear-gradient(#fff 0 0);
            -webkit-mask-composite: xor;
            mask-composite: exclude;
        }

        .card-page {
            background: url("/images/bg-03.png");
            background-size: cover;
        }

        .did-floating-label-content {
            position: relative;
        }

        .did-floating-label {
            color: #1e4c82;
            font-size: 19px;
            font-weight: normal;
            position: absolute;
            pointer-events: none;
            left: 15px;
            top: 11px;
            padding: 0 5px;
            background: #fff;
            transition: 0.2s ease all;
            -moz-transition: 0.2s ease all;
            -webkit-transition: 0.2s ease all;
        }

        .did-floating-input {
            font-size: 19px;
            display: block;
            width: 100%;
            height: 45px;
            padding: 0 20px;
            background: #fff;
            color: #323840;
            border: 1px solid #3d85d8;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .did-floating-input:focus {
            outline: none;
        }

        .did-floating-input:focus~.did-floating-label {
            top: -8px;
            font-size: 13px;
        }

        .did-floating-input:not(:placeholder-shown)~.did-floating-label {
            top: -8px;
            font-size: 13px;
        }

        .card-page .card-list ul {
            list-style-type: none;
        }

        .card-page .card-list li {
            display: block;
        }

        .card-page .card-list input[type="radio"][id^="cb"] {
            display: none;
        }

        .card-page .card-list label {
            border: 1px solid #fff;
            padding: 10px;
            display: block;
            position: relative;
            margin: 10px;
            cursor: pointer;
        }

        .card-page .card-list label:before {
            background-color: white;
            color: white;
            content: " ";
            display: block;
            border-radius: 50%;
            border: 1px solid grey;
            position: absolute;
            top: -5px;
            left: -5px;
            width: 25px;
            height: 25px;
            text-align: center;
            line-height: 28px;
            transition-duration: 0.4s;
            transform: scale(0);
        }

        .card-page .card-list label img {
            height: auto;
            width: 100%;
            transition-duration: 0.2s;
            transform-origin: 50% 50%;
        }

        .card-page .card-list :checked+label {
            border-color: #ddd;
        }

        .card-page .card-list :checked+label:before {
            content: "✓";
            background-color: grey;
            transform: scale(1);
        }

        .card-page .card-list :checked+label img {
            transform: scale(0.9);
            box-shadow: 0 0 5px #333;
            z-index: -1;
        }

        .select-card-btn {
            background-color: #ffe47e;
            background-image: linear-gradient(to right, #ffe47e, #fffdb2, #ffe47e);
            border: white 3px solid;
            font-weight: bolder;
            font-size: 25px;
            border-radius: 50px;
            width: 75%;
            padding: 3%;
            margin: auto;
        }

        .card-page .build-btn {
            background-color: #000e14;
            background-image: linear-gradient(to right, #000e14, #023d59, #000e14);
            border: white 3px solid;
            padding: 2vh 8vw;
            padding-top: 2.6vh;
            font-weight: bolder;
            font-size: 25px;
            border-radius: 50px;
            animation: bop 1s 0.2s cubic-bezier(0.175, 0.885, 0.32, 1.275) forwards infinite alternate;
            color: white;
            position: relative;
        }

        .card-page .build-btn::before {
            content: "";
            position: absolute;
            inset: 0;
            border-radius: 50px;
            padding: 3px;
            background: linear-gradient(to right, #d9b34b, #846c2c, #d9b34b, #846c2c, #d9b34b);
            -webkit-mask: linear-gradient(#fff 0 0) content-box, linear-gradient(#fff 0 0);
            -webkit-mask-composite: xor;
            mask-composite: exclude;
        }

        .preview {
            background: url("/images/bg-03.png");
            background-size: cover;
        }

        #image-preview img {
            width: 100%;
            max-width: 150px;
            border-radius: 50%;
        }

        .profile-image-border {
            border: 5px solid #d9b34b;
        }

        .profile-image-not-selected {
            animation: bop 1s 0.2s cubic-bezier(0.175, 0.885, 0.32, 1.275) forwards infinite alternate;
        }

        .next-btn,
        .next-btn:focus,
        .next-btn:active {
            background-color: #000e14;
            background-image: linear-gradient(to right, #000e14, #023d59, #000e14);
            border: white 3px solid;
            padding: 1vh 8vw;
            font-weight: bolder;
            font-size: 25px;
            border-radius: 50px;
            animation: bop 1s 0.2s cubic-bezier(0.175, 0.885, 0.32, 1.275) forwards infinite alternate;
            color: white;
            position: relative;
        }

        .next-btn::before {
            content: "";
            position: absolute;
            inset: 0;
            border-radius: 50px;
            padding: 3px;
            background: linear-gradient(to right, #d9b34b, #846c2c, #d9b34b, #846c2c, #d9b34b);
            -webkit-mask: linear-gradient(#fff 0 0) content-box, linear-gradient(#fff 0 0);
            -webkit-mask-composite: xor;
            mask-composite: exclude;
        }
    </style>
</head>

<body class="home">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <a href="{{ route('home') }}"><img class="logo m-3 m-md-5" src="{{ asset('images/logo.png') }}" width="60" /></a>
            </div>
        </div>
        <div class="row d-md-flex align-items-center" style="margin-top: 10vh">
            <div class="col-md-6 col-sm-12 d-flex justify-content-center nimonic">
                <img src="{{ asset('images/eid-mubarak-01.png') }}" class="w-75" />
            </div>
            <div class="col-md-6 col-sm-12 text-center">
                <h1 class="fs-35px">নতুন সকাল, নতুন দিন <br>শুভ হোক ঈদের দিন</h1>
                <a class="btn btn-danger mt-2 get-start" href="{{ route('card.home') }}">শুভেচ্ছা কার্ড তৈরী করুন</a>
            </div>
        </div>
        <img src="{{ asset('images/star.png') }}" class="star" />
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets/custom3.js') }}"></script>
</body>

</html>
