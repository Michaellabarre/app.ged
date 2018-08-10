@extends('layout.index')
@section('appContent')
    <div class="container-fluid">
        <!-- Start Page Content -->
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">

                        <h3>INFORMATIONS SUR LE DOCUMENTS</h3>
                        <hr>
                        <form class="form-valide " action="#" method="post">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Chargez Document</h4>
                                            <div class="fallback dropzone">
                                                <input name="file" type="file" multiple />
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                                    <hr>
                                    <h5>CLASSEMENT</h5>
                                    <hr>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-confirm-password">Dossiers Destinations<span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <select class="form-control" id="val-skill" name="val-skill">
                                                    <option value="">Veuillez sélectionner</option>
                                                    <option value="css">COMPTABLE</option>
                                                    <option value="css">INFORGRAPHE</option>
                                                    <option value="css">SECRETARIAT</option>
                                                </select>
                                            </div>
                                        </div>
                                    <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-suggestions">Categories <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <select class="form-control" id="val-skill" name="val-skill">
                                                    <option value="">Veuillez sélectionner</option>
                                                    <option value="css">FACTURE</option>
                                                    <option value="css">INFORGRAPHE</option>
                                                    <option value="css">SECRETARIAT</option>
                                                </select>
                                            </div>
                                        </div>
                                    <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-skill">Statuts<span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <select class="form-control" id="val-skill" name="val-skill">
                                                    <option value="">Veuillez sélectionner</option>
                                                    <option value="css">FACTURE</option>
                                                    <option value="css">INFORGRAPHE</option>
                                                    <option value="css">SECRETARIAT</option>
                                                </select>
                                            </div>
                                        </div>
                                    <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-currency">Formats <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <select class="form-control" id="val-skill" name="val-skill">
                                                    <option value="">Veuillez sélectionner</option>
                                                    <option value="css">FACTURE</option>
                                                    <option value="css">INFORGRAPHE</option>
                                                    <option value="css">SECRETARIAT</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-website">Utilisateurs <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-website" name="val-website" placeholder="recuperez l'users en session">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label"><a data-toggle="modal" data-target="#modal-terms" href="#">Vous allez ajouter un nouveau document</a> <span class="text-danger">*</span></label>
                                            <div class="col-lg-8">
                                                <label class="css-control css-control-primary css-checkbox" for="val-terms">
                                                    <input type="checkbox" class="css-control-input" id="val-terms" name="val-terms" value="1">
                                                    <span class="css-control-indicator"></span> Oui continuez !
                                                </label>
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