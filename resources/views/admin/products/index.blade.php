@extends('layout.admin')
@section('content')
<div class="py-5">
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">اسم المنتج</th>
      <th scope="col">الصنف</th>
      <th scope="col">السعر</th>
      <th scope="col">الكمية</th>
      <th scope="col">الاحداث</th>
    </tr>
  </thead>
  <tbody>
  @foreach($products as product)
    <tr>
      <th scope="row">1</th>
      <td>{{ $product ->name}}</td>
      <td>{{ $categories[product->category_id-1]->name}}</td>
      <td>{{ $product ->price}}</td>
      <td>{{ $product ->quantity}}</td>
      <td>
          <a href= "{{url(products/delete/'.$category_id)}}" class="btn btn-danger"> حذف</a>
          <a href= "{{url(products/delete/'.$category_id)}}" class="btn btn-info"> تعديل</a>
    </td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
@endsection