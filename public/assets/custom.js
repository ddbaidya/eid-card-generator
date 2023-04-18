function previewImage() {
    const imageInput = document.getElementById("profile_photo");
    const imagePreview = document.getElementById("image-preview");

    const file = imageInput.files[0];
    const reader = new FileReader();

    reader.addEventListener("load", () => {
        const imageUrl = reader.result;
        const image = document.createElement("img");
        image.src = imageUrl;
        imagePreview.innerHTML = "";
        imagePreview.appendChild(image);
    });

    if (file) {
        reader.readAsDataURL(file);
        $("#image-preview").removeClass("profile-image-not-selected");
    } else {
        imagePreview.innerHTML =
            '<img src="/images/icon/profile-photo-icon.png">';
        $("#image-preview").addClass("profile-image-not-selected");
    }
}

function cardRenderForDownload() {
    let divElement = document.getElementById("final-card");
    divElement.style.width = "750px";
    divElement.style.height = "1050px";
    document.getElementById("profile_photo_preview").style.top = '240px';
    document.getElementById("profile_photo_preview").style.left = '206px';
    document.getElementById("overly-text").style.top = '298px';
    document.getElementById("input-greetings-giver").style.bottom = '-210px';
    document.getElementById("input-name").style.fontSize = '38.569px';
    document.getElementById("input-org").style.fontSize = '32px';
    document.getElementById("input-greetings-giver").style.fontSize = '29.74px';
}

function cardRenderNormal() {
    let divElement = document.getElementById("final-card");
    divElement.style.width = "334px";
    divElement.style.height = "467px";
    document.getElementById("profile_photo_preview").style.top = '107px';
    document.getElementById("profile_photo_preview").style.left = '92px';
    document.getElementById("overly-text").style.top = '130px';
    document.getElementById("input-greetings-giver").style.bottom = '-92px';
    document.getElementById("input-name").style.fontSize = '17px';
    document.getElementById("input-org").style.fontSize = '14px';
    document.getElementById("input-greetings-giver").style.fontSize = '13px';
}