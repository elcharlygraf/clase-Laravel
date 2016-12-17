@extends('layout')

@section('menu')
<li class="active">
    <a href="index.html"><i class="fa fa-fw fa-dashboard"></i> Inicio</a>
</li>
<li>
    <a href="charts.html"><i class="fa fa-fw fa-bar-chart-o"></i> Login</a>
</li>
@show

@section('cuerpo')

<form action="/login" method="POST">
@if(Auth::check())
  <h1>Hola: {{Auth::user()->name }}</h1>
  <a href="{{ route('logout') }}">Cerrar Sesion</a>
@endif

{{ csrf_field() }}
  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" name="email" class="form-control" placeholder="Email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" placeholder="Password">
  </div>

  <button type="submit" class="btn btn-default">Enviar</button>
</form>
@show