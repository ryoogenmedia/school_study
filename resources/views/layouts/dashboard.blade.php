<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from htmlstream.com/preview/front-dashboard-v2.1.1/welcome-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 20 Jul 2024 15:07:52 GMT -->

<head>
  <!-- Required Meta Tags Always Come First -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Title -->
  <title> Study - Academic Website </title>

  <!-- Favicon -->
  <link rel="shortcut icon" href="{{ asset('img/favicon.png') }}">

  <!-- Font -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&amp;display=swap" rel="stylesheet">

  @livewireStyles

  <!-- CSS Implementing Plugins -->
  <link rel="stylesheet" href="{{ asset('assets/css/vendor.min.css') }}">

  <!-- CSS Front Template -->
  <link rel="stylesheet" href="{{ asset('assets/css/theme.minc619.css?v=1.0') }}">

  <link rel="preload" href="{{ asset('assets/css/theme.min.css') }}" data-hs-appearance="default" as="style">
  <link rel="preload" href="{{ asset('assets/css/theme-dark.min.css') }}" data-hs-appearance="dark" as="style">

  <style data-hs-appearance-onload-styles>
    * {
      transition: unset !important;
    }

    body {
      opacity: 0;
    }
  </style>

  @stack('styles')
  <x-scripts.auth />
</head>

<body class="has-navbar-vertical-aside navbar-vertical-aside-show-xl   footer-offset">

  <script src="{{asset('assets/js/hs.theme-appearance.js')}}"></script>

  {{-- <script src="{{ asset('assets/vendor/hs-navbar-vertical-aside/dist/hs-navbar-vertical-aside-mini-cache.js') }}">
  </script> --}}

  <!-- ========== HEADER ========== -->


  <x-dashboard.header />

  <x-dashboard.aside />

  <main id="content" role="main" class="main">
    <!-- Content -->
    <div class="content container-fluid">
      {{ $slot }}
      <!-- End Row -->
    </div>
    <!-- End Content -->
  </main>
  <!-- ========== END MAIN CONTENT ========== -->


  @livewireScripts
  <!-- End Welcome Message Modal -->
  <!-- ========== END SECONDARY CONTENTS ========== -->

  <!-- JS Implementing Plugins -->
  <script src="{{ asset('assets/js/vendor.min.js') }}"></script>

  <!-- JS Front -->
  <script src="{{ asset('assets/js/theme.min.js') }}"></script>

  <!-- JS Plugins Init. -->
  <script>
    (function() {
      window.onload = function () {
        

        // INITIALIZATION OF NAVBAR VERTICAL ASIDE
        // =======================================================
        new HSSideNav('.js-navbar-vertical-aside').init()


        // INITIALIZATION OF FORM SEARCH
        // =======================================================
        new HSFormSearch('.js-form-search')


        // INITIALIZATION OF BOOTSTRAP DROPDOWN
        // =======================================================
        HSBsDropdown.init()
      }
    })()
  </script>

  @stack('scripts')
  <!-- Style Switcher JS -->
</body>

</html>