<!DOCTYPE html>

<html lang="en">

<head>

    @include('admin_med.css')

    <!-- Datatable -->
    <link href="{{ asset('admin_medcss/theme/vendor/datatables/css/jquery.dataTables.min.css') }}" rel="stylesheet">
    <!-- Custom Stylesheet -->
    <link href="{{ asset('admin_medcss/theme/css/style.css') }}" rel="stylesheet">

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
        @include('admin_med.nav_header')
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
        <div class="content-body">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row align-items-center my-4">
                            <div class="col">
                                <h1 class="h3 mb-0 page-title">{{__ ('Register a Patient')}}</h1>
                            </div>
                            <div class="col-auto">
                                <a href="{{url('patient_registration')}}" type="button" class="btn btn-square btn-outline-primary btn-lg">{{__('Register')}}</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- row -->

                @include('admin_med.patient.patient_records')
            </div>
        </div>
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
    <script src="{{ asset('admin_medcss/theme/./vendor/global/global.min.js') }}"></script>
    <script src="{{ asset('admin_medcss/theme/./js/quixnav-init.js') }}"></script>
    <script src="{{ asset('admin_medcss/theme/./js/custom.min.js') }}"></script>

    <!-- Datatable -->
    <script src="{{ asset('admin_medcss/theme/./vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('admin_medcss/theme/./js/plugins-init/datatables.init.js') }}"></script>
{{-- 

    <script src="{{asset('admin_medcss/theme/./vendor/sweetalert2/dist/sweetalert2.min.js')}}"></script>
    <script src="{{asset('admin_medcss/theme/assets/js/lib/sweetalert/sweetalert.min.js')}}"></script> --}}
</body>

</html>
