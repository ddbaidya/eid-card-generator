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
    <link href="{{ asset('assets/cropper.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/custom3.css') }}" rel="stylesheet">

    <title></title>
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

<body class="card-page">
    <form class="container-fluid" action="{{ route('card.store') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-md-12">
                <a href="{{ route('home') }}"><img class="logo m-3 m-md-5" src="{{ asset('images/logo.png') }}" width="60" /></a>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-6 col-sm-12">
                <div class="mb-3 d-flex justify-content-center">
                    <div class="did-floating-label-content">
                        <input class="d-none" type="file" id="profile_photo">
                        <input class="d-none" type="text" id="upload_file" name="profile_photo">
                        <label class="rounded-circle p-3 profile-image-border profile-image-not-selected" for="profile_photo" id="image-preview">
                            <img src="{{ asset('images/icon/profile-photo-icon.png') }}" />
                        </label>
                    </div>
                </div>
                @if ($errors->any())
                    <ul class="mb-3">
                        @forelse ($errors->all() as $error)
                            <li class="m-auto d-block w-90 text-danger">{{ $error }}</li>
                        @empty
                        @endforelse
                    </ul>
                @endif
                <div class="mb-3 d-flex justify-content-center">
                    <div class="did-floating-label-content w-75">
                        <input class="did-floating-input" type="text" placeholder=" " name="name" value="{{ old('name') }}">
                        <label class="did-floating-label">নাম </label>
                    </div>
                </div>
                <div class="mb-3 d-flex justify-content-center">
                    <div class="did-floating-label-content w-75">
                        <input class="did-floating-input" type="text" placeholder=" " name="designation" value="{{ old('designation') }}">
                        <label class="did-floating-label">পদবী/স্পেশালিটি </label>
                    </div>
                </div>
                <div class="mb-3 d-flex justify-content-center">
                    <div class="did-floating-label-content w-75">
                        <input class="did-floating-input" type="text" placeholder=" " name="org" value="{{ old('org') }}">
                        <label class="did-floating-label">ঠিকানা/প্রতিষ্ঠান </label>
                    </div>
                </div>
                <div class="mb-3 d-flex justify-content-center">
                    <div class="did-floating-label-content w-75">
                        <input class="did-floating-input" type="text" placeholder=" " name="greetings_giver" value="{{ old('greetings_giver') }}">
                        <label class="did-floating-label">শুভেচ্ছা দাতা </label>
                    </div>
                </div>
                <div class="mb-3 d-flex justify-content-center">
                    <div class="did-floating-label-content w-75">
                        <input class="did-floating-input" type="text" placeholder=" " name="greetings_giver_org" value="{{ old('greetings_giver_org') }}">
                        <label class="did-floating-label">ঠিকানা/প্রতিষ্ঠান </label>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="mt-3">
                    <h1 class="text-center select-card-btn">কার্ড নির্বাচন করুন</h1>
                </div>
                <ul class="card-list p-0 row">
                    <li class="col-6 col-md-4 p-0">
                        <input type="radio" name="card" id="cb1" value="1" />
                        <label for="cb1"><img src="{{ asset('images/frame/frame-1.png') }}" /></label>
                    </li>
                    <li class="col-6 col-md-4 p-0">
                        <input type="radio" name="card" id="cb2" value="2" />
                        <label for="cb2"><img src="{{ asset('images/frame/frame-2.png') }}" /></label>
                    </li>
                    <li class="col-6 col-md-4 mx-auto p-0">
                        <input type="radio" name="card" id="cb3" value="3" />
                        <label for="cb3"><img src="{{ asset('images/frame/frame-3.png') }}" /></label>
                    </li>
                </ul>
                <div class="d-flex justify-content-center mb-5">
                    <button class="btn next-btn">পরবর্তী</button>
                </div>
            </div>
        </div>

    </form>
    <div class="container">
        <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="img-container">
                            <div class="row">
                                <img id="image" src="https://avatars0.githubusercontent.com/u/3456749" />
                            </div>
                        </div>
                    </div>
                    <div class="pb-2 mx-auto">
                        <button type="button" class="btn next-btn" id="crop">পরবর্তী</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets/cropper.min.js') }}"></script>
    <script src="{{ asset('assets/custom3.js') }}"></script>
    <script>
        var bs_modal = $("#modal");
        var image = document.getElementById("image");
        var cropper, reader, file;

        $("body").on("change", "#profile_photo", function(e) {
            console.log(90);
            var files = e.target.files;
            var done = function(url) {
                image.src = url;
                bs_modal.modal("show");
            };

            if (files && files.length > 0) {
                file = files[0];

                if (URL) {
                    done(URL.createObjectURL(file));
                } else if (FileReader) {
                    reader = new FileReader();
                    reader.onload = function(e) {
                        done(reader.result);
                    };
                    reader.readAsDataURL(file);
                }
            }
        });

        bs_modal
            .on("shown.bs.modal", function() {
                cropper = new Cropper(image, {
                    aspectRatio: 1,
                    viewMode: 3,
                    preview: ".preview",
                });
            })
            .on("hidden.bs.modal", function() {
                cropper.destroy();
                cropper = null;
            });

        $("#crop").click(function() {
            canvas = cropper.getCroppedCanvas({
                width: 400,
                height: 400,
            });

            canvas.toBlob(function(blob) {
                url = URL.createObjectURL(blob);
                var reader = new FileReader();
                reader.readAsDataURL(blob);
                reader.onloadend = function() {
                    var base64data = reader.result;
                    uploadImage(base64data);

                    console.log("Image Cropped!!");
                    bs_modal.modal("hide");
                    document.getElementById("image-preview").classList.remove("profile-image-not-selected");
                    const image = document.createElement("img");
                    image.src = base64data;
                    const imagePreview = document.getElementById("image-preview");
                    imagePreview.innerHTML = "";
                    imagePreview.appendChild(image);
                    $("#profile_photo").val(base64data);
                    previewImage();
                };
            });
        });

        function uploadImage(img) {
            $.ajax({
                url: "{{ route('image.upload') }}",
                type: "post",
                headers: {
                    'X-CSRF-TOKEN': "{{ csrf_token() }}"
                },
                data: {
                    _token: "{{ csrf_token() }}",
                    image: img
                },
                success: function(response) {
                    $("#upload_file").val(response.filename);
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.log(textStatus, errorThrown);
                }
            });
        }
    </script>
</body>

</html>
