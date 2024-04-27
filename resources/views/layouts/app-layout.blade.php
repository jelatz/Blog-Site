<!DOCTYPE html>
<html lang={{str_replace('_','-', app()->getLocale())}}>
<head>
    <x-partials.head />
</head>
<body class="font-roboto min-h-screen">
    <header>
        <x-partials.navigation></x-partials.navigation>
    </header>
    <main class="">
        <div id="loading" class="fixed inset-0 bg-gray-900 bg-opacity-50 flex justify-center items-center z-50">
            <!-- Here you need to include the SVG image properly -->
            <img src="{{ asset('svg/Spin.svg') }}" alt="Loading Spinner" class="w-16 h-16">
        </div>        
        {{ $slot }}
    </main>
    @if(request()->routeIs(['profile']))
    <x-partials.footer class="" />
    @else
    <x-partials.footer />
    @endif
    <!-- Include jQuery library -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- JavaScript to show/hide loading spinner -->
    <script>
        $(document).ready(function() {
            // Hide loading spinner when page finished loading
            $('#loading').hide();
        });

        $(window).on('beforeunload', function() {
            // Show loading spinner when page is being unloaded (e.g., before navigating to another page)
            $('#loading').show();
        });
    </script>
</body>
</html>
