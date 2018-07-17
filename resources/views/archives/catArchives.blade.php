@extends('layout.index')
@section('appContent')
    <div class="container-fluid">
        <!-- Start Page Content -->
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <a href="{{route('showArchives')}}"><button class="btn btn-dropbox">GESTION DES CATEGORIES ARCHIVES</button></a>
                        <button class="btn btn-dropbox">OPERATIONS SUR LES Archives</button>
                        <button class="btn btn-dropbox">ADMIN</button>
                        <h3>INFORMATIONS SUR l'archives</h3>
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







        <!-- Start Page Content -->



                                        <hr>   <hr>
                        <h4 class="card-title">Listes des Archives</h4>
                                        <hr>   <hr>
                        <h6 class="card-subtitle">Cliquez sur les boutons d'actions pour plus d'options</h6>

                        <div class="table-responsive m-t-40">
                            <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                <tr>
                                    <th>Intitule</th>
                                    <th>Description</th>
                                    <th>date de creation</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tfoot>
                                <tr>
                                    <th>Intitule</th>
                                    <th>Description</th>
                                    <th>date de creation</th>
                                    <th>Actions</th>
                                </tr>
                                </tfoot>
                                <tbody>

                                <tr>
                                    <td>Finn Camacho</td>
                                    <td>Support Engineer</td>
                                    <td>San Francisco</td>
                                    <td><button class="btn btn-primary">supprimer</button>&#160;<button class="btn btn-primary">Modifier</button></td>
                                </tr>
                                <tr>
                                    <td>Finn Camacho</td>
                                    <td>Support Engineer</td>
                                    <td>San Francisco</td>
                                    <td><button class="btn btn-primary">supprimer</button>&#160;<button class="btn btn-primary">Modifier</button></td>
                                </tr> <tr>
                                    <td>Finn Camacho</td>
                                    <td>Support Engineer</td>
                                    <td>San Francisco</td>
                                    <td><button class="btn btn-primary">supprimer</button>&#160;<button class="btn btn-primary">Modifier</button></td>
                                </tr> <tr>
                                    <td>Finn Camacho</td>
                                    <td>Support Engineer</td>
                                    <td>San Francisco</td>
                                    <td><button class="btn btn-primary">supprimer</button>&#160;<button class="btn btn-primary">Modifier</button></td>
                                </tr> <tr>
                                    <td>Finn Camacho</td>
                                    <td>Support Engineer</td>
                                    <td>San Francisco</td>
                                    <td><button class="btn btn-primary">supprimer</button>&#160;<button class="btn btn-primary">Modifier</button></td>
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