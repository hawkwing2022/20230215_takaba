@extends('layouts.default')
<style>
  .add_form{
    margin-bottom: 25px;
    justify-content: space-between;
    display: flex;
  }
  .add_content {
    width: 82%;
    padding: 5px;
    border-radius: 5px;
    border: solid 1px #ccc;
    font-size: 14px;
  }
  .add_btn {
    text-align: center;
    border: solid 2px #dc70fa;
    font-size: 12px;
    color: #dc70fa;
    background-color: #FFF;
    padding: 8px 16px;
    font-weight: bold;
    border-radius: 5px;
  }
  .task_column {
    width: 90%;
    padding: 5px;
    border: solid 1px #ccc;
    border-radius: 5px;
    font-size: 14px;
  }
  .modify_btn {
    text-align: center;
    border: solid 2px #fa9770;
    font-size: 12px;
    color: #fa9770;
    background-color: #FFF;
    padding: 8px 16px;
    font-weight: bold;
    border-radius: 5px;
  }
  .delete_btn {
    text-align: center;
    border: solid 2px #71fadc;
    font-size: 12px;
    color: #71fadc;
    background-color: #FFF;
    padding: 8px 16px;
    font-weight: bold;
    border-radius: 5px;
  }
</style>
@section('contener')
@if (count($errors) > 0)
<ul>
  @foreach ($errors->all() as $error)
  <li>{{$error}}</li>
  @endforeach
</ul>
@endif
@section('card')
<p class="title">Todo List</p>
@section('todo')
<form class="add_form" action="/add" method="POST">
  @csrf
  <input class="add_content" type="text" name="task" />
  <button class="add_btn" name="add_button" type="submit" value="追加">追加</button>
</form>
<table>
  <tr class="table-title">
    <th>作成日</th>
    <th>タスク名</th>
    <th>更新</th>
    <th>削除</th>
  </tr>
  @foreach ($todos as $todo)
  <tr>
    <td>{{$todo->created_at}}</td>
    <form action="/modify" method="POST">
      @csrf
      <td><input type="hidden" name="id" value="{{$todo->id}}"></td>
      <td><input class="task_column" type="text" name="task" value="{{$todo->task}}"></td>
      <td><button class="modify_btn" type="submit">更新</button></td>
    </form>
      <form action="/delete" method="POST">
      @csrf
      <td><input type="hidden" name="deleted_id" value="{{$todo->id}}"></td>
      <td><button class="delete_btn" type="submit">削除</button></td>
    </form>
</tr>
  @endforeach
</table>
@endsection
@endsection
@endsection
