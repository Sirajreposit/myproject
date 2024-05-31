<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <title>Login Form</title>
</head>
<body>
  <div class="bg-light py-3 py-md-5">
    <div class="container">
      <div class="row justify-content-md-center">
        <div class="col-12 col-md-11 col-lg-8 col-xl-7 col-xxl-6">
          <div class="bg-white p-4 p-md-5 rounded shadow-sm">
            <h3 class="mb-5">Log in</h3>
            <form action="{{ route('login.post') }}" method="Post">
              @csrf
              <div class="mb-3">
                <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                <input type="email" class="form-control" name="email" placeholder="name@example.com" required>
              </div>
              <div class="mb-3">
                <label for="password" class="form-label">Password <span class="text-danger">*</span></label>
                <input type="password" class="form-control" name="password" required>
              </div>
              <div class="form-check mb-3">
                <input type="checkbox" class="form-check-input" id="remember_me">
                <label class="form-check-label text-secondary" for="remember_me">Keep me logged in</label>
              </div>
              <button class="btn btn-lg btn-primary bg-success w-100" type="submit">Log in now</button>
            </form>
            <hr class="mt-5 mb-4 border-secondary-subtle">
            <div class="d-flex justify-content-md-end gap-2 gap-md-4">
              <a href="{{url('/register')}}" class="link-secondary text-decoration-none">Create new account</a>
              <a href="#!" class="link-secondary text-decoration-none">Forgot password</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
