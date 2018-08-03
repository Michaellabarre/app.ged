@extends('admin.layout.adminlayout')
@section('dashContent')

  <div class="row">
      <div class="col-lg-3 col-md-6">
          <div class="card">
              <div class="card-body">
                  <div class="stat-widget-four">
                      <div class="stat-icon dib">
                          <i class="ti-server text-muted"></i>
                      </div>
                      <div class="stat-content">
                          <div class="text-left dib">
                              <div class="stat-heading">Database</div>
                              <div class="stat-text">Total: 765</div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <div class="col-lg-3 col-md-6">
          <div class="card">
              <div class="card-body">
                  <div class="stat-widget-four">
                      <div class="stat-icon dib">
                          <i class="ti-user text-muted"></i>
                      </div>
                      <div class="stat-content">
                          <div class="text-left dib">
                              <div class="stat-heading">Users</div>
                              <div class="stat-text">Total: 24720</div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <div class="col-lg-3 col-md-6">
          <div class="card">
              <div class="card-body">
                  <div class="stat-widget-four">
                      <div class="stat-icon dib">
                          <i class="ti-stats-up text-muted"></i>
                      </div>
                      <div class="stat-content">
                          <div class="text-left dib">
                              <div class="stat-heading">Daily Sales</div>
                              <div class="stat-text">Total: $76,58,714</div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <div class="col-lg-3 col-md-6">
          <div class="card">
              <div class="card-body">
                  <div class="stat-widget-four">
                      <div class="stat-icon dib">
                          <i class="ti-pulse text-muted"></i>
                      </div>
                      <div class="stat-content">
                          <div class="text-left dib">
                              <div class="stat-heading">Bandwidth</div>
                              <div class="stat-text">Total: 4TB</div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>


      <div class="row">
          <div class="col-md-6">
              <div class="card">
                  <div class="card-header">
                      <strong>Categorie</strong>
                      <small>Use this class
                          <code>.btn-block</code>
                      </small>
                  </div>
                  <div class="card-body">
                      <a type="button" class="btn btn-primary btn-lg btn-block"  href="#" >Ajouter categorie</a>
                      <a type="button" class="btn btn-success btn-lg btn-block"  href="#" >Liste Categorie</a>
                      <a type="button" class="btn btn-danger btn-lg btn-block"  href="#" >Block level button</a>
                  </div>
              </div><!-- /# card -->
          </div>

          <div class="col-md-6">
              <div class="card">
                  <div class="card-header">
                      <strong>Utlisateurs</strong>
                      <small>Use this class
                          <code>.btn-block</code>
                      </small>
                  </div>
                  <div class="card-body">
                      <a type="button" class="btn btn-primary btn-lg btn-block"  href="#" >Ajouter Utilisateurs</a>
                      <a type="button" class="btn btn-success btn-lg btn-block"  href="#" >Liste Des Utilisateurs</a>
                      <a type="button" class="btn btn-danger btn-lg btn-block"  href="#" >Block level button</a>
                  </div>
              </div><!-- /# card -->
          </div>
      </div>






  </div>

@endsection