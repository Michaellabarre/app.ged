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
                                <button type="button" class="btn btn-success btn-flat btn-addon btn-sm">
                                    <span><i class="fa fa-plus-circle" style="font-size:20px;color:black"></i></span>
                                    Créer Dossier </button>
                            </a>
                        </p>
                    </div>
                </div>


            &#160;&#160;&#160;

                <div class="media">

                    <div class="media-body media-text-right">

                        <p class="m-b-0">
                            <a href="{{route('showDossiers')}}">
                                <button type="button" class="btn btn-success btn-flat btn-addon btn-sm">
                                    <span><i class="fa fa-reorder" style="font-size:20px;color:black"></i></span>
                                    Afficher Liste  Dossier</button>

                            </a>
                        </p>

                    </div>
                </div>
            &#160;&#160;&#160; &#160;&#160;&#160;
        <div>

            <form class="navbar-right inline-form">
                <div class="form-group">
                    <input type="search" class="input-sm form-control" placeholder="Recherche">
                    <button type="submit" class="btn btn-outline-success btn-sm"><span class="glyphicon glyphicon-eye-open"></span> Chercher</button>
                </div>
            </form>
        </div>
        <!-- End PAge Content -->
    </div>
    <!-- End Container fluid  -->
    </div>
    <!-- End Page wrapper  -->
    </div>


@endsection