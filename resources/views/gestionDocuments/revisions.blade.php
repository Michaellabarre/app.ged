@extends('layout.index')
@section('appContent')

    <div class="container-fluid">
        <button class="btn btn-dropbox">ADMIN</button>
        <h3>LISTE DES DOCUMENTS REVISES</h3>
        <hr>
        <!-- Start Page Content -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <div class="table-responsive m-t-40">
                            <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                <tr>

                                    <th>DOCUMENTS</th>
                                    <th>intitule</th>
                                    <th>description</th>
                                    <th>DATE MODIF DOCUMENT</th>

                                </tr>
                                </thead>
                                <tfoot>
                                <tr>
                                    <th>DOCUMENTS</th>
                                    <th>intitule</th>
                                    <th>description</th>
                                    <th>DATE MODIF DOCUMENT</th>

                                </tr>
                                </tfoot>
                                <tbody>

                                <tr>
                                    <td>Finn Camacho</td>
                                    <td>Support Engineer</td>
                                    <td>Finn Camacho</td>
                                    <td>Support Engineer</td>


                                </tr>
                                <tr>
                                    <td>Finn Camacho</td>
                                    <td>Support Engineer</td>
                                    <td>Finn Camacho</td>
                                    <td>Support Engineer</td>

                                </tr>
                                <tr>
                                    <td>Finn Camacho</td>
                                    <td>Support Engineer</td>
                                    <td>Finn Camacho</td>
                                    <td>Support Engineer</td>


                                </tr>
                                <tr>
                                    <td>Finn Camacho</td>
                                    <td>Support Engineer</td>
                                    <td>Finn Camacho</td>
                                    <td>Support Engineer</td>

                                </tr>
                                <tr>
                                    <td>Finn Camacho</td>
                                    <td>Support Engineer</td>
                                    <td>Finn Camacho</td>
                                    <td>Support Engineer</td>

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