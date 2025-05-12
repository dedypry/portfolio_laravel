@extends('layouts.landing.index')
@section('content')
<style>
    .error-container {
      height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      flex-direction: column;
    }
</style>
<div class="error-container text-center">
    <h1 class="display-1 text-danger fw-bold">404</h1>
    <h2 class="mb-3">Oops! Page not found.</h2>
    <p class="mb-4 text-muted">The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.</p>
    <a href="{{ url('/') }}" class="btn btn-primary">Back to Homepage</a>
  </div>
@endsection
