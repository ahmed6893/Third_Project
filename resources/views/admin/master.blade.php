<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from freshcart.codescandy.com/dashboard/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 14 Nov 2024 06:08:49 GMT -->
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="Codescandy" name="author">
    <title>Dashboard eCommerce HTML Template - FreshCart</title>
    <!-- Favicon icon-->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('/')}}admin/assets/images/favicon/favicon.ico">


    <!-- Libs CSS -->
    <link href="{{asset('/')}}admin/assets/libs/bootstrap-icons/font/bootstrap-icons.min.css" rel="stylesheet">
    <link href="{{asset('/')}}admin/assets/libs/feather-webfont/dist/feather-icons.css" rel="stylesheet">
    <link href="{{asset('/')}}admin/assets/libs/simplebar/dist/simplebar.min.css" rel="stylesheet">
    <link href="{{asset('/')}}admin/assets/css/bootstrap-select.css" rel="stylesheet">
    <link href="{{asset('/')}}admin/assets/summernote/summernote.css" rel="stylesheet">
    <style>
        .note-editor {
            border-radius: 8px !important;
            border: 1px solid #ddd !important;
            overflow: hidden;
        }
    </style>

    select[multiple] {
    height: auto !important;
    }

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{asset('/')}}admin/assets/css/theme.min.css">
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-M8S4MT3EYG"></script>
    <script>
        $(document).ready(function() {
            $('.selectpicker').selectpicker();
        });
    </script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() {
            dataLayer.push(arguments);
        }
        gtag("js", new Date());

        gtag("config", "G-M8S4MT3EYG");
    </script>
    <script type="text/javascript">
        (function (c, l, a, r, i, t, y) {
            c[a] =
                c[a] ||
                function () {
                    (c[a].q = c[a].q || []).push(arguments);
                };
            t = l.createElement(r);
            t.async = 1;
            t.src = "https://www.clarity.ms/tag/" + i;
            y = l.getElementsByTagName(r)[0];
            y.parentNode.insertBefore(t, y);
        })(window, document, "clarity", "script", "kuc8w5o9nt");
    </script>

</head>

<body>
<!-- main -->
<div>
    <!-- navbar -->


@include('admin.include.header')
    <div class="main-wrapper">
@include('admin.include.left-sidebar')
@yield('body')
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Libs JS -->
<!-- <script src="{{asset('/')}}admin/assets/libs/jquery/dist/jquery.min.js"></script> -->
<script src="{{asset('/')}}admin/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('/')}}admin/assets/libs/simplebar/dist/simplebar.min.js"></script>

<!-- Theme JS -->
<script src="{{asset('/')}}admin/assets/js/theme.min.js"></script>

<script src="{{asset('/')}}admin/assets/libs/apexcharts/dist/apexcharts.min.js"></script>
<script src="{{asset('/')}}admin/assets/js/vendors/chart.js"></script>
<script src="{{asset('/')}}admin/assets/libs/quill/dist/quill.min.js"></script>
<script src="{{asset('/')}}admin/assets/libs/dropzone/dist/min/dropzone.min.js"></script>
<script src="{{asset('/')}}admin/assets/libs/flatpickr/dist/flatpickr.min.js"></script>
<script src="{{asset('/')}}admin/assets/js/vendors/dropzone.js"></script>
<script src="{{asset('/')}}admin/assets/js/bootstrap-select.js"></script>

<script src="{{asset('/')}}admin/assets/summernote/js/summernote.min.js"></script>
<script src="{{asset('/')}}admin/assets/summernote/js/summernote-init.js"></script>



</body>

<!-- Mirrored from freshcart.codescandy.com/dashboard/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 14 Nov 2024 06:08:53 GMT -->
</html>
