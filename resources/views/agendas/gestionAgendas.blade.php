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



        <div class="row">
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-title">
                                <h4>    AJOUTER UNE TACHE </h4>
                            </div>

                                    <div class="form-validation">
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">Intitule<span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-username" name="val-username" placeholder="Enter a username..">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-email">Resume <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-email" name="val-email" placeholder="Your valid email..">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-password">Mot-cle <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <input type="password" class="form-control" id="val-password" name="val-password" placeholder="Choose a safe one..">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-website">Utilisateur <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-website" name="val-website" placeholder="recuperez l'users en session">
                                            </div>
                                        </div>
                                    <br/><br/><br/><br/>
                                        <div class="form-group row">
                                            <div class="col-lg-8 ml-auto">
                                                <button type="submit" class="btn btn-primary">Validez</button>
                                            </div>
                                        </div>

                                    </div>
                        </div>
                        <!-- /# card -->
                    </div>





                        <!-- /# card -->

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