@extends('layouts.master')

@section('content')

    <!-- Flot Charts -->
    <div class="row">
        <div class="col-xl-12">
            <h2 class="page-header">Flot Charts</h2>
            <p class="lead">Flot is a pure JavaScript plotting library for jQuery, with a focus on simple usage, attractive looks and interactive features. For full usage instructions and documentation for Flot Charts, visit <a target="_blank" href="http://www.flotcharts.org/">http://www.flotcharts.org/</a>.</p>
        </div>
    </div>
    <!-- /.row -->

    <div class="row">
        <div class="col-xl-12">
            <div class="card card-primary card-inverse">
                <div class="card-header card-primary">
                    <i class="fa fa-bar-chart-o"></i> Line Graph Example with Tooltips
                </div>
                <div class="card-block bg-white">
                    <div class="flot-chart">
                        <div class="flot-chart-content" id="flot-line-chart"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->

    <div class="row">
        <div class="col-xl-4 col-lg-12">
            <div class="card card-green card-inverse">
                <div class="card-header card-green">
                    <i class="fa fa-long-arrow-right"></i> Pie Chart Example with Tooltips
                </div>
                <div class="card-block bg-white">
                    <div class="flot-chart">
                        <div class="flot-chart-content" id="flot-pie-chart"></div>
                    </div>
                    <div class="text-xs-right">
                        <a href="javascript:;">View Details <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-8 col-lg-12">
            <div class="card card-yellow card-inverse">
                <div class="card-header card-yellow">
                    <i class="fa fa-long-arrow-right"></i> Multiple Axes Line Graph Example with Tooltips and Raw Data
                </div>
                <div class="card-block bg-white">
                    <div class="flot-chart">
                        <div class="flot-chart-content" id="flot-multiple-axes-chart"></div>
                    </div>
                    <div class="text-xs-right">
                        <a href="javascript:;">View Details <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->

    <div class="row">
        <div class="col-xl-6 col-lg-12">
            <div class="card card-red card-inverse">
                <div class="card-header card-red">
                    <i class="fa fa-long-arrow-right"></i> Moving Line Chart
                </div>
                <div class="card-block bg-white">
                    <div class="flot-chart">
                        <div class="flot-chart-content" id="flot-moving-line-chart"></div>
                    </div>
                    <div class="text-xs-right">
                        <a href="javascript:;">View Details <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-lg-12">
            <div class="card card-primary card-inverse">
                <div class="card-header card-primary">
                   <i class="fa fa-long-arrow-right"></i> Bar Graph with Tooltips
                </div>
                <div class="card-block bg-white">
                    <div class="flot-chart">
                        <div class="flot-chart-content" id="flot-bar-chart"></div>
                    </div>
                    <div class="text-xs-right">
                        <a href="javascript:;">View Details <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->

    <!-- Morris Charts -->
    <div class="row">
        <div class="col-xl-12">
            <h2 class="page-header">Morris Charts</h2>
            <p class="lead">Morris.js is a very simple API for drawing line, bar, area and donut charts. For full usage instructions and documentation for Morris.js charts, visit <a target="_blank" href="http://morrisjs.github.io/morris.js/">http://morrisjs.github.io/morris.js/</a>.</p>
        </div>
    </div>
    <!-- /.row -->

    <div class="row">
        <div class="col-xl-12">
            <div class="card card-green card-inverse">
                <div class="card-header card-green">
                    <i class="fa fa-bar-chart-o"></i> Area Line Graph Example with Tooltips
                </div>
                <div class="card-block bg-white">
                    <div id="morris-area-chart"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->

    <div class="row">
        <div class="col-xl-4 col-lg-12">
            <div class="card card-yellow card-inverse">
                <div class="card-header card-yellow">
                    <i class="fa fa-long-arrow-right"></i> Donut Chart Example
                </div>
                <div class="card-block bg-white">
                    <div id="morris-donut-chart"></div>
                    <div class="text-xs-right">
                        <a href="javascript:;">View Details <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-12">
            <div class="card card-red card-inverse">
                <div class="card-header card-red">
                    <i class="fa fa-long-arrow-right"></i> Line Graph Example with Tooltips
                </div>
                <div class="card-block bg-white">
                    <div id="morris-line-chart"></div>
                    <div class="text-xs-right">
                        <a href="javascript:;">View Details <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-12">
            <div class="card card-primary card-inverse">
                <div class="card-header card-primary">
                    <i class="fa fa-long-arrow-right"></i> Bar Graph Example
                </div>
                <div class="card-block bg-white">
                    <div id="morris-bar-chart"></div>
                    <div class="text-xs-right">
                        <a href="javascript:;">View Details <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->



@endsection