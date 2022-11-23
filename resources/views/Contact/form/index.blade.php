@extends('layouts.app')
@section('title'){{'Contact'}} @endsection
@section('content')
    <div class="container py-5 col-md-12">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header bg-defult">
              <div class="card-title">
                <h2 class="card-title">
                  <button type="button" class="btn bg-navy text-capitalize mr-3" id="AddNewBtn"><i class="fa-solid fa-circle-plus mr-2"></i>Add New</button>
                  Message  List
                </h2>
              </div>
              <a href="" class="btn btn-sm bg-navy float-right text-capitalize"><i class="fa fa-recycle mr-2" aria-hidden="true"></i>Vew Trash</a>
              <a href="" class="btn btn-sm bg-maroon float-right text-capitalize mr-3"><i class="fa fa-trash " aria-hidden="true"></i></a>
              {{-- table section start --}}
              <div class="card-body table-responsive p-0">
                <table class="table table-hover table-responsive table-borderless" id="ContactList">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Subject</th>
                      <th>Message</th>
                      <th>Ip</th>
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
        <div class="modal fade show" id="NewContactModal" role="dialog">
          <div class="modal-dialog modal-x1">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title">New Massage</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">x</span>
                </button>
              </div>
              <div class="modal-body">
                {{ Form::open(array('url' => '/Contact/form','method' => 'POST','class' => 'form-horizontal','id' => 'ContactForm' , 'file'=> true )) }}
                  <div class="card-body">
                    <div class="form-group row">
                      <label for="Name" class="form-label col-md-3">Name</label>
                      <div class="col-md-8">
                        <input type="text" name="Name" class="form-control">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="Email" class="form-label col-md-3">Email</label>
                      <div class="col-md-8">
                        <input type="text" name="Email" class="form-control">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="Subject" class="form-label col-md-3">Subject</label>
                      <div class="col-md-8">
                        <input type="text" name="Subject" class="form-control">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="Message" class="form-label col-md-3">Message</label>
                      <div class="col-md-8">
                        <textarea rows="4" cols="50" name="Message" class="form-control" placeholder="Write your massage ....">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="Ip" class="form-label col-md-3">Ip Address</label>
                      <div class="col-md-8">
                        <input type="text" name="Ip" class="form-control">
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
        <div class="modal fade show" id="ShowContactModal" role="dialog">
          <div class="modal-dialog modal-xl">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title">New Contact</h4>
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

    <script src="js/customJs/contact.js"></script>
@endsection