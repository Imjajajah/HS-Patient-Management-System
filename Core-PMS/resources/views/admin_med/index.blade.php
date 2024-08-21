<!DOCTYPE html>

<html lang="en">

<head>
   
    @include('admin_med.css')

</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="index.html" class="brand-logo">
                <img class="logo-abbr" src="{{asset('admin_medcss/theme/./images/logo.png')}}" alt="">
                <img class="logo-compact" src="{{asset('admin_medcss/theme/./images/logo-text.png')}}" alt="">
                <img class="brand-title" src="{{asset('admin_medcss/theme/./images/logo-text.png')}}" alt="">
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        @include('admin_med.header')
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
       @include('admin_med.sidebar')
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        @include('admin_med.dashboard')
        <!--**********************************
            Content body end
        ***********************************-->

        <!--**********************************
            Footer start
        ***********************************-->
        @include('admin_med.footer')
        <!--**********************************
            Footer end
        ***********************************-->

        <!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="{{asset('admin_medcss/theme/./vendor/global/global.min.js')}}"></script>
    <script src="{{asset('admin_medcss/theme/./js/quixnav-init.js')}}"></script>
    <script src="{{asset('admin_medcss/theme/./js/custom.min.js')}}"></script>

    <script src="{{asset('admin_medcss/theme/./vendor/chartist/js/chartist.min.js')}}"></script>

    <script src="{{asset('admin_medcss/theme/./vendor/moment/moment.min.js')}}"></script>
    <script src="{{asset('admin_medcss/theme/./vendor/pg-calendar/js/pignose.calendar.min.js')}}"></script>

    <script src="{{asset('admin_medcss/theme/./js/dashboard/dashboard-2.js')}}"></script>
    <!-- Circle progress -->

</body>

</html>
