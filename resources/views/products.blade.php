@extends('layouts.master')







@section('css')
<style>
    #customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
  text-align: center
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
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
<h1>All Products</h1>
<table id="customers">
    <tr>
      <th>Product Number</th>
      <th>Product Name</th>
      <th>Product Discount</th>
      <th>Product Price</th>
    </tr>
    @foreach ($products as $item)

        <tr>
            <td>{{$item->product_number}}</td>
            <td>{{$item->product_name}}</td>
            <td>{{$item->product_descount}}</td>
            <td>{{$item->price}}</td>
        </tr>

    @endforeach

  </table>
@endsection


