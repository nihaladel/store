@extends('layout.admin')
@section('content')
<div class="py-5">
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">اسم الصنف</th>
      <th scope="col">الاحداث</th>
    </tr>
  </thead>
  <tbody>
    @foreach($categories as category)
    <tr>
      <th scope="row">1</th>
      <td>{{ $category ->name}}</td>
     
      <td>
        <a href= "{{url(products/delete/'.$category_id)}}" class="btn btn-danger"> حذف</a>
        <a href= "{{url(products/delete/'.$category_id)}}" class="btn btn-info"> تعديل</a>
    </td>
    </tr>
    @foreach
  </tbody>
</table>
</div>
@endsection