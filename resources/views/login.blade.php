@extends('layouts.app')

@section('content')
<div class="container">
  <div class="container-fluid">
    <form action="/login/auth" method="POST">
        @csrf
        <div class="input-group mb-3">
            <input type="text" name="email" class="form-control" placeholder="Email" aria-label="email">
        </div>
        <div class="input-group mb-3">
            <input type="password" name="password" class="form-control" placeholder="Password" arial-label="password">
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
    </form>
  </div>
</div>
@endsection