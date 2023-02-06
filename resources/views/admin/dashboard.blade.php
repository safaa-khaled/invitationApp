@extends('admin.layouts.app')

@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-sm-12">
                <div class="home-tab">
                    <div class="d-sm-flex align-items-center justify-content-between border-bottom">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active ps-0" id="home-tab" data-bs-toggle="tab" href="#overview"
                                    role="tab" aria-controls="overview" aria-selected="true">ماخص عام</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link border-0" id="more-tab" data-bs-toggle="tab" href="#more"
                                    role="tab" aria-selected="false">المزيد</a>
                            </li>
                        </ul>
                        <div>
                            <div class="btn-wrapper">
                                <a href="#" class="btn btn-otline-dark align-items-center"><i class="icon-share"></i>
                                    مشاركة</a>
                                <a href="#" class="btn btn-otline-dark"><i class="icon-printer"></i> طباعة</a>
                                <a href="#" class="btn btn-primary text-white me-0"><i class="icon-download"></i>
                                    أكسل</a>
                            </div>
                        </div>
                    </div>
                    <div class="tab-content tab-content-basic">
                        <!------- More Tab Content ---------------------------------------------------------------->
                        <div class="tab-pane fade show" id="more" role="tabpanel" aria-labelledby="more">
                            there is nothing
                        </div>
                        <!-------OverView Tab Content -------------------------------------------------------------->
                        <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="statistics-details d-flex align-items-center justify-content-between">
                                        <div>
                                            <p class="statistics-title">Guests</p>
                                            <h3 class="rate-percentage">5555</h3>
                                            
                                        </div>
                                        <div>
                                            <p class="statistics-title">Requests</p>
                                            <h3 class="rate-percentage">yyyyy</h3>
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-8 d-flex flex-column">
                                    <div class="row flex-grow">
                                        <div class="col-12 col-lg-4 col-lg-12 grid-margin stretch-card">
                                            <div class="card card-rounded">
                                                <div class="card-body">
                                                    <div class="d-sm-flex justify-content-between align-items-start">
                                                        <div class="card-title">
                                                            <h4>Requests Review</h4>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <canvas id="requestOverview"></canvas>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 d-flex flex-column">
                                    <div class="row flex-grow">
                                        <div class="col-md-6 col-lg-12 grid-margin stretch-card">
                                            <div class="card bg-primary card-rounded">
                                                <div class="card-body pb-0">
                                                    <h4 class="card-title card-title-dash text-white mb-4">
                                                        Requests Summary</h4>
                                                    <div class="row">
                                                        <div class="col-sm-4">
                                                            <p class="status-summary-ight-white mb-1">
                                                                Requests in Week</p>
                                                            <h2 class="text-info"></h2>
                                                        </div>
                                                        <div class="col-sm-8">
                                                            <div class="status-summary-chart-wrapper pb-4">
                                                                <canvas id="status-summary"></canvas>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-8 d-flex flex-column">
                                    <div class="row flex-grow">
                                        <div class="col-12 col-lg-4 col-lg-12 grid-margin stretch-card">
                                            <div class="card card-rounded">
                                                <div class="card-body">
                                                    <div class="d-sm-flex justify-content-between align-items-start">
                                                        <div class="card-title">
                                                            <h4>Guests Review</h4>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <canvas id="guestReview"></canvas>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                   
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- content-wrapper ends -->
@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="jquery-circle-progress/dist/circle-progress.js"></script>




