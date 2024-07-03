@extends ('AdminPanel.layouts.admin_nav')
@section('title')
    OFFERS
@endsection
@section('content')

<div class="row">

    <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title"> POST OFFERS</h4>

    <form action="{{url('/')}}/post_offer" method="post" enctype="multipart/form-data">
        @csrf
        <div class="col-md-12">
          <input  class="form-label" type="radio" id="html" name="option" value="Khan's" required>
          <label for="html">Khan's Kitchen</label><br>
          <input class="form-label" type="radio" id="css" name="option" value="Olympia" required>
          <label for="css">Olympia</label><br>
        </div>
        <label for="offer_header">OFFER TITLE</label><br>
        <input type="text" class="form-control" name="offer_head" id="offer_head"><br>
        <br>

        <textarea name="offer" id="offer" class="form-control form-label" cols="123" rows="10"></textarea><br>
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
              <th>Offer Title</th>
              <th>Offer</th>
              <th>Canteen</th>
              <th>Edit</th>
              <th>Delete</th>
            </thead>
            <tbody>
              @foreach($offer as $row)
              <tr>

                <td>
                  {{$row->offer_date}}
                </td>
                <td>
                    {{$row->offer_head}}
                  </td>
                <td>
                 {{$row->offer}}
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
