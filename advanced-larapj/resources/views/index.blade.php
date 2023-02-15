@extends('layouts.default')
<style>
  th {
    background-color: #289ADC;
    color: white;
    padding: 5px 40px;
  }
  tr:nth-child(odd) td{
    background-color: #FFFFFF;
  }
  td {
    padding: 25px 40px;
    background-color: #EEEEEE;
    text-align: center;
  }
  button {
    padding: 10px 20px;
    background-color: #289ADC;
    border: none;
    color: white;
  }
</style>
@section('title', 'index.blade.php')

@section('content')
@if (count($errors) > 0)
<ul>
  @foreach ($errors->all() as $error)
  <li>{{$error}}</li>
  @endforeach
</ul>
@endif
<form action="/edit" method="POST">
  <table>
    <tr>
      <th>id</th>
      <th>name</th>
      <th>age</th>
      <th>nationality</th>
    </tr>
    @foreach ($authors as $author)
    <tr>
      <td>{{$author->id}}</td>
      <td><input type="text" name="name" value="{{$author->name}}"></td>
      <td><input type="text" name="age" value="{{$author->age}}"></td>
      <td><input type="text" name="nationality" value="{{$author->nationality}}"></td>
      <td><button name="update">更新</button></td>
      <td><button name="delete">削除</button></td>
    </tr>
    @endforeach
  </table>
</form>
@endsection