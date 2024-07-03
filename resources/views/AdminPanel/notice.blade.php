@extends ('AdminPanel.layouts.admin_nav')
@section('title')
    NOTICE
@endsection
@section('content')

<div class="row">

    <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title"> NOTICE BOX</h4>

    <form action="{{url('/')}}/post_notice" method="post"  enctype="multipart/form-data">
        @csrf
        <div class="col-md-12">
          <input  class="form-label" type="radio" id="html" name="option" value="Khan's" required>
          <label for="html">Khan's Kitchen</label><br>
          <input class="form-label"   type="radio" id="css" name="option" value="Olympia" required>
          <label for="css">Olympia</label><br>
        </div>
        <label for="notice_header">NOTICE FOR</label><br>
        <input type="text"  class="form-control" name="notice_head" id="notice_head"><br>
        <br>

        <textarea name="notice" id="notice"   class="form-control form-label" cols="123" rows="10"></textarea><br>
        <button class="btn btn-success" type="submit">POST</button>

    </form>

          </div>
        </div>
    </div>


    {{-- All notices --}}


    @if(Session::get('delete_success'))
    <div class="alert alert-success">
            {{ Session::get('delete_success')}}
    </div>
@endif
    <div class="card-body">
        <div class="table-responsive">
          <table id="datatable" class="table">
            <thead class=" text-primary">
              <th>Date</th>
              <th>Notice heading</th>
              <th>Notice</th>
              <th>Canteen</th>
              <th>Edit</th>
              <th>Delete</th>
            </thead>
            <tbody>
              @foreach($notice as $row)
              <tr>

                <td>
                  {{$row->notice_date}}
                </td>
                <td>
                    {{$row->notice_head}}
                  </td>
                <td>
                 {{$row->notice}}
                </td>
                <td>
                    {{ $row->canteen_name }}
                </td>

               <td>
                        <a href="" class="btn btn-success">Edit</a>
                       </td>
                       <td>
                       <form action="" method="post">
                         @csrf
                         {{ method_field('DELETE') }}
                        <button type="submit" class="btn btn-danger">Delete</button>
                 </form>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
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
