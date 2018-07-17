@extends('layout.index')
@section('appContent')
    <div class="container-fluid">
        <!-- Start Page Content -->
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">

                        <button class="btn btn-dropbox">ADMIN</button>
                        <h3>INFORMATIONS SUR LE GROUPE UTILISATEURS</h3>
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
                                            <label class="col-lg-4 col-form-label" for="val-email">description <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-email" name="val-email" placeholder="Your valid email..">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-suggestions">niveau <span class="text-danger">*</span></label>
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
                                            <label class="col-lg-4 col-form-label"><a data-toggle="modal" data-target="#modal-terms" href="#">Vous allez ajouter un nouveau Utilisateur</a> <span class="text-danger">*</span></label>
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

    <!-- End Container fluid  -->

                        <h4 class="card-title">Listes des groupes utilisateurs</h4>
                        <h6 class="card-subtitle">Cliquez sur les boutons d'actions pour plus d'options</h6>
                        <div class="table-responsive m-t-40">
                            <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                <tr>
                                    <th>intitule</th>
                                    <th>description</th>
                                    <th>niveau</th>
                                   <th>DATE d'inscrit</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tfoot>
                                <tr>
                                    <th>intitule</th>
                                    <th>description</th>
                                    <th>niveau</th>
                                    <th>DATE d'inscrit</th>
                                    <th>Actions</th>
                                </tr>
                                </tfoot>
                                <tbody>


                                <tr>
                                    <td>Finn Camacho</td>
                                    <td>Support Engineer</td>
                                    <td>San Francisco</td>
                                    <td>47</td>

                                    <td><button class="btn btn-primary">Modifier</button>&#160;<button class="btn btn-primary">supprimer</button></td>
                                </tr>
                                <tr>
                                    <td>Finn Camacho</td>
                                    <td>Support Engineer</td>
                                    <td>San Francisco</td>
                                    <td>47</td>

                                    <td><button class="btn btn-primary">Modifier</button>&#160;<button class="btn btn-primary">supprimer</button></td>
                                </tr> <tr>
                                    <td>Finn Camacho</td>
                                    <td>Support Engineer</td>
                                    <td>San Francisco</td>
                                    <td>47</td>

                                    <td><button class="btn btn-primary">Modifier</button>&#160;<button class="btn btn-primary">supprimer</button></td>
                                </tr> <tr>
                                    <td>Finn Camacho</td>
                                    <td>Support Engineer</td>
                                    <td>San Francisco</td>
                                    <td>47</td>

                                    <td><button class="btn btn-primary">Modifier</button>&#160;<button class="btn btn-primary">supprimer</button></td>
                                </tr> <tr>
                                    <td>Finn Camacho</td>
                                    <td>Support Engineer</td>
                                    <td>San Francisco</td>
                                    <td>47</td>

                                    <td><button class="btn btn-primary">Modifier</button>&#160;<button class="btn btn-primary">supprimer</button></td>
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
@endsection