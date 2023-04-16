<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('assets/custom.css') }}" rel="stylesheet">

    <title>ঈদ মোবারক । সানফার্মা</title>
</head>

<body class="home">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <img class="logo m-3 m-md-5" src="{{ asset('images/logo.png') }}" width="60" />
            </div>
        </div>
        <div class="row d-md-flex align-items-center" style="margin-top: 10vh">
            <div class="col-md-6 col-sm-12 d-flex justify-content-center nimonic">
                <img src="{{ asset('images/eid-mubarak-01.png') }}" class="w-75" />
            </div>
            <div class="col-md-6 col-sm-12 text-center">
                <h1>নতুন সকাল, নতুন দিন <br>শুভ হোক ঈদের দিন</h1>
                <button class="btn btn-danger mt-2">শুভেচ্ছা কার্ড তৈরী করুন</button>
            </div>
        </div>
        <img src="{{ asset('images/star.png') }}" class="star" />
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets/custom.js') }}"></script>
</body>

</html>
