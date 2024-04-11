@if(session()->has('error'))

<div class="fixed top-20 left-1/2 -translate-x-1/2 z-50">
    <div id="error-message" class="w-80 border p-5 border-red-800 rounded-md text-center text-white bg-red-800">
        {{session('error')}}
    </div>
</div>

<script>
    setTimeout(function() {
        document.getElementById('error-message').style.display = 'none';
    }, 2000);
</script>

@endif