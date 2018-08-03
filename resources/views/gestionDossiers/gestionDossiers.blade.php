@extends('layout.index')
@section('appContent')

    <!-- Container fluid  -->
    <div class="container-fluid">
        <!-- Start Page Content -->


        <div class="row">
            <div class="col-lg-30">
                <h1 class="text text-center "><span class="label label-warning">GESTION DES DOSSIERS</span></h1>
            </div>
        </div>
    <br/><br/>

        <div class="row">

                <div class="media">
                    <div class="media-body media-text-right">
                        <p class="m-b-0">
                            <a href="{{route('addDossiers')}}">
                                <button type="button" class="btn btn-success btn-flat btn-addon btn-sm"> <span><i class="fa fa-plus-circle" style="font-size:20px;color:black"></i></span>
                                    Ajouter un Dossier </button>
                            </a>
                        </p>
                    </div>
                </div>


            &#160;&#160;&#160;

                <div class="media">

                    <div class="media-body media-text-right">

                        <p class="m-b-0">
                            <a href="{{route('showDossiers')}}">
                                <button type="button" class="btn btn-success btn-flat btn-addon btn-sm"><span><i class="fa fa-reorder" style="font-size:20px;color:black"></i></span>
                                    Liste des Dossier</button>

                            </a>
                        </p>

                    </div>
                </div>

            &#160;&#160;&#160;

                <div class="media">

                    <div class="media-body media-text-right">

                        <p class="m-b-0">
                            <a href="{{route('imporDossiers')}}">
                                <button type="button" class="btn btn-success btn-flat btn-addon btn-sm"> <span><i class="fa fa-level-down" style="font-size:20px;color:black"></i></span>
                                    Importer Dossiers</button>
                            </a>
                        </p>
                    </div>
                </div>

            &#160;&#160;&#160;

                <div class="media">

                    <div class="media-body media-text-right">

                        <p class="m-b-0">
                            <a href="{{route('deplDossiers')}}">
                                <button type="button" class="btn btn-success btn-flat btn-addon btn-sm">  <span><i class="fa fa-retweet" style="font-size:20px;color:black"></i></span>
                                    Déplacer Dossiers</button>&#160;&#160;
                            </a>
                        </p>
                    </div>
                </div>

            &#160;&#160;&#160;

                <div class="media">

                    <div class="media-body media-text-right">

                        <p class="m-b-0">
                            <a href="{{route('consulDossiers')}}">
                                <button type="button" class="btn btn-success btn-flat btn-addon btn-sm"> <span><i class="fa fa-newspaper-o" style="font-size:20px;color:black"></i></span>
                                    Consulter Dossiers</button>
                            </a>
                        </p>
                    </div>
                </div>

            &#160;&#160;&#160;

                <div class="media">

                    <div class="media-body media-text-right">

                        <p class="m-b-0">
                            <a href="{{route('exportDossiers')}}">
                                <button type="button" class="btn btn-success btn-flat btn-addon btn-sm"> <span><i class="fa fa-level-up" style="font-size:20px;color:black"></i></span>
                                    Exporter Dossiers</button>
                            </a>
                        </p>
                    </div>
                </div>





        </div>
        <!-- BTN AJOUTER, LISTER, ARCHIVES -->
        <div class="bg-white card-toggle-body m-l-0 m-r-0 box-shadow ">
            <div class="button-list">

            </div>
        </div>

        <div class="row">
            <!-- Column     -->
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-title">
                        <h4>Recent Dossiers </h4>
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



        <!-- End PAge Content -->
    </div>
    <!-- End Container fluid  -->
    </div>
    <!-- End Page wrapper  -->
    </div>


@endsection