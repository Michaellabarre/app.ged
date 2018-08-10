@extends('layout.index')
@section('appContent')

    <div class="container-fluid">
        <!-- Start Page Content -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Listes des Documents</h4>
                        <h6 class="card-subtitle">Cliquez sur les boutons d'actions pour plus d'options</h6>
                        <div class="table-responsive m-t-40">
                            <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                <tr>
                                    <th>Intitule</th>
                                    <th>Chemin</th>
                                    <th>Utilisateurs</th>
                                    <th>Categories</th>
                                    <th>Format</th>
                                    <th>Crée le</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tfoot>
                                <tr>
                                    <th>Intitule</th>
                                    <th>Chemin</th>
                                    <th>Utilisateurs</th>
                                    <th>Categories</th>
                                    <th>Format</th>
                                    <th>Crée le</th>
                                    <th>Actions</th>
                                </tr>
                                </tfoot>
                                <tbody>


                                <tr>
                                    <td>Serge Baldwin</td>
                                    <td>Data Coordinator</td>
                                    <td>Singapore</td>
                                    <td>64</td>
                                    <td>2012/04/09</td>
                                    <td>$138,575</td>
                                    <td><button class="btn btn-primary">Ouvr</button>&#160;<button class="btn btn-primary">Arch</button>&#160;<button class="btn btn-primary">Dépl</button>&#160;<button class="btn btn-primary">Supp</button><button class="btn btn-primary">téléch</button><button class="btn btn-primary">conver</button><button class="btn btn-primary">réviser</button></td>

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