
<!DOCTYPE html>
<html lang="en">


<!-- index.html  21 Nov 2019 03:44:50 GMT -->
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Laravel Timer</title>
    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{asset('assets/css/app.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/bundles/prism/prism.css')}}">
    <link rel="stylesheet" href="{{asset('assets/bundles/pretty-checkbox/pretty-checkbox.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/bundles/datatables/datatables.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/bundles/owlcarousel2/dist/assets/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/bundles/owlcarousel2/dist/assets/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/bundles/fullcalendar/fullcalendar.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/bundles/chocolat/dist/css/chocolat.css')}}">
    <link rel="stylesheet" href="{{asset('assets/bundles/bootstrap-daterangepicker/daterangepicker.css')}}">
    <link rel="stylesheet" href="{{asset('assets/bundles/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/bundles/select2/dist/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/bundles/jquery-selectric/selectric.css')}}">
    <link rel="stylesheet" href="{{asset('assets/bundles/bootstrap-timepicker/css/bootstrap-timepicker.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/bundles/bootstrap-tagsinput/dist/bootstrap-tagsinput.css')}}">
    <link rel="stylesheet" href="{{asset('assets/bundles/dropzonejs/dropzone.css')}}">
    <link rel="stylesheet" href="{{asset('assets/bundles/izitoast/css/iziToast.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/bundles/bootstrap-social/bootstrap-social.css')}}">
    <link rel="stylesheet" href="{{asset('assets/bundles/summernote/summernote-bs4.css')}}">
    <!-- Template CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/components.css')}}">
    <!-- Custom style CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/custom.css')}}">
    <link rel='shortcut icon' type='image/x-icon' href='{{asset('assets/img/favicon.ico')}}' />
</head>

<body>
<div class="loader"></div>
<div id="app">
    <div class="main-wrapper main-wrapper-1">

   @yield('content')
        @include('layouts.footer')
    </div>
</div>
<!-- General JS Scripts -->
<script src="{{asset('assets/js/app.min.js')}}"></script>
<script src="{{asset('assets/bundles/prism/prism.js')}}"></script>

<script src="{{asset('assets/bundles/datatables/datatables.min.js')}}"></script>
<script src="{{asset('assets/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('assets/bundles/datatables/export-tables/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('assets/bundles/datatables/export-tables/buttons.flash.min.js')}}"></script>
<script src="{{asset('assets/bundles/datatables/export-tables/jszip.min.js')}}"></script>
<script src="{{asset('assets/bundles/datatables/export-tables/pdfmake.min.js')}}"></script>
<script src="{{asset('assets/bundles/datatables/export-tables/vfs_fonts.js')}}"></script>
<script src="{{asset('assets/bundles/datatables/export-tables/buttons.print.min.js')}}"></script>
<script src="{{asset('assets/bundles/jquery-ui/jquery-ui.min.js')}}"></script>
<script src="{{asset('assets/bundles/owlcarousel2/dist/owl.carousel.min.js')}}"></script>
<script src="{{asset('assets/bundles/fullcalendar/fullcalendar.min.js')}}"></script>
<script src="{{asset('assets/bundles/chocolat/dist/js/jquery.chocolat.min.js')}}"></script>
<script src="{{asset('assets/bundles/jquery-ui/jquery-ui.min.js')}}"></script>
<script src="{{asset('assets/bundles/gmaps.js')}}"></script>
<script src="{{asset('assets/bundles/cleave-js/dist/cleave.min.js')}}"></script>
<script src="{{asset('assets/bundles/cleave-js/dist/addons/cleave-phone.us.js')}}"></script>
<script src="{{asset('assets/bundles/jquery-pwstrength/jquery.pwstrength.min.js')}}"></script>
<script src="{{asset('assets/bundles/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
<script src="{{asset('assets/bundles/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js')}}"></script>
<script src="{{asset('assets/bundles/bootstrap-timepicker/js/bootstrap-timepicker.min.js')}}"></script>
<script src="{{asset('assets/bundles/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js')}}"></script>
<script src="{{asset('assets/bundles/select2/dist/js/select2.full.min.js')}}"></script>
<script src="{{asset('assets/bundles/jquery-selectric/jquery.selectric.min.js')}}"></script>
<script src="{{asset('assets/bundles/dropzonejs/min/dropzone.min.js')}}"></script>
<script src="{{asset('assets/bundles/sweetalert/sweetalert.min.js')}}"></script>
<script src="{{asset('assets/bundles/izitoast/js/iziToast.min.js')}}"></script>
<script src="{{asset('assets/bundles/summernote/summernote-bs4.js')}}"></script>
<script src="http://maps.google.com/maps/api/js?key=AIzaSyB55Np3_WsZwUQ9NS7DP-HnneleZLYZDNw&amp;sensor=true"></script>

<!-- JS Libraies -->
<script src="{{asset('assets/bundles/apexcharts/apexcharts.min.js')}}"></script>
<!-- Page Specific JS File -->
<script src="{{asset('assets/js/page/index.js')}}"></script>
<script src="{{asset('assets/js/page/forms-advanced-forms.js')}}"></script>
<script src="{{asset('assets/js/page/multiple-upload.js')}}"></script>
<script src="{{asset('assets/js/page/owl-carousel.js')}}"></script>
<script src="{{asset('assets/js/page/sweetalert.js')}}"></script>
<script src="{{asset('assets/js/page/datatables.js')}}"></script>
<script src="{{asset('assets/js/page/calendar.js')}}"></script>
<script src="{{asset('assets/js/page/contact.js')}}"></script>
<script src="{{asset('assets/js/page/toastr.js')}}"></script>
<script src="{{asset('assets/js/page/auth-register.js')}}"></script>
<!-- Template JS File -->
<script src="{{asset('assets/js/scripts.js')}}"></script>
<!-- Custom JS File -->
<script src="{{asset('assets/js/custom.js')}}"></script>
</body>


<!-- index.html  21 Nov 2019 03:47:04 GMT -->
</html>
