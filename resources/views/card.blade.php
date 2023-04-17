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
    <link href="{{ asset('assets/custom.css') }}" rel="stylesheet">

    <title></title>
</head>

<body class="card-page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <img class="logo m-3 m-md-5 d-none" src="{{ asset('images/logo.png') }}" width="60" />
                <img class="logo m-3 m-md-5" src="https://atecglobal-data.com/assets/img/logo/color.png" width="80" />
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-6 col-sm-12">
                <div class="mb-3 d-flex justify-content-center">
                    <div class="did-floating-label-content w-75">
                        <input class="did-floating-input" type="text" placeholder=" ">
                        <label class="did-floating-label">নাম </label>
                    </div>
                </div>
                <div class="mb-3 d-flex justify-content-center">
                    <div class="did-floating-label-content w-75">
                        <input class="did-floating-input" type="text" placeholder=" ">
                        <label class="did-floating-label">পদবী/স্পেশালিটি </label>
                    </div>
                </div>
                <div class="mb-3 d-flex justify-content-center">
                    <div class="did-floating-label-content w-75">
                        <input class="did-floating-input" type="text" placeholder=" ">
                        <label class="did-floating-label">ঠিকানা/প্রতিষ্ঠান </label>
                    </div>
                </div>
                <div class="mb-3 d-flex justify-content-center">
                    <div class="did-floating-label-content w-75">
                        <input class="did-floating-input" type="text" placeholder=" ">
                        <label class="did-floating-label">শুভেচ্ছা দাতা </label>
                    </div>
                </div>
                <div class="mb-3 d-flex justify-content-center">
                    <div class="did-floating-label-content w-75">
                        <input class="did-floating-input" type="text" placeholder=" ">
                        <label class="did-floating-label">ঠিকানা/প্রতিষ্ঠান </label>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <div>
                    <h1 class="text-center select-card-btn">কার্ড নির্বাচন করুন</h1>
                </div>
                <ul class="card-list p-0">
                    <li>
                        <input type="radio" name="test" id="cb2" />
                        <label for="cb2"><img src="https://e-cook-production.s3.ap-southeast-1.amazonaws.com/public/images/profile/1676863462.png" /></label>
                    </li>
                    <li>
                        <input type="radio" name="test" id="cb1" />
                        <label for="cb1"><img src="https://atecglobal-data.com/assets/img/logo/color.png" /></label>
                    </li>
                    <li>
                        <input type="radio" name="test" id="cb3" />
                        <label for="cb3"><img src="https://e-cook-production.s3.ap-southeast-1.amazonaws.com/public/images/profile/1677753538.jpg" /></label>
                    </li>
                </ul>
                <div class="d-flex justify-content-center mb-5">
                    <button class="btn build-btn">তৈরী করুন</button>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets/custom.js') }}"></script>
</body>

</html>
