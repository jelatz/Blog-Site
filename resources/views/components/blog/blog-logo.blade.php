@props([
    'src',
    'alt' => 'Blog Logo',
    'id' => 'logo',
    'width' => 'w-32',
    'height' => 'h-32',
    'accept' => 'image/jpg, image/png, image/jpeg',
])

<div class="relative group w-32 h-32 cursor-pointer mx-auto">
    <input type="file" id="blogLogo" name="logoImage" class="hidden" accept="{{ $accept }}" />
    <img src="{{ $src }}" alt="{{ $alt }}" class="w-full h-full object-fill rounded-full bg-red-800" name="logo-image">
    <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-50 flex rounded-full items-center justify-center opacity-0 group-hover:opacity-100 transition duration-300">
        <ion-icon name="eye-outline" class="text-white text-lg"></ion-icon>
    </div>
</div>

<script>
    $(document).ready(function() {
        var $logoImage = $('#blogLogo').siblings('img');
        var $overlay = $logoImage.next();
        var $inputField = $('#blogLogo');

        // Function to open file dialog safely
        function openFileDialog() {
            $inputField.click();
        }

        // Trigger file input when image or overlay is clicked
        $logoImage.add($overlay).on('click', function(event) {
            event.preventDefault(); // Prevent default action
            event.stopPropagation(); // Stop event bubbling
            openFileDialog();
        });

        // Update image display when file is chosen
        $inputField.on('change', function(event) {
            var file = this.files[0];
            if (file) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $logoImage.attr('src', e.target.result);
                };
                reader.readAsDataURL(file);
            }
        });
    });
</script>