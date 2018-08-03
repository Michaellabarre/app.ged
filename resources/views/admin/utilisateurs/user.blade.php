@extends('admin.layout.adminlayout')
@section('dashContent')
    <div class="content mt-3">
        <div class="animated fadeIn">

            <div class="row">

                <div class="col-xs-2 col-sm-2">

                </div>
                <div class="col-xs-8 col-sm-8">
                    <div class="card">
                        <div class="card-header">
                            <strong>Ajouter Utlisateurs</strong> <small> Nouveau</small>
                        </div>
                        <div class="card-body card-block">
                            <div class="form-group">
                                <label class=" form-control-label">Nom</label>
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                    <input class="form-control" placeholder="Yao">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class=" form-control-label">Prenoms</label>
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                    <input class="form-control" placeholder="Richard">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class=" form-control-label">Indiquer Password</label>
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-key"></i></div>
                                    <input class="form-control" placeholder="indiquer mot de passe">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class=" form-control-label">Confirmer Password</label>
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-key"></i></div>
                                    <input class="form-control" placeholder=" confirmer le mot de passe">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class=" form-control-label">Email</label>
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-mail-reply"></i></div>
                                    <input class="form-control" placeholder="exemple@gm.com">
                                </div>

                            </div>
                            <div class="form-group">
                                <label class=" form-control-label">Contact</label>
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-address-card"></i></div>
                                    <input class="form-control" placeholder="78640000">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class=" form-control-label">Type Utilisateurs</label>
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-user-secret"></i></div>
                                    <input class="form-control" placeholder="Admin">
                                </div>
                            </div>
                            <div class="form-actions form-group">
                                <button type="submit" class="btn btn-success btn-lg"><i class="fa fa-dot-circle-o"></i> Validez</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-2 col-sm-2">

                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Bordered Table</strong>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">First</th>
                                    <th scope="col">Last</th>
                                    <th scope="col">Handle</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                </tr>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            </div>

        </div>

        </div><!-- .animated -->
    </div><!-- .content -->

@endsection