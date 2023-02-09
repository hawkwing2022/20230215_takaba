<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Todo List</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      vertical-align: baseline;
    }
    body {
      line-height: 1;
    }
    .container {
      background-color:#2d197c;
      height: 100vh;
      width: 100vw;
      position: relative;
    }
    .card {
      background-color: #fff;
      width: 50vw;
      padding: 30px;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%,-50%);
      border-radius: 10px;
    }
    .title {
      font-weight: bold;
      font-size: 24px;
      margin-bottom: 15px;
    }
    table {
      text-align: center;
      width: 100%;
    }
    tr {
      height: 50px;
    }
  </style>
</head>
<body>
  <div class="container">
    @yield('container')
    <div class="card">
      @yield('card')
      <div class="todo">
        @yield('todo')
    </div>
  </div>
</body>