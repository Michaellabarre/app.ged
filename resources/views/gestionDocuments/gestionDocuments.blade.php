@extends('layout.index')
@section('appContent')

    <!-- Container fluid  -->
     <div class="container-fluid">
         <div class="row">
             <div class="col-lg-30">
                 <h1 class="text text-center "><span class="label label-warning">GESTION DES DOCUMENTS</span></h1>
             </div>
         </div>
         <br/><br/
        <!-- Start Page Content -->
        <div class="row">


                <div class="media">

                    <div class="media-body media-text-right">

                        <p class="m-b-0">
                            <a href="{{route('addDocuments')}}">
                                <button type="button" class="btn btn-success btn-flat btn-addon btn-sm">
                                    <span><i class="fa fa-plus-circle" style="font-size:20px;color:black"></i></span>
                                   Créer Documents </button>
                            </a>
                        </p>
                    </div>
                </div>

            &#160;


                <div class="media">

                    <div class="media-body media-text-right">

                        <p class="m-b-0">
                            <a href="{{route('showDocument')}}">
                                <button type="button" class="btn btn-success btn-flat btn-addon btn-sm">
                                    <span><i class="fa fa-object-group" style="font-size:20px;color:black"></i></span>
                                    Afficher Liste Documents</button>
                            </a>
                        </p>
                    </div>
                </div>

            &#160;

                <div class="media">
                    <form class="navbar-right inline-form">
                        <div class="form-group">
                            <input type="search" class="input-sm form-control" placeholder="Recherche">
                            <button type="submit" class="btn btn-outline-success btn-sm"><span class="glyphicon glyphicon-eye-open"></span> Chercher</button>
                        </div>
                    </form>
                </div>

                </div>




        </div>
        <!-- BTN AJOUTER, LISTER, ARCHIVES -->
        <div class="bg-white card-toggle-body m-l-0 m-r-0 box-shadow ">
            <div class="button-list">

            </div>
        </div>








@endsection