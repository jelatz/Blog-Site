@props([
    'src',
    'alt' => 'Profile Image',
    'id' => 'profile',
    'width' => 'w-32',
    'height' => 'h-32',
    'accept' => 'image/jpg, image/png, image/jpeg',
])

<div class="relative group w-32 h-32 cursor-pointer">
    <input type="file" id="profileImageInput" name="profileImage" class="hidden" accept="{{ $accept }}" />
    <img src="{{$src}}" alt="{{ $alt }}" class="w-full h-full object-cover rounded-full" name="profile-image">
    <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-50 flex rounded-full items-center justify-center opacity-0 group-hover:opacity-100 transition duration-300">
        <ion-icon name="eye-outline" class="text-white text-lg"></ion-icon>
    </div>
</div>

<script>
    $(document).ready(function() {
        var $profileImage = $('#profileImageInput').siblings('img');
        var $overlay = $profileImage.next();
        var $inputField = $('#profileImageInput');

        // Function to open file dialog safely
        function openFileDialog() {
            $inputField.click();
        }

        // Trigger file input when image or overlay is clicked
        $profileImage.add($overlay).on('click', function(event) {
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
                    $profileImage.attr('src', e.target.result);
                };
                reader.readAsDataURL(file);
            }
        });
    });
</script>