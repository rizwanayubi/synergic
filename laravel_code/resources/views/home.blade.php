@extends('layouts.app') @section('content')
<!-- Page-Title -->
<!-- <div class="row">
    <div class="col-sm-12">
        <h4 class="page-title">Dashboard</h4>
    </div>
    <div class="alert alert-success" role="alert">
        <strong>Well done!</strong> Welcome to your Dashboard.
    </div>
    <div class="col-md-12">
        <h4>Complete your profile</h4><i data-toggle="tooltip" title="Hooray!" class="zmdi zmdi-info"></i>
        <progress class="progress progress-warning" value="75" max="100">75%
        </progress>
    </div>
    <script>
        $(document).ready(function () {
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>
</div> -->
<div class="row">
        <div class="row">
                <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
                    <div class="card-box tilebox-one">
                        <i class="icon-layers pull-xs-right text-muted"></i>
                        <h6 class="text-muted text-uppercase m-b-20">OAM Companies</h6>
                        <h2 class="m-b-20" data-plugin="counterup">1,587</h2>
                        <span class="label label-success"> +11% </span> <span class="text-muted">From previous period</span>
                    </div>
                </div>

                <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
                    <div class="card-box tilebox-one">
                        <i class="icon-paypal pull-xs-right text-muted"></i>
                        <h6 class="text-muted text-uppercase m-b-20">FM Companies</h6>
                        <h2 class="m-b-20"><span data-plugin="counterup">46,782</span></h2>
                        <span class="label label-danger"> -29% </span> <span class="text-muted">From previous period</span>
                    </div>
                </div>

                <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
                    <div class="card-box tilebox-one">
                        <i class="icon-chart pull-xs-right text-muted"></i>
                        <h6 class="text-muted text-uppercase m-b-20">New Approvals</h6>
                        <h2 class="m-b-20"><span data-plugin="counterup">15.9</span></h2>
                        <span class="label label-pink"> 0% </span> <span class="text-muted">From previous period</span>
                    </div>
                </div>

                <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
                    <div class="card-box tilebox-one">
                        <i class="icon-rocket pull-xs-right text-muted"></i>
                        <h6 class="text-muted text-uppercase m-b-20">Quries</h6>
                        <h2 class="m-b-20" data-plugin="counterup">1,890</h2>
                        <span class="label label-warning"> +89% </span> <span class="text-muted">Last year</span>
                    </div>
                </div>
            </div>
</div>

@endsection