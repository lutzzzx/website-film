function previewImage() {
  var fileInput = document.getElementById("photo-upload");
  var imagePreview = document.getElementById("image-preview");

  var file = fileInput.files[0];

  if (file) {
    var reader = new FileReader();

    reader.onload = function (e) {
      imagePreview.src = e.target.result;
      imagePreview.style.display = "block";
    };

    reader.readAsDataURL(file);
  } else {
    imagePreview.src = "#";
    imagePreview.style.display = "none";
  }
}
