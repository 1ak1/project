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
  <h1>Services</h1>
  <table class="table">
  <thead>
  <tr>
    <th scope="col">Id</th>
    <th scope="col">Name</th>
  </tr>
  </thead>
  <tbody>
  <tr>
    <th scope="row">{{$service['id']}}</th>
    <td><a href="/services/{{$service['id']}}">{{$service['name']}}</a></td>
  </tr>
  <form action="/services/delete" method="post">
    {{ csrf_field() }}
    <input type="hidden" value="{{$service['id']}}" name="id">
    <input type="submit" value="Delete">
  </form>
  </tbody>
  </table>
  <form action="/services/change" method="post">
    {{ csrf_field() }}
    <div class="form-group">
      <input type="hidden" value="{{$service['id']}}" name="id">
      <label for="name">Name</label>
      <input id="name" type="text" name="name" value="{{$service['name']}}">
    </div>
    <input type="submit" value="Change service">
  </form>
</div>
</body>
</html>
