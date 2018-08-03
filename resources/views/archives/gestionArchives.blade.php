@extends('layout.index')
@section('appContent')

    <div class="container-fluid">
    <div class="row">
        <div class="col-lg-30">
            <h1 class="text text-center "><span class="label label-warning">GESTION DES ARCHIVES</span></h1>
        </div>
    </div>
    <br/><br/> <!-- Container fluid  -->

        &#160;
        <!-- Start Page Content -->
        <div class="row center-block">

            &#160;
                    <div class="media">

                        <div class="media-body media-text-right">

                            <p class="m-b-0">
                                <a href="{{route('addArchives')}}">
                                    <button type="button" class="btn btn-success btn-flat btn-addon btn-sm"><span><i class="fa fa-plus-circle" style="font-size:20px;color:black"></i></span>
                                        Ajouter Archives </button>
                                </a>
                            </p>
                        </div>
                    </div>




            &#160;

                    <div class="media">

                        <div class="media-body media-text-right">

                            <p class="m-b-0">
                                <a href="{{route('showArchives')}}">
                                    <button type="button" class="btn btn-success btn-flat btn-addon btn-sm"> <span><i class="fa fa-reorder" style="font-size:20px;color:black"></i></span>
                                        Liste Archives</button>
                                </a>
                            </p>

                        </div>
                    </div>

            &#160;

                <div class="media">

                    <div class="media-body media-text-right">

                        <p class="m-b-0">
                            <a href="{{route('showArchives')}}">
                                <button type="button" class="btn btn-success btn-flat btn-addon btn-sm"> <span><i class="fa fa-level-down" style="font-size:20px;color:black"></i></span>
                                    Importer Archives</button>
                            </a>
                        </p>
                    </div>
                </div>

            &#160;

                <div class="media">

                    <div class="media-body media-text-right">

                        <p class="m-b-0">
                            <a href="{{route('showArchives')}}">
                                <button type="button" class="btn btn-success btn-flat btn-addon btn-sm"><span><i class="fa fa-retweet" style="font-size:20px;color:black"></i></span>
                                    Déplacer Archives</button>
                            </a>
                        </p>
                    </div>
                </div>

            &#160;

                <div class="media">

                    <div class="media-body media-text-right">

                        <p class="m-b-0">
                            <a href="{{route('showArchives')}}">
                                <button type="button" class="btn btn-success btn-flat btn-addon btn-sm"> <span><i class="fa fa-newspaper-o" style="font-size:20px;color:black"></i></span>
                                    Consulter Archives</button>
                            </a>
                        </p>
                    </div>
                </div>

            &#160;

                <div class="media">

                    <div class="media-body media-text-right">

                        <p class="m-b-0">
                            <a href="{{route('showArchives')}}">
                                <button type="button" class="btn btn-success btn-flat btn-addon btn-sm">    <span><i class="fa fa-level-up" style="font-size:20px;color:black"></i></span>
                                    Exporter Archives</button>
                            </a>
                        </p>
                    </div>
                </div>

            &#160;

                <div class="media">

                    <div class="media-body media-text-right">

                        <p class="m-b-0">
                            <a href="{{route('showArchives')}}">
                                <button type="button" class="btn btn-success btn-flat btn-addon btn-sm"> <span><i class="fa fa-heartbeat" style="font-size:20px;color:black"></i></span>
                                    Convertir Archives</button>
                            </a>
                        </p>
                    </div>
                </div>

            &#160;

                <div class="media">

                    <div class="media-body media-text-right">

                        <p class="m-b-0">
                            <a href="{{route('showArchives')}}">
                                <button type="button" class="btn btn-success btn-flat btn-addon btn-sm">  <span><i class="fa fa-edit" style="font-size:20px;color:black"></i></span>
                                    Traiter un Archives</button>
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
                        <h4>Recent Archives </h4>
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

    <!-- End Page wrapper  -->



@endsection