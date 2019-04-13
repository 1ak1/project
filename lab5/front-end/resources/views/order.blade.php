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
  <h1>Orders</h1>
  <table class="table">
  <thead>
  <tr>
    <th scope="col">Id</th>
    <th scope="col">Client</th>
    <th scope="col">Service</th>
    <th scope="col">Date</th>
  </tr>
  </thead>
  <tbody>
  <tr>
    <th scope="row"><a href="/orders/{{$order['id']}}">{{$order['id']}}</a></th>
    <td>{{$order['Client']}}</td>
    <td>{{$order['Service']}}</td>
    <td>{{$order['date']}}</td>
  </tr>
  <form action="/orders/delete" method="post">
    {{ csrf_field() }}
    <input type="hidden" value="{{$order['id']}}" name="id">
    <input type="submit" value="Delete">
  </form>
  </tbody>
  </table>
  <form action="/orders/change" method="post">
    {{ csrf_field() }}
    <div class="form-group">
      <input type="hidden" value="{{$order['id']}}" name="id">
      <label for="client_id">Client id</label>
      <input id="client_id" type="number" name="client_id">
    </div>
    <div class="form-group">
      <label for="service_id">Service id</label>
      <input id="service_id" type="number" name="service_id">
    </div>
    <div class="form-group">
      <label for="date">Date</label>
      <input id="date" type="date" name="date" value="{{$order['date']}}">
    </div>
    <input type="submit" value="Change order">
  </form>
</div>
</body>
</html>
