@extends('layouts.master')







@section('css')



<style>
 .table {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

.table td, .table th {
  border: 1px solid #ddd;
  padding: 8px;
  text-align: center
}

.table tr:nth-child(even){background-color: #f2f2f2;}

.table tr:hover {background-color: #ddd;}

.table th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #ffb04a;
  color: white;
  text-align: center;
}
</style>
@endsection
@section('content')
<div style="width: 100%">

    <h1>All Products</h1>
    <!-- please use https://datatables.net/ to view tables -->
    <table id="myTable" class="table">
        <thead>

        <tr>
          <th>Product Number</th>
          <th>Product Name</th>
          <th>Product Discount</th>
          <th>Product Price</th>
        </tr>
    </thead>


      </table>
</div>

@endsection
@section('script')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>


<script>

    $('#myTable').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ Route('Allproducts') }}",
        columns: [
                 {data: 'product_number', name: 'product_number'},
                 { data: 'product_name', name: 'product_name' },
                 { data: 'product_descount', name: 'product_descount' },
                 { data: 'price', name: 'price' }
                //  ,
                //  {data: 'action', name: 'action', orderable: false},
              ]
    //    order: [[0, 'desc']]
    });
</script>
@endsection


