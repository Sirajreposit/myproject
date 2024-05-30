<!-- resources/views/welcome.blade.php -->
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel Drawer</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<style>
  .bg-image{
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
}
  .title-content{
    height: 60vh;
  }
</style>

<body>
  <div class="bg-image" style="background-image: url('{{ asset('pexels-gdtography-277628-911738.jpg') }}'); height: 100vh">
  
    <div id="app" class="container-fluid mx-0 px-0">
      <!-- Button to toggle the drawer -->


      <!-- Drawer -->
      <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample"
          aria-labelledby="offcanvasExampleLabel">
          <div class="offcanvas-header">
              <h5 class="offcanvas-title bg-success" id="offcanvasExampleLabel ">Settings</h5>
              <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body">
              <div>
                  Some text as placeholder
              </div>
              <ul class="list-unstyled">
                  <li><a href="#">Date</a></li>
                  <li><a href="#">Amount</a></li>
                  <li><a href="#">Purchase</a></li>
                  <li><a href="#">Reciept</a></li>
                  <li><a href="#">Expences Types</a></li>
              </ul>
          </div>
      </div>

      <!-- Main content -->
      <div class="container-fluid px-0 mx-0">
          <div id="app">
              <!-- Navbar -->
              <nav class="navbar navbar-expand-lg navbar-dark shadow-5-strong px-4"> 
                  <div class="container-fluid">
                      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                          data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                          <span class="navbar-toggler-icon"></span>
                      </button>
                      <a class="navbar-brand" href="#"> <button class="btn btn-success" type="button"
                              data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample"
                              aria-controls="offcanvasExample">
                              Menu
                          </button></a>
                      <div class="collapse navbar-collapse" id="navbarNav">
                          <ul class="navbar-nav ms-auto">
                              <li class="nav-item">
                                  <a class="nav-link text-black" href="#">Home</a>
                              </li>
                              <li class="nav-item">
                                  <a class="nav-link text-black" href="#">About</a>
                              </li>
                              <li class="nav-item">
                                  <a class="nav-link text-black" href="#">Services</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link text-black" href="#">Contct Us</a>
                            </li>
                            <div class="collapse navbar-collapse" id="navbarNav">
                              <ul class="navbar-nav ml-auto">
                                  <li class="nav-item dropdown">
                                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                          <img src="download.jpg" alt="Profile Picture" class="profile-img mr-1 text-black rounded-circle" style="width: 30px; height: 30%;"> <!-- Adjust width and height as needed -->
                                          John Doe
                                      </a>
                                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                          <label for="fileInput" class="dropdown-item"><i class="fas fa-upload mr-1"></i>Upload Image</label>
                                          <input type="file" id="fileInput" style="display: none;">
                                          <div class="dropdown-divider"></div>
                                          <a class="dropdown-item" href="#">Edit Profile</a>
                                          <a class="dropdown-item" href="{{url('/login')}}">Logout</a>
                                      </div>
                                  </li>
                              </ul>
                          </div>
                          
                            </div>

                          </ul>
                      </div>
                  </div>
              </nav>

              <!-- Drawer -->
              <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar"
                  aria-labelledby="offcanvasNavbarLabel">
                  <div class="offcanvas-header">
                      <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                          aria-label="Close"></button>
                  </div>
              </div>

              <!-- Main content -->
              <div class="container d-flex justify-content-center flex-column align-items-center title-content text-black">
                  <h1>Welcome to Innoit Labs</h1><br>
                  <p>Web And Mobile Aoolication Development</p>

              </div>
          </div>
      </div>
  </div>
  
  </div>


    <!-- Bootstrap JS and Popper.js -->
    <script src="https://unpkg.com/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://unpkg.com/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>

    <!-- Bootstrap JS and Font Awesome -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
