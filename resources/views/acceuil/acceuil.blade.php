@extends('layout.index')
@section('appContent')
            <!-- Container fluid  -->
            &#160;&#160;&#160;&#160;&#160;&#160;&#160;
            <div class="container-fluid">
                <!-- Start Page Content -->
                <div class="row">

                        <div class="card p-30">
                            <div class="media">
                                <div class="media-left meida media-middle">
                                    <span><i class="fa fa-folder-open-o" style="font-size:45px;color:dimgrey"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                     <p class="m-b-0">
                                         <a href="{{route('gestionDossiers')}}">
                                             <button type="button" class="btn btn-success btn-flat btn-addon btn-lg m-b-10 m-l-5">
                                                 Gestion  Dossiers</button>
                                         </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    &#160;&#160;&#160;&#160;&#160;&#160;&#160;

                        <div class="card p-30">
                            <div class="media">
                                <div class="media-left meida media-middle">
                                    <span><i class="fa fa-file" style="font-size:45px ;color:dimgrey"></i></span>
                                </div>
                                <div class="media-body media-text-right">

                                    <p class="m-b-0">
                                        <a href="{{route('gestionDocuments')}}">
                                            <button type="button" class="btn btn-success btn-flat btn-addon btn-lg m-b-10 m-l-5">
                                                Gestion Documents</button>
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    &#160;&#160;&#160;&#160;&#160;&#160;&#160;
                        <div class="card p-30">
                            <div class="media">
                                <div class="media-left meida media-middle">
                                    <span><i class="fa fa-archive" style="font-size:45px;color:dimgrey"></i></span>
                                </div>
                                <div class="media-body media-text-right">

                                    <p class="m-b-0">
                                        <a href="{{route('gestionArchives')}}">
                                            <button type="button" class="btn btn-success btn-flat btn-addon btn-lg m-b-10 m-l-5">
                                                Gestion Archives</button>
                                        </a>
                                    </p>
                                </div>
                            </div>

                        </div>
                    &#160;&#160;&#160;&#160;&#160;&#160;&#160;
                        <div class="card p-30">
                            <div class="media">
                                <div class="media-left meida media-middle">
                                    <span><i class="fa fa-envelope" style="font-size:45px;color:dimgrey"></i></span>
                                </div>
                                <div class="media-body media-text-right">

                                    <p class="m-b-0">
                                        <a href="{{route('gestionMails')}}">
                                            <button type="button" class="btn btn-success btn-flat btn-addon btn-lg m-b-10 m-l-5">
                                                Gestion des Mails</button>
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    &#160;&#160;&#160;&#160;&#160;&#160;&#160;
                    <div class="card p-30">
                        <div class="media">
                            <div class="media-left meida media-middle">
                                <span><i class="fa fa-trash" style="font-size:45px;color:dimgrey"></i></span>
                            </div>
                            <div class="media-body media-text-right">

                                <p class="m-b-0">
                                    <a href="{{route('corbeilles')}}">
                                        <button type="button" class="btn btn-success btn-flat btn-addon btn-lg m-b-10 m-l-5">
                                            Gestion Corbeilles</button>&#160;&#160;&#160;&#160;
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                    &#160;&#160;&#160;&#160;&#160;&#160;&#160;
                    <div class="card p-30">
                        <div class="media">
                            <div class="media-left meida media-middle">
                                <span><i class="fa fa-user" style="font-size:45px;color:dimgrey;"></i></span>
                            </div>
                            <div class="media-body media-text-right">

                                <p class="m-b-0">
                                    <a href="{{route('gestionUtilisateurs')}}">
                                        <button type="button" class="btn btn-success btn-flat btn-addon btn-lg m-b-10 m-l-5">
                                            Gestion Utlisateurs</button>
                                    </a>

                                </p>
                            </div>
                        </div>
                    </div>
                    &#160;&#160;&#160;&#160;&#160;&#160;&#160;
                    <div class="card p-30">
                        <div class="media">
                            <div class="media-left meida media-middle">
                                <span><i class="fa fa-user" style="font-size:45px;color:dimgrey;"></i></span>
                            </div>
                            <div class="media-body media-text-right">

                                <p class="m-b-0">
                                    <a href="{{route('gestionAgendas')}}">
                                        <button type="button" class="btn btn-success btn-flat btn-addon btn-lg m-b-10 m-l-5">
                                            Gestion Agendas</button>  &#160;&#160;&#160;&#160;
                                    </a>

                                </p>
                            </div>
                        </div>
                    </div>
                    &#160;&#160;&#160;&#160;&#160;&#160;&#160;
                    <div class="card p-30">
                        <div class="media">
                            <div class="media-left meida media-middle">
                                <span><i class="fa fa-user" style="font-size:45px;color:dimgrey;"></i></span>
                            </div>
                            <div class="media-body media-text-right">

                                <p class="m-b-0">
                                    <a href="{{route('gestionAgendas')}}">
                                        <button type="button" class="btn btn-success btn-flat btn-addon btn-lg m-b-10 m-l-5">
                                           Gestion Revisions</button>&#160;&#160;&#160;&#160;
                                    </a>

                                </p>
                            </div>
                        </div>
                    </div>
                    &#160;&#160;&#160;&#160;&#160;&#160;&#160;
                    <div class="card p-30">
                        <div class="media">
                            <div class="media-left meida media-middle">
                                <span><i class="fa fa-user" style="font-size:45px;color:dimgrey;"></i></span>
                            </div>
                            <div class="media-body media-text-right">

                                <p class="m-b-0">
                                    <a href="{{route('gestionAgendas')}}">
                                        <button type="button" class="btn btn-success btn-flat btn-addon btn-lg m-b-10 m-l-5">
                                           Gestion Historique</button>&#160;&#160;&#160;&#160;
                                    </a>

                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- BTN AJOUTER, LISTER, ARCHIVES -->


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
                                            <th>Titre</th>
                                            <th>Utilisateur</th>
                                            <th>Chemin</th>
                                            <th>Resume</th>
                                            <th>Categorie</th>
                                            <th>format</th>
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
                                            <td><span>456 pcs</span></td>
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
                                            <td><span>456 pcs</span></td>
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
                                            <td><span>456 pcs</span></td>
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
                                            <td><span>456 pcs</span></td>
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
                                <h4 class="card-title">Todo</h4>
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