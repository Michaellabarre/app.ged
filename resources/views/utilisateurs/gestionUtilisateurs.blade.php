@extends('layout.index')
@section('appContent')

    <!-- Container fluid  -->
    <div class="container-fluid">
        <!-- Start Page Content -->
        <div class="row">
            <div class="col-md-3">
                <div class="card p-30">
                    <div class="media">
                        <div class="media-left meida media-middle">
                            <span><i class="fa fa-file f-s-40 color-primary"></i></span>
                        </div>
                        <div class="media-body media-text-right">
                            <h2>568120</h2>
                            <p class="m-b-0">Documents Traités</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card p-30">
                    <div class="media">
                        <div class="media-left meida media-middle">
                            <span><i class="fa fa-cloud f-s-40 color-success"></i></span>
                        </div>
                        <div class="media-body media-text-right">
                            <h2>1178</h2>
                            <p class="m-b-0">Sales</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card p-30">
                    <div class="media">
                        <div class="media-left meida media-middle">
                            <span><i class="fa fa-archive f-s-40 color-warning"></i></span>
                        </div>
                        <div class="media-body media-text-right">
                            <h2>25</h2>
                            <p class="m-b-0">Stores</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card p-30">
                    <div class="media">
                        <div class="media-left meida media-middle">
                            <span><i class="fa fa-user f-s-40 color-danger"></i></span>
                        </div>
                        <div class="media-body media-text-right">
                            <h2>847</h2>
                            <p class="m-b-0">Customer</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- BTN AJOUTER, LISTER, ARCHIVES -->
        <div class="bg-white card-toggle-body m-l-0 m-r-0 box-shadow ">
            <div class="button-list">
                <a href="{{route('addUtilisateurs')}}"><button type="button" class="btn btn-success btn-flat btn-addon btn-lg m-b-10 m-l-5">Ajouter Utilisateurs</button></a>
                <a href="{{route('showUtilisateurs')}}"><button type="button" class="btn btn-success btn-flat btn-addon btn-lg m-b-10 m-l-5">Visualiser la lites des utilisateurs</button></a>
                <a href="{{route('groupeUtilisateurs')}}"><button type="button" class="btn btn-success btn-flat btn-addon btn-lg m-b-10 m-l-5">groupeUtilisateurs</button></a>

            </div>
        </div>

        <div class="row">
            <!-- Column     -->
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-title">
                        <h4>Recent Documents </h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Product</th>
                                    <th>quantity</th>
                                    <th>Status</th>
                                </tr>
                                </thead>
                                <tbody>

                                <tr>
                                    <td>
                                        <div class="round-img">
                                            <a href=""><img src="images/avatar/4.jpg" alt=""></a>
                                        </div>
                                    </td>
                                    <td>John Abraham</td>
                                    <td><span>iBook</span></td>
                                    <td><span>456 pcs</span></td>
                                    <td><span class="badge badge-success">Done</span></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="round-img">
                                            <a href=""><img src="images/avatar/2.jpg" alt=""></a>
                                        </div>
                                    </td>
                                    <td>John Abraham</td>
                                    <td><span>iPhone</span></td>
                                    <td><span>456 pcs</span></td>
                                    <td><span class="badge badge-success">Done</span></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="round-img">
                                            <a href=""><img src="images/avatar/3.jpg" alt=""></a>
                                        </div>
                                    </td>
                                    <td>John Abraham</td>
                                    <td><span>iMac</span></td>
                                    <td><span>456 pcs</span></td>
                                    <td><span class="badge badge-warning">Pending</span></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="round-img">
                                            <a href=""><img src="images/avatar/4.jpg" alt=""></a>
                                        </div>
                                    </td>
                                    <td>John Abraham</td>
                                    <td><span>iBook</span></td>
                                    <td><span>456 pcs</span></td>
                                    <td><span class="badge badge-success">Done</span></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-title">
                                <h4>Message </h4>
                            </div>
                            <div class="recent-comment">
                                <div class="media">
                                    <div class="media-left">
                                        <a href="#"><img alt="..." src="images/avatar/1.jpg" class="media-object"></a>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading">john doe</h4>
                                        <p>Cras sit amet nibh libero, in gravida nulla. </p>
                                        <p class="comment-date">October 21, 2018</p>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="media-left">
                                        <a href="#"><img alt="..." src="images/avatar/1.jpg" class="media-object"></a>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading">john doe</h4>
                                        <p>Cras sit amet nibh libero, in gravida nulla. </p>
                                        <p class="comment-date">October 21, 2018</p>
                                    </div>
                                </div>

                                <div class="media">
                                    <div class="media-left">
                                        <a href="#"><img alt="..." src="images/avatar/1.jpg" class="media-object"></a>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading">john doe</h4>
                                        <p>Cras sit amet nibh libero, in gravida nulla. </p>
                                        <p class="comment-date">October 21, 2018</p>
                                    </div>
                                </div>

                                <div class="media no-border">
                                    <div class="media-left">
                                        <a href="#"><img alt="..." src="images/avatar/1.jpg" class="media-object"></a>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading">Mr. Michael</h4>
                                        <p>Cras sit amet nibh libero, in gravida nulla. </p>
                                        <div class="comment-date">October 21, 2018</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /# card -->
                    </div>
                    <!-- /# column -->
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="year-calendar"></div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>

            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Mon Agenda</h4>
                        <div class="card-content">
                            <div class="todo-list">
                                <div class="tdl-holder">
                                    <div class="tdl-content">
                                        <ul>
                                            <li>
                                                <label>
                                                    <input type="checkbox"><i class="bg-primary"></i><span>Build an angular app</span>
                                                    <a href='#' class="ti-close"></a>
                                                </label>
                                            </li>
                                            <li>
                                                <label>
                                                    <input type="checkbox" checked><i class="bg-success"></i><span>Creating component page</span>
                                                    <a href='#' class="ti-close"></a>
                                                </label>
                                            </li>
                                            <li>
                                                <label>
                                                    <input type="checkbox" checked><i class="bg-warning"></i><span>Follow back those who follow you</span>
                                                    <a href='#' class="ti-close"></a>
                                                </label>
                                            </li>
                                            <li>
                                                <label>
                                                    <input type="checkbox" checked><i class="bg-danger"></i><span>Design One page theme</span>
                                                    <a href='#' class="ti-close"></a>
                                                </label>
                                            </li>

                                            <li>
                                                <label>
                                                    <input type="checkbox" checked><i class="bg-success"></i><span>Creating component page</span>
                                                    <a href='#' class="ti-close"></a>
                                                </label>
                                            </li>
                                        </ul>
                                    </div>
                                    <input type="text" class="tdl-new form-control" placeholder="Type here">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>


        <!-- End PAge Content -->
    </div>
    <!-- End Container fluid  -->
    </div>
    <!-- End Page wrapper  -->
    </div>


@endsection