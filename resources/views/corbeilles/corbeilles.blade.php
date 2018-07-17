@extends('layout.index')
@section('appContent')

    <div class="container-fluid">
        <!-- Start Page Content -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">gestion de la Corbeilles</h4>
                        <h6 class="card-subtitle">Cliquez sur les boutons d'actions pour plus d'options</h6>
                        <div class="table-responsive m-t-40">
                            <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                <tr>
                                    <th>Documents</th>
                                    <th>Description</th>
                                    <th>date de Surppression</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tfoot>
                                <tr>
                                    <th>Documents</th>
                                    <th>Description</th>
                                    <th>date de Surppression</th>
                                    <th>Actions</th>
                                </tr>
                                </tfoot>
                                <tbody>

                                <tr>
                                    <td>Finn Camacho</td>
                                    <td>Support Engineer</td>
                                    <td>San Francisco</td>
                                    <td><button class="btn btn-primary">restaurer</button>&#160;<button class="btn btn-primary">destor</button>
                                </tr>
                                <tr>
                                    <td>Finn Camacho</td>
                                    <td>Support Engineer</td>
                                    <td>San Francisco</td>
                                    <td><button class="btn btn-primary">restaurer</button>&#160;<button class="btn btn-primary">destor</button>
                                </tr>
                                <tr>
                                    <td>Finn Camacho</td>
                                    <td>Support Engineer</td>
                                    <td>San Francisco</td>
                                    <td><button class="btn btn-primary">restaurer</button>&#160;<button class="btn btn-primary">destor</button>
                                </tr>
                                <tr>
                                    <td>Finn Camacho</td>
                                    <td>Support Engineer</td>
                                    <td>San Francisco</td>
                                    <td><button class="btn btn-primary">restaurer</button>&#160;<button class="btn btn-primary">destor</button>
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