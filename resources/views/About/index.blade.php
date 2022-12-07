@extends('layouts.app')
@section('title'){{'about'}} @endsection
@section('content')
    <div class="container py-5 col-md-12">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header bg-defult">
              <div class="card-title">
                <h2 class="card-title">
                  <button type="button" class="btn bg-navy text-capitalize mr-3" id="AddNewBtn"><i class="fa-solid fa-circle-plus mr-2"></i>Add New</button>
                  About List
                </h2>
              </div>
              <a href="" class="btn btn-sm bg-navy float-right text-capitalize"><i class="fa fa-recycle mr-2" aria-hidden="true"></i>Vew Trash</a>
              <a href="" class="btn btn-sm bg-maroon float-right text-capitalize mr-3"><i class="fa fa-trash " aria-hidden="true"></i></a>
              {{-- table section start --}}
              <div class="card-body table-responsive p-0">
                <table class="table table-hover table-responsive table-borderless" id="AboutList">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>About Me</th>
                      <th>Title</th>
                      <th>Description</th>
                      <th>Photo</th>
                      <th>Birthday</th>
                      <th>Degree</th>
                      <th>Phone</th>
                      <th>Email</th>
                      <th>City</th>
                      <th>Website</th>
                      <th>Freelance</th>
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
        <div class="modal fade show" id="NewAboutModal" role="dialog">
          <div class="modal-dialog modal-x1">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title">New About</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">x</span>
                </button>
              </div>
              <div class="modal-body">
                {{ Form::open(array('url' => '/About','method' => 'POST','class' => 'form-horizontal','id' => 'AboutForm' , 'file'=> true )) }}
                  <div class="card-body">
                    <div class="form-group row">
                      <label for="Name" class="form-label col-md-3">Name</label>
                      <div class="col-md-8">
                        <input type="text" name="Name" class="form-control">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="AboutMe" class="form-label col-md-3">About Me</label>
                      <div class="col-md-8">
                        <input type="text" name="AboutMe" class="form-control">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="Title" class="form-label col-md-3">Title</label>
                      <div class="col-md-8">
                        <input type="text" name="Title" class="form-control">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="Description" class="form-label col-md-3">Description</label>
                      <div class="col-md-8">
                        <input type="text" name="Description" class="form-control">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="Photo" class="form-label col-md-3">Photo</label>
                      <div class="col-md-8">
                        <input type="file" name="Photo" class="form-control">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="Degree" class="form-label col-md-3">Degree</label>
                      <div class="col-md-8">
                        <input type="text" name="Degree" class="form-control">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="Phone" class="form-label col-md-3">Phone</label>
                      <div class="col-md-8">
                        <input type="tel" name="Phone" class="form-control">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="Email" class="form-label col-md-3">Email</label>
                      <div class="col-md-8">
                        <input type="mail" name="Email" class="form-control">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="City" class="form-label col-md-3">City</label>
                      <div class="col-md-8">
                        <input type="text" name="City" class="form-control">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="Website" class="form-label col-md-3">Website</label>
                      <div class="col-md-8">
                        <input type="text" name="City" class="form-control">
                      </div>
                    </div>
                    <div class="col-md-12 form-group row">
                      <div class="form-group row col-md-6">
                          <label for="Freelance" class="form-label col-md-3">Freelance</label>
                          <div class="col-md-8 mx-md-2">
                              <input type="text" name="Freelance" class="form-control" > 
                          </div>
                      </div>
                      <div class="form-group row col-md-6">
                          <label for="Non Freelace" class="form-label col-md-3">Non Freelance</label>
                          <div class="col-md-8 mx-md-2">
                              <input type="text" name="Freelace" class="form-control" > 
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
        <div class="modal fade show" id="ShowAboutModal" role="dialog">
          <div class="modal-dialog modal-xl">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title">New About</h4>
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
    <script src="js/about.js">
    </script>
@endsection