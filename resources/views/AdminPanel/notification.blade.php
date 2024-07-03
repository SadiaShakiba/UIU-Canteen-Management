@extends ('AdminPanel.layouts.admin_nav')
@section('title')
    NOTIFICATIONS
@endsection




@section('content')
<section>
 <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> ORDER LIST</h4>

                @if(Session::get('delete_success'))
                                <div class="alert alert-success">
                                        {{ Session::get('delete_success')}}
                                </div>
                @endif
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table id="datatable" class="table">
                    <thead class=" text-primary">
                      <th>Customer</th>
                      <th>Email</th>
                      <th>Phone number </th>
                      <th>Order</th>
                      <th>Total Price</th>
                      <th>Status</th>
                      <th>Edit</th>
                      <th>Delete</th>
                    </thead>
                    <tbody>
                      {{-- @foreach($user as $row) --}}
                      <tr>
                        <td>
                         {{-- {{$row->username}} --}}Name
                        </td>
                        <td>
                          {{-- {{$row->email}} --}} emal
                        </td>
                        <td>
                         {{-- {{$row->phone}} --}} phone
                        </td>
                        <td>
                         {{-- {{$row->created_at}} --}} Order
                        </td>
                        <td>
                            {{-- {{$row->created_at}} --}} Total Price
                           </td>
                        <td>
                            {{-- {{$row->created_at}} --}} pending
                           </td>
                        <td>
                         <a href="/role-edit/" class="btn btn-success">Accept</a>
                        </td>
                        <td>
                        <form action="/user-delete/" method="post">
                          @csrf
                          {{ method_field('DELETE') }}
                         <button type="submit" class="btn btn-danger">Decline</button>
                         </form>
                        </td>
                      </tr>
                      {{-- @endforeach --}}
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
 </div>
</section>

 <section>
 <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title"> Client Message</h4>

          @if(Session::get('delete_success'))
                          <div class="alert alert-success">
                                  {{ Session::get('delete_success')}}
                          </div>
          @endif
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table id="datatable" class="table">
              <thead class=" text-primary">
                <th>Student ID</th>
                <th>Student Name</th>
                <th>Student Message</th>
                <th>Date</th>
                <th>Status</th>
                <th>Reply</th>
                <th>Decline</th>
              </thead>
              <tbody>
                @foreach($contact as $contact)
                <tr>
                  <td>
                   {{$contact->student_id}}
                  </td>
                  <td>
                    {{$contact->student_name}}
                  </td>
                  <td>
                   {{$contact->subject}}
                  </td>
                  <td>
                    {{$contact->date}}
                   </td>
                  <td>
                    {{$contact->status}}

                  </td>



                  <td>
                   <a href="//" class="btn btn-success">Reply</a>
                  </td>
                  <td>
                  <form action="/user-delete/" method="post">
                    @csrf
                    {{ method_field('DELETE') }}
                   <button type="submit" class="btn btn-danger">Decline</button>
                   </form>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
</div>
</section>


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
