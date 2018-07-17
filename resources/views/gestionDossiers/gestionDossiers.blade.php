@extends('layout.index')
@section('appContent')

    <!-- Container fluid  -->
    &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; <div class="container-fluid">
        <!-- Start Page Content -->
        <div class="row">

            <div class="card p-30">
                <div class="media">
                    <div class="media-left meida media-middle">
                        <span><i class="fa fa-plus-circle" style="font-size:48px;color:black"></i></span>
                    </div>
                    <div class="media-body media-text-right">

                        <p class="m-b-0">
                            <a href="{{route('addArchives')}}">
                                <button type="button" class="btn btn-success btn-flat btn-addon btn-lg m-b-10 m-l-5">
                                    Ajouter un Dossier </button>&#160;&#160;&#160;&#160;&#160;
                            </a>
                        </p>
                    </div>
                </div>
            </div>

            &#160;&#160;&#160;&#160;&#160;&#160;
            <div class="card p-30">
                <div class="media">
                    <div class="media-left meida media-middle">
                        <span><i class="fa fa-reorder" style="font-size:48px;color:black"></i></span>
                    </div>
                    <div class="media-body media-text-right">

                        <p class="m-b-0">
                            <a href="{{route('showArchives')}}">
                                <button type="button" class="btn btn-success btn-flat btn-addon btn-lg m-b-10 m-l-5">
                                    Liste des Dossier</button>&#160;&#160;&#160;&#160;&#160;&#160;
                            </a>
                        </p>

                    </div>
                </div>
            </div>
            &#160;&#160;&#160;&#160;&#160;&#160;
            <div class="card p-30">
                <div class="media">
                    <div class="media-left meida media-middle">
                        <span><i class="fa fa-level-down" style="font-size:48px;color:black"></i></span>
                    </div>
                    <div class="media-body media-text-right">

                        <p class="m-b-0">
                            <a href="{{route('showArchives')}}">
                                <button type="button" class="btn btn-success btn-flat btn-addon btn-lg m-b-10 m-l-5">
                                    Importer Dossiers</button>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
            &#160;&#160;&#160;&#160;&#160;&#160;
            <div class="card p-30">
                <div class="media">
                    <div class="media-left meida media-middle">
                        <span><i class="fa fa-retweet" style="font-size:48px;color:black"></i></span>
                    </div>
                    <div class="media-body media-text-right">

                        <p class="m-b-0">
                            <a href="{{route('showArchives')}}">
                                <button type="button" class="btn btn-success btn-flat btn-addon btn-lg m-b-10 m-l-5">
                                    Déplacer Dossiers</button>&#160;&#160;
                            </a>
                        </p>
                    </div>
                </div>
            </div>
            &#160;&#160;&#160;&#160;&#160;&#160;
            <div class="card p-30">
                <div class="media">
                    <div class="media-left meida media-middle">
                        <span><i class="fa fa-newspaper-o" style="font-size:48px;color:black"></i></span>
                    </div>
                    <div class="media-body media-text-right">

                        <p class="m-b-0">
                            <a href="{{route('showArchives')}}">
                                <button type="button" class="btn btn-success btn-flat btn-addon btn-lg m-b-10 m-l-5">
                                    Consulter Dossiers</button>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
            &#160;&#160;&#160;&#160;&#160;&#160;
            <div class="card p-30">
                <div class="media">
                    <div class="media-left meida media-middle">
                        <span><i class="fa fa-level-up" style="font-size:48px;color:black"></i></span>
                    </div>
                    <div class="media-body media-text-right">

                        <p class="m-b-0">
                            <a href="{{route('showArchives')}}">
                                <button type="button" class="btn btn-success btn-flat btn-addon btn-lg m-b-10 m-l-5">
                                    Exporter Dossiers</button>
                            </a>
                        </p>
                    </div>
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