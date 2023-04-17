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