<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:image" content="" id="og-image" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;300;400;700;900&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('assets/custom3.css') }}" rel="stylesheet">

    <title>ঈদ মোবারক </title>
</head>

<body class="preview d-flex mt-5" style="height: 100vh">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <a href="{{ route('home') }}"><img class="logo m-3 m-md-5 m-auto d-block mb-3" src="{{ asset('images/logo.png') }}" width="60" /></a>
            </div>
        </div>
        <div class="row" id="final-card">
            <div class="col-sm-12 col-md-6">
                <img src="{{ asset('images/frame/frame-') }}{{ $card->card }}.png" style="width: 95%; display:block; margin: 5% auto;" />
                <img class="profile-photo" src="{{ $card->profile_photo }}" />
            </div>
            <div class="overly-text w-90">
                <h3 class="m-0" style="{{ $card->card == 1 ? '' : 'color:#f39b31' }}" id="input-name">{{ $card->name }}</h3>
                <h4 class="fs-6" style="{{ $card->card == 1 ? '' : 'color:#f39b31' }}" id="input-org">{{ $card->designation }}, {{ $card->org }}</h4>
                <h4 class="text-greetings-giver" style="{{ $card->card == 1 ? '' : 'color:#f39b31' }}" id="input-greetings-giver">{{ $card->greetings_giver }}, {{ $card->greetings_giver_org }}</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-6 d-flex d-md-block justify-content-around share-btn">
                <button class="btn btn-success d-flex align-items-center" onclick="download()"> <img src='{{ asset('images/icon/download-48.png') }}' width="15" class="me-1" /> Download Now</button>
                <button class="btn btn-primary" onclick="shareOnFacebook()"><img src='{{ asset('images/icon/fb-48.png') }}' width="15" class="me-1" /> Share On Facebook</button>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets/custom3.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.0/html2canvas.min.js"></script>
    <script>
        function fontDetectedAndChange(element) {
            var userInput = document.getElementById(element).textContent; // get the user input text
            var script = /[^\u0000-\u007F]/.test(userInput) ? 'Bengali' : 'English'; // detect the script of the user input
            console.log(script);
            var font = script === 'Bengali' ? 'Hind Siliguri' : 'Lato'; // set the appropriate font family based on the script
            document.getElementById(element).style.fontFamily = font; // apply the font family to the h1 element
        }
        fontDetectedAndChange("input-name");
        fontDetectedAndChange("input-org");
        fontDetectedAndChange("input-greetings-giver");
    </script>
    <script>
        if (screen.width > 768) {
            alert("Please switch to a mobile device for the best experience.");
        }

        function download() {
            // Get the div element
            const divElement = document.getElementById('final-card');

            //including the useCORS option
            const config = {
                useCORS: true,
                // Add any other options you need here
            };
            // Use html2canvas to create a canvas element from the div element
            html2canvas(divElement, config).then(function(canvas) {
                // Convert the canvas to a data URL
                const dataURL = canvas.toDataURL('image/jpeg');

                // Create a link element
                const link = document.createElement('a');

                // Set the href attribute to the data URL
                link.href = dataURL;

                // Set the download attribute to specify the filename
                link.download = '{{ $card->name }}' + ' - eid greetings.jpg';

                // Click the link to download the image
                link.click();
            });
        }


        // Get the div element
        const divElement2 = document.getElementById('final-card');

        // Use html2canvas to convert the div to an image
        html2canvas(divElement2).then(canvas => {
            const dataUrl = canvas.toDataURL('image/jpeg', 1.0);
            const ogImage = document.getElementById('og-image');
            ogImage.setAttribute('content', dataUrl);
        });

        function shareOnFacebook() {

            const url = 'https://www.facebook.com/sharer/sharer.php?u=' + encodeURIComponent(window.location.href);
            window.open(url, '_blank');
        }
    </script>
</body>

</html>
