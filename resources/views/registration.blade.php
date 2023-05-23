@extends("layouts.main")

@section("content")
  <div class="container p-auto">
    <div class="row justify-content-center align-items-center">
      <div class="col-8">
        <form style="color: rgba(255,255,255,1)" method="POST" action="/registration" enctype="multipart/form-data">
          @csrf
          <h1 class="text-bolder">Form Pendaftaran Bootcamp</h1>
          @error('email')
          <div class="alert alert-danger" role="alert">
            {{ $message }}
          </div>
          @enderror          
          <div class="mb-3">
            <label for="company-name" class="form-label">Company Name</label>
            <input type="text" class="form-control @error("company") border-danger @enderror" id="company-name" name="company" value="{{ old("company") }}" required>
          </div>
          <div class="mb-3">
            <label for="user-name" class="form-label">Name</label>
            <input type="text" class="form-control @error("name") border-danger @enderror" id="user-name" name="name" value="{{ old("name") }}" required>
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control @error("email") border-danger @enderror" id="email" name="email" value="{{ old("email") }}" required>
          </div>
          <div class="mb-3">
            <label for="phone" class="form-label">Phone Number</label>
            <input type="text" class="form-control @error("phone") border-danger @enderror" id="phone" name="phone" value="{{ old("phone") }}" required>
          </div>
          <div class="mb-3">
            <label for="formFile" class="form-label">Participant Photo</label>
            <input class="form-control @error("photo") border-danger @enderror" type="file" id="formFile" name="photo" value="{{ old("photo") }}" required>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>
@endsection