@extends('layouts.app')
@section('title'){{'Education'}} @endsection
@section('content')
    <div class="container py-5 col-md-12">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header bg-defult">
              <div class="card-title">
                <h2 class="card-title">
                  <button type="button" class="btn bg-navy text-capitalize mr-3" id="AddNewBtn"><i class="fa-solid fa-circle-plus mr-2"></i>Add New</button>
                  EducationList
                </h2>
              </div>
              <a href="" class="btn btn-sm bg-navy float-right text-capitalize"><i class="fa fa-recycle mr-2" aria-hidden="true"></i>Vew Trash</a>
              <a href="" class="btn btn-sm bg-maroon float-right text-capitalize mr-3"><i class="fa fa-trash " aria-hidden="true"></i></a>
              {{-- table section start --}}
              <div class="card-body table-responsive p-0">
                <table class="table table-hover table-responsive table-borderless" id="ExperrienceList">
                  <thead>
                    <tr>
                      <th>Degree Name</th>
                      <th>Session</th>
                      <th>Institute Name</th>
                      <th>Description</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>

                  </tbody>
                </table>
              </div>
              <div class="card-footer">

              </div>
            </div>
          </div>
        </div>
        {{-- registration field Modal --}}
        <div class="modal fade show" id="NewEducationModal" role="dialog">
          <div class="modal-dialog modal-x1">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title">Add Education</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">x</span>
                </button>
              </div>
              <div class="modal-body">
                {{ Form::open(array('url' => '/Resume/education','method' => 'POST','class' => 'form-horizontal','id' => 'EducationForm' , 'file'=> true )) }}
                  <div class="card-body">
                    <div class="form-group row">
                      <label for="DegreeName" class="form-label col-md-3">Degree Name</label>
                      <div class="col-md-8">
                        <input type="text" name="DegreeName" class="form-control">
                      </div>
                    </div>
                  <div class="card-body">
                    <div class="form-group row">
                      <label for="Session" class="form-label col-md-3">Session</label>
                      <div class="col-md-8">
                        <input type="text" name="Session" class="form-control">
                      </div>
                    </div>
                  <div class="card-body">
                    <div class="form-group row">
                      <label for="InstituteName" class="form-label col-md-3">Institute Name</label>
                      <div class="col-md-8">
                        <input type="text" name="InstituteName" class="form-control">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="Description" class="form-label col-md-3">Description</label>
                      <div class="col-md-8">
                        <input type="text" name="Description" class="form-control">
                      </div>
                    </div>
                    <div class="card-footer">
                      <input type="submit" name="submit" id="submitBtn" class="btn bg-navy float-left text-capitalize">
                      <button type="button" id="formResetBtn" class="btn btn-warning float-right ">Reset</button>
                    </div>
                  </div>
                  </div>
                {{ Form::close() }}
              </div>
            </div>
          </div>
        </div>
        <div class="modal fade show" id="ShowEducationModal" role="dialog">
          <div class="modal-dialog modal-xl">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title">New Education</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
              </div>
              <div class="modal-body">
                <table class="table table-responsive table-bordered table-stripped table-condensed">
                  <tr>
                    
                  </tr>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="../js/education.js"></script>
@endsection