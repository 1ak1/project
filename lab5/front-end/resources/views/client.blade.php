<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Laravel</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

  <!-- Styles -->
  <link rel="stylesheet" href="/css/app.css">
</head>
<body>
<div class="container">
  <h1>Clients</h1>
  <table class="table">
  <thead>
  <tr>
    <th scope="col">Id</th>
    <th scope="col">FIO</th>
  </tr>
  </thead>
  <tbody>
  <tr>
    <th scope="row">{{$client['id']}}</th>
    <td><a href="/clients/{{$client['id']}}">{{$client['fio']}}</a></td>
  </tr>
  <form action="/clients/delete" method="post">
    {{ csrf_field() }}
    <input type="hidden" value="{{$client['id']}}" name="id">
    <input type="submit" value="Delete">
  </form>
  </tbody>
  </table>
  <form action="/clients/change" method="post">
    {{ csrf_field() }}
    <div class="form-group">
      <input type="hidden" value="{{$client['id']}}" name="id">
      <label for="fio">FIO</label>
      <input id="fio" type="text" name="fio" value="{{$client['fio']}}">
    </div>
    <input type="submit" value="Change client">
  </form>
</div>
</body>
</html>
