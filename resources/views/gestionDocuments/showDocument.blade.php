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
                                    <td>Finn Camacho</td>
                                    <td>Support Engineer</td>
                                    <td>San Francisco</td>
                                    <td>47</td>
                                    <td>2009/07/07</td>
                                    <td>$87,500</td>
                                    <td><button class="btn btn-primary">Archiver</button>&#160;<button class="btn btn-primary">Modifier</button>&#160;<button class="btn btn-primary">Telecharger</button></td>
                                </tr>
                                <tr>
                                    <td>Serge Baldwin</td>
                                    <td>Data Coordinator</td>
                                    <td>Singapore</td>
                                    <td>64</td>
                                    <td>2012/04/09</td>
                                    <td>$138,575</td>
                                    <td><button class="btn btn-primary">Archiver</button>&#160;<button class="btn btn-primary">Modifier</button>&#160;<button class="btn btn-primary">Telecharger</button></td>

                                </tr>
                                <tr>
                                    <td>Zenaida Frank</td>
                                    <td>Software Engineer</td>
                                    <td>New York</td>
                                    <td>63</td>
                                    <td>2010/01/04</td>
                                    <td>$125,250</td>
                                    <td><button class="btn btn-primary">Archiver</button>&#160;<button class="btn btn-primary">Modifier</button>&#160;<button class="btn btn-primary">Telecharger</button></td>

                                </tr>
                                <tr>
                                    <td>Zorita Serrano</td>
                                    <td>Software Engineer</td>
                                    <td>San Francisco</td>
                                    <td>56</td>
                                    <td>2012/06/01</td>
                                    <td>$115,000</td>
                                    <td><button class="btn btn-primary">Archiver</button>&#160;<button class="btn btn-primary">Modifier</button>&#160;<button class="btn btn-primary">Telecharger</button></td>

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