

var imageSelection = document.getElementById('imageSelect');
var selectedImage = document.getElementById('selectedImage');

imageSelection.addEventListener('change', function (e) {
    console.log('Image is selected ');
    const file = this.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function (e) {
            selectedImage.src = e.target.result;
            selectedImage.style.display = 'block';

        };
        reader.readAsDataURL(file);
    }
    //  else {
    //     selectedImage.innerText = 'Upload\nProfile';
    //     selectedImage.style.display = 'block';
    // }

    
});