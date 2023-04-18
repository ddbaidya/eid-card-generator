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
    <link href="{{ asset('assets/custom.css?v=') }}{{ uniqid() }}" rel="stylesheet">

    <title>ঈদ মোবারক</title>
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
                        <label for="cb1"><img src="{{ asset('images/frame/frame-1.png?v=') }}{{ uniqid() }}" /></label>
                    </li>
                    <li class="col-6 col-md-4 p-0">
                        <input type="radio" name="card" id="cb2" value="2" />
                        <label for="cb2"><img src="{{ asset('images/frame/frame-2.png?v=') }}{{ uniqid() }}" /></label>
                    </li>
                    <li class="col-6 col-md-4 mx-auto p-0">
                        <input type="radio" name="card" id="cb3" value="3" />
                        <label for="cb3"><img src="{{ asset('images/frame/frame-3.png?v') }}{{ uniqid() }}" /></label>
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
    <script src="{{ asset('assets/custom.js?v=') }}{{ uniqid() }}"></script>
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
