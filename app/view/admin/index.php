<?php require view('admin/partials/header'); ?>

<div class="content-wrapper">
    <div class="container-fluid">
        <!--Start Dashboard Content-->
        <div class="row mt-4">
            <div class="col-12 col-lg-6 col-xl-3">
                <div class="card gradient-purpink">
                    <div class="card-body">
                        <div class="media">
                            <div class="media-body text-left">
                                <h4 class="text-white">$4530</h4>
                                <span class="text-white">Revenue</span>
                            </div>
                            <div class="align-self-center"><span id="dash-chart-1"></span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-3">
                <div class="card gradient-scooter">
                    <div class="card-body">
                        <div class="media">
                            <div class="media-body text-left">
                                <h4 class="text-white">2500</h4>
                                <span class="text-white">Total Orders</span>
                            </div>
                            <div class="align-self-center"><span id="dash-chart-2"></span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-3">
                <div class="card gradient-ibiza">
                    <div class="card-body">
                        <div class="media">
                            <div class="media-body text-left">
                                <h4 class="text-white">7850</h4>
                                <span class="text-white">Comments</span>
                            </div>
                            <div class="align-self-center"><span id="dash-chart-3"></span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-3">
                <div class="card gradient-ohhappiness">
                    <div class="card-body">
                        <div class="media">
                            <div class="media-body text-left">
                                <h4 class="text-white">3524</h4>
                                <span class="text-white">Total Views</span>
                            </div>
                            <div class="align-self-center"><span id="dash-chart-4"></span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End Row-->


        <div class="card-group">
            <div class="card border-right">
                <div class="card-header">
                    Sales This Week
                    <div class="card-action">
                        <div class="dropdown">
                            <a href="javascript:void();" class="dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown">
                                <i class="icon-options"></i>
                            </a>
                            <div class="dropdown-menu animated fadeIn dropdown-menu-right">
                                <a class="dropdown-item" href="javascript:void();">Action</a>
                                <a class="dropdown-item" href="javascript:void();">Another action</a>
                                <a class="dropdown-item" href="javascript:void();">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="javascript:void();">Separated link</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <canvas id="dash-chart-16" height="180"></canvas>
                </div>
                <ul class="list-group list-group-flush list shadow-none">
                    <li class="list-group-item d-flex justify-content-between align-items-center">Samsung <span class="badge gradient-purpink text-white badge-pill shadow">50</span></li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">Apple <span class="badge gradient-orange
             text-white badge-pill shadow">50</span></li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">Nokia <span class="badge gradient-meridian text-white badge-pill">50</span></li>
                </ul>
            </div>
            <div class="card border-right">
                <div class="card-header">
                    Profit Ratio
                    <div class="card-action">
                        <div class="dropdown">
                            <a href="javascript:void();" class="dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown">
                                <i class="icon-options"></i>
                            </a>
                            <div class="dropdown-menu animated fadeIn dropdown-menu-right">
                                <a class="dropdown-item" href="javascript:void();">Action</a>
                                <a class="dropdown-item" href="javascript:void();">Another action</a>
                                <a class="dropdown-item" href="javascript:void();">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="javascript:void();">Separated link</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <canvas id="dash-chart-17" height="180"></canvas>
                </div>
                <ul class="list-group list-group-flush list shadow-none">
                    <li class="list-group-item d-flex justify-content-between align-items-center">Gross Profit <span class="badge gradient-quepal text-white badge-pill shadow">05</span></li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">Revenue <span class="badge gradient-violet
             text-white badge-pill shadow">08</span></li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">Expense <span class="badge gradient-ibiza text-white badge-pill shadow">07</span></li>
                </ul>
            </div>
            <div class="card">
                <div class="card-header">
                    Trending Products
                    <div class="card-action">
                        <div class="dropdown">
                            <a href="javascript:void();" class="dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown">
                                <i class="icon-options"></i>
                            </a>
                            <div class="dropdown-menu animated fadeIn dropdown-menu-right">
                                <a class="dropdown-item" href="javascript:void();">Action</a>
                                <a class="dropdown-item" href="javascript:void();">Another action</a>
                                <a class="dropdown-item" href="javascript:void();">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="javascript:void();">Separated link</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <canvas id="dash-chart-18" height="180"></canvas>
                </div>
                <ul class="list-group list-group-flush list shadow-none">
                    <li class="list-group-item d-flex justify-content-between align-items-center">Jeans <span class="badge gradient-knight text-white badge-pill shadow">25</span></li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">T-Shirts <span class="badge gradient-dusk
             text-white badge-pill shadow">25</span></li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">Shoes <span class="badge gradient-yoda text-white badge-pill shadow">25</span></li>
                </ul>
            </div>
        </div>

        <!--End Dashboard Content-->

    </div>
    <!-- End container-fluid-->

</div>

<?php require view('admin/partials/footer'); ?>