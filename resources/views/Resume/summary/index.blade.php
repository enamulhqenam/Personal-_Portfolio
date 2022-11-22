@extends('layouts.app')
@section('title'){{'Summary'}} @endsection
@section('content')
    <div class="container py-5 col-md-12">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header bg-defult">
              <div class="card-title">
                <h2 class="card-title">
                  <button type="button" class="btn bg-navy text-capitalize mr-3" id="AddNewBtn"><i class="fa-solid fa-circle-plus mr-2"></i>Add New</button>
                  Resume List
                </h2>
              </div>
              <a href="" class="btn btn-sm bg-navy float-right text-capitalize"><i class="fa fa-recycle mr-2" aria-hidden="true"></i>Vew Trash</a>
              <a href="" class="btn btn-sm bg-maroon float-right text-capitalize mr-3"><i class="fa fa-trash " aria-hidden="true"></i></a>
              {{-- table section start --}}
              <div class="card-body table-responsive p-0">
                <table class="table table-hover table-responsive table-borderless" id="SummaryList">
                  <thead>
                    <tr>
                      <th>Description</th>
                      <th>Summary</th>
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
        <div class="modal fade show" id="NewSummaryModal" role="dialog">
          <div class="modal-dialog modal-x1">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title">New Summary</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">x</span>
                </button>
              </div>
              <div class="modal-body">
                {{ Form::open(array('url' => '/resume/summary','method' => 'POST','class' => 'form-horizontal','id' => 'SummaryForm' , 'file'=> true )) }}
                  <div class="card-body">
                    <div class="form-group row">
                      <label for="Description" class="form-label col-md-3">Description</label>
                      <div class="col-md-8">
                        <input type="text" name="Description" class="form-control">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="Summary" class="form-label col-md-3">Summary</label>
                      <div class="col-md-8">
                        <input type="text" name="Summary" class="form-control">
                      </div>
                    </div>
                      <div class="card-footer">
                        <input type="submit" id="submitBtn" class="btn bg-navy float-right w-25 text-capitalize">
                      </div>
                  </div>
                  </div>
                {{ Form::close() }}
              </div>
            </div>
          </div>
        </div>
        <div class="modal fade show" id="ShowSummaryModal" role="dialog">
          <div class="modal-dialog modal-xl">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title">New Resume</h4>
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

    <script src="js/customJs/summary.js"></script>
@endsection