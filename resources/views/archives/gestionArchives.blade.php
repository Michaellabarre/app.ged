@extends('layout.index')
@section('appContent')

    <div class="container-fluid">
    <div class="row">
        <div class="col-lg-30">
            <h1 class="text text-center "><span class="label label-warning">GESTION DES ARCHIVES</span></h1>
        </div>
    </div>


        &#160;
        <!-- Start Page Content -->
        <div class="row center-block">

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
            &#160; &#160;

            <div>

                <form class="navbar-right inline-form">
                    <div class="form-group">
                        <input type="search" class="input-sm form-control" placeholder="Recherche">
                        <button type="submit" class="btn btn-outline-success btn-sm"><span class="glyphicon glyphicon-eye-open"></span> Chercher</button>
                    </div>
                </form>
            </div>

        </div>
    </div>






@endsection