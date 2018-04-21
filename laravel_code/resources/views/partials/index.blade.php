<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Coderthemes">

    <!-- App Favicon -->
    <!-- <link rel="shortcut icon" href="assets/images/favicon.ico"> -->

    <!-- App title -->
    <title>{{ config('app.name', 'Laravel') }} </title>

    <!-- Plugins css-->
    <link href="{{ URL::asset('assets/plugins/select2/css/select2.min.css') }} " rel="stylesheet" type="text/css"/>
    <!-- App CSS -->
    <link href="{{ URL::asset('assets/css/style.css') }}" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

    <script type="text/javascript"  src="{{ URL::asset('assets/js/modernizr.min.js') }}"></script>

</head>


<body>

    <div class="account-pages"></div>
    <div class="clearfix"></div>
    <div class="wrapper-page">

        <div class="account-bg">
            <div class="card-box m-b-0">
                @yield('content')
                <div class="clearfix"></div>
            </div>
        </div>
        <!-- end card-box-->
        <div class="m-t-20">
            <div class="text-xs-center">
                @if(Request::segment(1) == 'login')
                <p class="text-white">Don't have account? <a href="{{url('register')}}" class="text-white m-l-5"><b>Register</b> </a></p>
                @else
                <p class="text-white">Already have account? <a href="{{url('login')}}" class="text-white m-l-5"><b>Sign In</b> </a></p>
                @endif
            </div>
        </div>
    </div>
    <!-- end wrapper page -->


    <script>
        var resizefunc = [];
    </script>

    <!-- jQuery  -->
    <script src="{{ URL::asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/custom_script.js') }}"></script>
    <script src="{{ URL::asset('assets/js/tether.min.js') }}"></script>
    <!-- Tether for Bootstrap -->
    <script src="{{ URL::asset('assets/js/bootstrap.min.js') }} "></script>
    <script src="{{ URL::asset('assets/js/waves.js') }}"></script>
    <script src="{{ URL::asset('assets/js/jquery.nicescroll.js') }}"></script>
    <script src=" {{ URL::asset('assets/plugins/switchery/switchery.min.js') }}"></script>

    <!-- App js -->
    <script src="{{ URL::asset('assets/js/jquery.core.js') }}"></script>
    <script src="{{ URL::asset('assets/js/jquery.app.js') }}"></script>

    <script type="text/javascript" src="{{ URL::asset('assets/plugins/multiselect/js/jquery.multi-select.js') }} "></script>

    <script type="text/javascript" src="{{ URL::asset('assets/plugins/jquery-quicksearch/jquery.quicksearch.js') }} "></script>
    <script src="{{ URL::asset('assets/plugins/select2/js/select2.full.min.js') }} " type="text/javascript"></script>
    <script type="text/javascript" src=" {{ URL::asset('assets/pages/jquery.formadvanced.init.js') }}"></script>  
    
    <script>
        $('.company_type').click(function (event) {
            var company_type = $(this).val();
            //oam
            if(company_type == 2){
                $('#fmc_div').hide();
            }else{
                $('#fmc_div').show();
            }
        });
    </script>

</body>

</html>