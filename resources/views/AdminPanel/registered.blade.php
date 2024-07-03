@extends ('AdminPanel.layouts.admin_nav')
@section('title')
    Registered
@endsection
@section('content')
<div class="row">
         <div class="col-md-12">
           <div class="card">
             <div class="card-header">
               <h4 class="card-title"> Registered Roles</h4>

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
                     <th>Name</th>
                     <th>Email</th>
                     <th>Role </th>
                     <th>Joined at</th>
                     <th>Edit</th>
                     <th>Delete</th>
                   </thead>
                   <tbody>
                     @foreach($user as $row)
                     <tr>
                       <td>
                        {{$row->firstname}}
                        {{$row->lastname}}

                       </td>
                       <td>
                         {{$row->email}}
                       </td>
                       <td>
                        {{$row->role}}
                       </td>
                       <td>
                        {{$row->created_at}}
                       </td>
                       <td>
                        <a href="/role-edit/{{$row->id}}" class="btn btn-success">Edit</a>
                       </td>
                       <td>
                       <form action="/user-delete/{{$row->id}}" method="post">
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
