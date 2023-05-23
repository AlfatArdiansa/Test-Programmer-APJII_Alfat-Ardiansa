@extends("layouts.main")

@section("content")
<div class="container p-auto">
  <div class="row justify-content-center align-items-center">
    <div class="col-8">
      <form style="color: rgba(255,255,255,1)" method="POST">
        @csrf
        <h1 class="text-bolder">Login</h1>
        @error('email')
        <div class="alert alert-danger" role="alert">
          {{ $message }}
        </div>
        @enderror
        <div class="mb-3">
          <label for="email" class="form-label">Email address</label>
          <input type="email" class="form-control @error("email") is-invalid @enderror" id="email" name="email" required autofocus>
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input type="password" class="form-control @error("password") is-invalid @enderror" id="password" name="password" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</div>
@endsection