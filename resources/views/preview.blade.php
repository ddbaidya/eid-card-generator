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
    <link href="{{ asset('assets/custom1.css') }}" rel="stylesheet">

    <title>ঈদ মোবারক </title>
</head>

<body class="preview d-flex mt-5" style="height: 100vh">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <a href="{{ route('home') }}"><img class="logo m-3 m-md-5 m-auto d-block mb-3" src="{{ asset('images/logo.png') }}" width="60" /></a>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <img src="{{ asset('images/frame/frame-0') }}{{ $card->card }}.png" style="width: 95%; display:block; margin: 5% auto;" />
                <img class="profile-photo" src="{{ $card->profile_photo }}" />
            </div>
            <div class="overly-text w-90">
                <h3 class="m-0" style="{{ $card->card == 1 ? '' : 'color:#f39b31' }}">{{ $card->name }}</h3>
                <h4 class="fs-6" style="{{ $card->card == 1 ? '' : 'color:#f39b31' }}">{{ $card->designation }}, {{ $card->org }}</h4>
                <h4 class="mt-5" style="{{ $card->card == 1 ? '' : 'color:#f39b31' }}">{{ $card->greetings_giver }}, {{ $card->greetings_giver_org }}</h4>
            </div>
            <div class="col-sm-12 col-md-6 d-flex d-md-block justify-content-around share-btn">
                <button class="btn btn-success d-flex align-items-center"> <img src='{{ asset('images/icon/download-48.png') }}' width="15" class="me-1" /> Download Now</button>
                <button class="btn btn-primary"><img src='{{ asset('images/icon/fb-48.png') }}' width="15" class="me-1" /> Share On Facebook</button>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets/custom1.js') }}"></script>
</body>

</html>
