@extends ('AdminPanel.layouts.admin_nav')
@section('title')
    User Roles
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3>Edit roles for registered users</h3>
                    </div>
                    <div class="card-body">
                       <div class="row">
                        <div class="col-md-6">

                        @if(Session::get('failure'))
                            <div class="alert alert-danger">
                                    {{ Session::get('failure')}}
                            </div>
                        @endif

                        <form action="/user-update/ {{ $users->id }}" method="post">
                            @csrf

                                <div class="form-group">
                                <label>ID</label>
                                <input style="font-size:13px;" type="text" name="student_id" value="{{$users->student_id}}" class="form-control" readonly>
                                </div>
                                <div class="form-group">
                                <label>Role</label>
                                <select name="usertype" class="form-control" id="" value="Student">
                                    <option style="font-size:13px;" value="admin">Admin</option>
                                    <option style="font-size:13px;" value="student">Student</option>
                                </select>
                                </div>
                                <button type="submit" class="btn btn-success">Update</button>
                                <a href="/registered" class="btn btn-danger">Cancel</a>
                        </form>
                        </div>
                       </div>
                    </div>
                </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
 <script>
  $(document).ready( function () {
    $('#datatable').DataTable({
      stateSave: true,
    });
    } );
 </script>
@endsection

@section('scripts')
<script type="text/javascript">
  $(document).ready(function()
  {
  setTimeout(function()
  {
    $("div.alert").remove();
  }, 5000);
  });
  </script>
 @endsection
