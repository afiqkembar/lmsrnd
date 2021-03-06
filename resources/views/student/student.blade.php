@extends('layouts.master')


@section('style')


@endsection

@section('content')

<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      Student
      </h1>
      <ol class="breadcrumb">
        <button type="button" class="btn btn-info btn-sm " data-toggle="modal" data-target="#modal-info">
          Add
        </button>
        <li></li>
      </ol>
    </section>

    <div class="modal modal-info fade" id="modal-info">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Add Student</h4>
          </div>
          <div class="modal-body">
                  <!-- Custom Tabs (Pulled to the right) -->
                  <form action="#" method="POST" id="frm-student-create">
                  {!! csrf_field() !!}
                    <div class="row">
                        <div class="form-group">
                          <label for="first_name" class="col-sm-3 control-label">First Name: </label>
                          <div class="col-sm-9">
                          <input type="text" class="form-control" name="first_name" id="first_name" placeholder="First Name">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="last_name" class="col-sm-3 control-label">Last Name: </label>
                          <div class="col-sm-9">
                          <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Last Name">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="email" class="col-sm-3 control-label">Email: </label>
                          <div class="col-sm-9">
                          <input type="text" class="form-control" name="email" id="email" placeholder="Email">
                          </div>
                        </div>
              
                        <div class="form-group">
                          <label for="startdate" class="col-sm-3 control-label">Start Date: </label>

                          <div class="col-sm-9">
                          <input type="date" class="form-control" name="startdate" id="startdate" placeholder="Start Date">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="batch_id" class="col-sm-3 control-label">Batch: </label>

                          <div class="col-sm-9">
                          <select class="form-control" name="batch_id" id="batch_id" data-placeholder="Select " style="width: 100%;">
                             <option value="1"></option>
                             <option value="1"></option>
                             <option value="1"></option>
                             <option value="1"></option>
                             <option value="1"></option>
                          </select>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="inputEmail3" class="col-sm-3 control-label">Company: </label>

                          <div class="col-sm-9">
                          <select class="form-control" name="company_id" id="company_id"  data-placeholder="Select " style="width: 100%;">
                             <option value="1"></option>
                             <option value="1"></option>
                             <option value="1"></option>
                             <option value="1"></option>
                             <option value="1"></option>
                          </select>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="country_id"  class="col-sm-3 control-label">Country: </label>

                          <div class="col-sm-9">
                          <select class="form-control" name="country_id" id="country_id" data-placeholder="Select " style="width: 100%;">
                             <option value="1"></option>
                             <option value="1"></option>
                             <option value="1"></option>
                             <option value="1"></option>
                             <option value="1"></option>
                          </select>
                          </div>
                        </div>
                    </div>
                
                  </div>
          <div class="modal-footer">
           <button type="submit" class="btn btn-primary">Submit</button>
          </div>
          </form>
        </div>
        
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->

    <section class="content">
      <div class="col-md-12">
        <!-- Custom Tabs (Pulled to the right) -->
        <div class="nav-tabs-custom">
          <ul class="nav nav-tabs ">
            <li class="active"><a href="#tab_1" data-toggle="tab">Active</a></li>
          </ul>
          <div class="tab-content">
            <div class="tab-pane active" id="tab_1">
              <div class="box">

                    <!-- /.box-header -->
                    <div class="box-body no-padding">
                      <div class="mailbox-controls">
                        <!-- Check all button -->
                        <div class="btn-group">

                        <button type="button" class="btn btn-default btn-sm checkbox-toggle"><i class="fa fa-envelope"> Message</i>
                        </button>
                        <button type="button" class="btn btn-default btn-sm"><i class="fa fa-check"> Grades</i></button>
                          <button type="button" class="btn btn-default btn-sm"><i class="fa fa-key"> Password</i></button>
                          <button type="button" class="btn btn-default btn-sm"><i class="fa fa-star"> Award</i></button>
                          <button type="button" class="btn btn-default btn-sm"><i class="fa fa-minus-square"> Unenroll</i></button>
                        <button type="button" class="btn btn-default btn-sm"><i class="fa fa-gear"></i> Setting</button>
                        </div>
                        <!-- /.btn-group -->

                        <!-- /.pull-right -->
                      </div>
                      <div class="table-responsive mailbox-messages">
                        <table class="table table-hover table-striped">
                          <tbody>
                          <tr class="info">
                            <td><input type="checkbox"></td>
                            <td class="mailbox-star"><a href="#">Student</a></td>
                            <td class="mailbox-name"><a href="#">Progress</a></td>
                            <td class="mailbox-subject"><a>Score</a></td>
                            <td class="mailbox-attachment"><a href="#">Grades</a></td>
                            <td class="mailbox-date"><a href="#">Due</a></td>
                            <td class="mailbox-date"><a href="#">Mastery</a></td>
                            <td class="mailbox-date"><a href="#">Enroll</a></td>
                            <td class="mailbox-date"><a href="#">More</a></td>
                          </tr>
                          @foreach($students as $student)
                          <tr>
                            <td><input type="checkbox"></td>
                            <td class="mailbox-star"><a href="#"><i class="fa fa-male"> {{$student->first_name}}</i></a></td>
                            <td class="mailbox-name"><a href="#"><i class="fa fa-tasks"></i></a></td>
                            <td class="mailbox-subject">-</i></td>
                            <td class="mailbox-attachment"><a>-</a></td>
                            <td class="mailbox-date">-</td>
                            <td class="mailbox-date">-</td>
                            <td class="mailbox-date">{{$student->startdate}}</td>
                            <td class="mailbox-date"><i class="fa fa-gear"></td>
                          </tr>
                          @endforeach

                          </tbody>
                        </table>
                        <!-- /.table -->
                      </div>
                      <!-- /.mail-box-messages -->
                    </div>
                    <!-- /.box-body -->
                </div>
            </div>
            <!-- /.tab-pane -->
            <div class="tab-pane" id="tab_2">
              <div class="box">

                    <div class="box-header">
                      <h3 class="box-title">Inbox</h3>

                      <div class="box-tools pull-right">
                        <div class="has-feedback">
                          <input type="text" class="form-control input-sm" placeholder="Search Mail">
                          <span class="glyphicon glyphicon-search form-control-feedback"></span>
                        </div>
                      </div>
                      <!-- /.box-tools -->
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body no-padding">
                      <div class="mailbox-controls">
                        <!-- Check all button -->
                        <button type="button" class="btn btn-default btn-sm checkbox-toggle"><i class="fa fa-square-o"></i>
                        </button>
                        <div class="btn-group">
                          <button type="button" class="btn btn-default btn-sm"><i class="fa fa-trash-o"></i></button>
                          <button type="button" class="btn btn-default btn-sm"><i class="fa fa-reply"></i></button>
                          <button type="button" class="btn btn-default btn-sm"><i class="fa fa-share"></i></button>
                        </div>
                        <!-- /.btn-group -->
                        <button type="button" class="btn btn-default btn-sm"><i class="fa fa-refresh"></i></button>

                        <!-- /.pull-right -->
                      </div>
                      <div class="table-responsive mailbox-messages">
                        <table class="table table-hover table-striped">
                          <tbody>
                          <tr class="info">
                            <td><input type="checkbox"></td>
                            <td class="mailbox-star"><a href="#">Assignment</a></td>
                            <td class="mailbox-name"><a href="#">Due</a></td>
                            <td class="mailbox-attachment"><a href="#">Max Score</a></td>
                            <td class="mailbox-date"><a href="#">To Grade/ Submitted</a></td>
                          </tr>
                          <tr>
                            <td><input type="checkbox"></td>
                            <td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
                            <td class="mailbox-subject"><b>AdminLTE 2.0 Issue</b> - Trying to find a solution to this problem...
                            </td>

                          </tr>
                          <tr>
                            <td><input type="checkbox"></td>
                            <td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
                            <td class="mailbox-subject"><b>AdminLTE 2.0 Issue</b> - Trying to find a solution to this problem...
                            </td>
                          </tr>
                          <tr>
                            <td><input type="checkbox"></td>
                            <td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
                            <td class="mailbox-subject"><b>AdminLTE 2.0 Issue</b> - Trying to find a solution to this problem...
                            </td>
                          </tr>

                          </tbody>
                        </table>
                        <!-- /.table -->
                      </div>
                      <!-- /.mail-box-messages -->
                    </div>
                    <!-- /.box-body -->
                </div>

            </div>
            <div class="tab-pane" id="tab_3">
                <h1 class="text-blue"> Assignment results</h1>
                <h3>There are no submissions yet.</h3>
            </div>
            <!-- /.tab-pane -->
          </div>
          <!-- /.tab-content -->
        </div>
        <!-- nav-tabs-custom -->
      </div>
      <!-- Main content -->
    </section>

    
@endsection

@section('script')
<script>
$('#frm-student-create').on('submit',function(e){
  e.preventDefault();
  console.log('pressed');
  var data = $(this).serialize();
  console.log(data);
  $.post("{{route('createStudent')}}", data, function(response){
    
    console.log(response);
  });
});

</script>
@endsection

