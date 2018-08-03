@extends('layout.index')
@section('appContent')
    <div class="container-fluid">
        <!-- Start Page Content -->
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <a href="{{route('showDossiers')}}"><button class="btn btn-dropbox">LISTE DES DOSSIERS</button></a>
                        <button class="btn btn-dropbox">OPERATIONS SUR LES DOSSIERS</button>
                        <button class="btn btn-dropbox">ADMIN</button>
                        <h3>INFORMATIONS SUR LE DOSSIER</h3>
                        <hr>
                        <form class="form-valide " action="#" method="post">

                            <hr>
                            <h5>INFORMATIONS GENERALE</h5>
                            <hr>
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-validation">
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">Intitule<span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-username" name="val-username" placeholder="Enter a username..">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-email">Description <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-email" name="val-email" placeholder="Your valid email..">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-lg-8 ml-auto">
                                                <button type="submit" class="btn btn-primary">Validez</button>
                                            </div>
                                        </div>
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
@endsection