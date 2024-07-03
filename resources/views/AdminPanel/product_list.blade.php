@extends ('AdminPanel.layouts.admin_nav')
@section('title')
    Product List
@endsection
@section('content')
<div class="row">
         <div class="col-md-12">
           <div class="card">
             <div class="card-header">
               <h4 class="card-title"> All products</h4>

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
                     <th>Product Name</th>
                     <th>Product price</th>
                     <th>Canteen</th>
                     <th>Category</th>
                     <th>Status</th>
                     <th>Edit</th>
                     <th>Delete</th>
                   </thead>
                   <tbody>
                     @foreach($products as $row)
                     <tr>
                       <td>
                        {{$row->product_name}}

                       </td>
                       <td>
                         {{$row->product_price}}TK
                       </td>
                       <td>
                        {{$row->canteen_name}}
                       </td>
                       <td>
                        {{$row->category}}
                       </td>
                       <td>
                        {{$row->status}}
                       </td>
                       <td>
                        <a href="/editproduct/{{$row->product_id}}" class="btn btn-success">Edit</a>
                       </td>
                       <td>
                       <form action="/product-delete/{{$row->product_id}}" method="post">
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
