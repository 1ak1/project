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
  @foreach($services as $service)
  <tr>
    <th scope="row">{{$service['id']}}</th>
    <td><a href="/services/{{$service['id']}}">{{$service['name']}}</a></td>
  </tr>
  @endforeach
  </tbody>
  </table>
  <form action="/services/add" method="post">
    {{ csrf_field() }}
    <div class="form-group">
      <label for="name">Name</label>
      <input id="name" type="text" name="name">
    </div>
    <input type="submit" value="Add service">
  </form>
</div>
</body>
</html>
