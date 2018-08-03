@extends('layout.index')
@section('appContent')
            <!-- Container fluid  -->

            <div class="container-fluid center-block">
                <!-- Start Page Content -->


                <div class="row text-center">
                    &#160;


                    <div class="card " >

                        <a href="{{route('gestionDossiers')}}">
                            <div class="btn-group-vertical ">
                            <button type="button" class="btn  btn-sm ">
                                <img src="images/Dossier.jpg" style="height: 100px; width: 100px; " alt="">
                            </button>
                              <button type="button" class="btn btn-sm">
                                  <p class="m-b-0" style="color: blue">
                                            Gestion  Dossiers
                                  </p>
                              </button>
                    </div>

                        </a>

                    </div>
                    &#160;

                    <div class="card " >

                        <a href="{{route('gestionDocuments')}}">
                            <div class="btn-group-vertical">
                                <button type="button" class="btn btn-sm   ">
                                <img src="images/document.jpg" style="height: 100px; width: 100px; " alt="">
                                </button>

                                <button type="button" class="btn btn-sm">
                                        <p class="m-b-0" style="color: blue">
                                            Gestion  Documents
                                        </p>
                                        </button>
                            </div>
                        </a>
                    </div>
                    &#160;

                    <div class="card " >
                        <a href="{{route('gestionArchives')}}">
                            <div class="btn-group-vertical">
                            <button type="button" class="btn btn-sm  ">
                                <img src="images/archivies.jpg" style="height: 100px; width: 100px;" alt="">
                            </button>
                               <button class="btn btn-sm">
                                        <p class="m-b-0" style="color: blue">
                                            Gestion  Archives
                                        </p>
                               </button>
                            </div>
                        </a>
                    </div>
                    &#160;

                    <div class="card " >
                        <a href="#">
                            <div class="btn-group-vertical">
                            <button type="button" class="btn btn-sm   ">
                                <img src="images/mail.jpg" style="height: 100px; width: 100px;" alt="">
                            </button>
                                <button class="btn btn-sm">
                                        <p class="m-b-0" style="color: blue">
                                            Gestion  Mails
                                        </p>

                            </button>
                            </div>
                        </a>
                    </div>

                    &#160;

                    <div class="card " >
                        <a href="{{route('gestionAgendas')}}">
                            <div class="btn-group-vertical">
                            <button type="button" class="btn btn-sm   ">
                                <img src="images/agenda.jpg" style="height:100px; width: 100px; " alt="">
                            </button>
                                <button class="btn btn-sm">
                                        <p class="m-b-0" style="color: blue">
                                            Gestion  Agendas
                                        </p>
                                                                </button>
                            </div>
                        </a>
                    </div>
                    &#160;

                    <div class="card " >
                        <a href="{{route('gestionDossiers')}}">
                            <div class="btn-group-vertical">
                            <button type="button" class="btn btn-sm   ">
                                <img src="images/corbeille.jpg" style="height:100px; width: 100px; " alt="">
                            </button>
                                <button class="btn btn-sm"
                                        <p class="m-b-0" style="color: blue">
                                            Gestion  Corbeilles
                                        </p>

                            </button>
                            </div>
                        </a>
                    </div>



                </div>

                <!-- BTN AJOUTER, LISTER, ARCHIVES -->

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
                                <h4 class="card-title">Mes Tâches</h4>
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