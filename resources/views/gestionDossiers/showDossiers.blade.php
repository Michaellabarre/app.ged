@extends('layout.index')
@section('appContent')

    <div class="container-fluid">
        <a href="{{route('showDossiers')}}"><button class="btn btn-dropbox">LISTE DES DOSSIERS</button></a>
        <button class="btn btn-dropbox">OPERATIONS SUR LES DOSSIERS</button>
        <button class="btn btn-dropbox">ADMIN</button>
        <h3>INFORMATIONS SUR LE DOSSIER</h3>
        <hr>
        <!-- Start Page Content -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Listes des Dossiers</h4>
                        <h6 class="card-subtitle">Cliquez sur les boutons d'actions pour plus d'options</h6>
                        <div class="table-responsive m-t-40">
                            <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                <tr>
                                    <th>Intitule</th>
                                    <th>Description</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tfoot>
                                <tr>
                                    <th>Intitule</th>
                                    <th>Description</th>
                                    <th>Actions</th>
                                </tr>
                                </tfoot>
                                <tbody>

                                <tr>
                                    <td>Finn Camacho</td>
                                    <td>Support Engineer</td>

                                    <td><button class="btn btn-primary">Envoyer</button>&#160;<button class="btn btn-primary">Modifier</button>&#160;<button class="btn btn-primary">Telecharger</button></td>
                                </tr>
                                <tr>
                                    <td>Finn Camacho</td>
                                    <td>Support Engineer</td>

                                    <td><button class="btn btn-primary">Envoyer</button>&#160;<button class="btn btn-primary">Modifier</button>&#160;<button class="btn btn-primary">Telecharger</button></td>
                                </tr>    <tr>
                                    <td>Finn Camacho</td>
                                    <td>Support Engineer</td>

                                    <td><button class="btn btn-primary">Envoyer</button>&#160;<button class="btn btn-primary">Modifier</button>&#160;<button class="btn btn-primary">Telecharger</button></td>
                                </tr>
                                <tr>
                                    <td>Finn Camacho</td>
                                    <td>Support Engineer</td>

                                    <td><button class="btn btn-primary">Envoyer</button>&#160;<button class="btn btn-primary">Modifier</button>&#160;<button class="btn btn-primary">Telecharger</button></td>
                                </tr>
                                <tr>
                                    <td>Finn Camacho</td>
                                    <td>Support Engineer</td>

                                    <td><button class="btn btn-primary">Envoyer</button>&#160;<button class="btn btn-primary">Modifier</button>&#160;<button class="btn btn-primary">Telecharger</button></td>
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