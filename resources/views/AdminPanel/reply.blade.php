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

                        <form action="/contact-update/ {{ $contact->contact_id }}" method="post">
                            @csrf

                                <div class="form-group">
                                <label>{{ $contact->student_id }} {{ $contact->student_name }}</label>
                                <h6>{{ $contact->subject }}</h6>
                                <input style="font-size:13px;" type="text" name="student_id" value="{{$contact->message}}" class="form-control" readonly>
                                </div>
                                <div class="form-group">
                                <label>Status</label>
                                <select name="contact_status" class="form-control" id="" value="Pending">
                                    <option style="font-size:13px;" value="replied">Replied</option>
                                    <option style="font-size:13px;" value="declined">Declined</option>
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
