<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>@yield('title')</title>

  <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  <!-- Favicon Link -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css"
    integrity="sha512-0OCvzZyRsIJ9Rg7O1S+Wf9ucukmVhyOg3h5eBG05aeH4NjG78fCEaEX3ofvndmukzENiX24fK5X/jPr6Y8yIdg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="{{ asset('frontend_asset') }}/plugins/wow/css/animate.min.css">
  <link rel="stylesheet" href="{{ asset('frontend_asset') }}/css/style.css">
</head>

<body data-spy="scroll">

  <!-- top-header start -->
  <section id="top-header">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <p>Mon - Sat 8.00 - 18.00 Sunday CLOSED</p>
        </div>
        <div class="col-lg-6">
          <div class="right-side">
            <ul>
              <li><a href="tel:+1-567-124-44227" class="number">+1-567-124-44227</a></li>
              <li><a href="#">184 Main Street East Perl Habour 8007</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- top-header ends -->


  <!-- navbar start  -->
  <div id="navbar">
    <nav class="navbar navbar-expand-lg ">
      <div class="container">
        <a class="navbar-brand" href="{{ route('index') }}"><img src="{{ asset('frontend_asset') }}/images/logo.png" alt="logo.png"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse text-center" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link @yield('index')" href="{{ route('index') }}">Biler til salg</a>
            </li>
            <li class="nav-item">
              <a class="nav-link @yield('car')" href="{{ route('car') }}">Byttebil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link @yield('about')" href="{{ route('about') }}">Kontakt os</a>
            </li>
            <li class="nav-item">
              <a class="nav-link @yield('contact')" href="{{ route('contact') }}">Om os</a>
            </li>
          </ul>
        </div>
        <div class="btn-group">
          <a href="{{ route('sell.car') }}" class="sell-btn">Byttebil</a>
        </div>
      </div>
    </nav>
  </div>
  <!-- navbar ends -->
    @yield('frontend_content')



  <!-- footer start -->
  <section id="footer">
    <div class="container">
      <div class="row">
        <!-- <div class="col-lg-4">
          <div class="first-part">
            <h4 class="footer-title">About Us
            </h4>
            <p>Getting dressed up and traveling with good friends makes for a shared, unforgettable experience.</p>
          </div>
        </div>
        <div class="col-lg-1">
        </div> -->
        <div class="col-lg-6">
          <div class="second-part">
            <h4 class="footer-title">Quick Links
            </h4>
            <ul>
              <li><a href="#">Supports</a></li>
              <li><a href="#">Contacts</a></li>
              <li> <a href="#">Typography</a></li>
              <li><a href="#">FAQ</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="second-part">
            <h4 class="footer-title">Contact Info
            </h4>
            <ul class="text-content">
              <li><a href="tel:+880"> <span><i class="fa-solid fa-phone"></i></span>
                  1-567-124-44227</a></li>
              <li> <a href="#"><span><i class="fa-solid fa-location-dot"></i></span> 184 Main Street
                  East Perl
                  Habour 8007</a> </li>
              <li> <a href="#"><span><i class="fa-solid fa-clock"></i></span> Mon - Sat 8.00 - 18.00
                  Sunday <span class="close">CLOSED</span> </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <div class="end-footer text-center">
    <p>©Copyright car company | Developed by <a href="https://futureinltd.com/">Future Innovation LTD</a>
    </p>
  </div>
  <!-- top to bottom -->
  <a href="#" class="bottomToTop"><i class="fa-solid fa-arrow-up"></i></a>
  <!-- footer ends -->




  <!-- <div class="container wow rubberBand" data-wow-iteration="infinite" data-wow-duration="2s">
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente deserunt tempora voluptas recusandae et
      culpa neque nam voluptate aut veritatis minima dolores cum, fugit hic quibusdam. A repellat quidem vitae, et
      magni culpa maiores, modi fugiat exercitationem quo aut tenetur dignissimos amet ipsa, adipisci expedita/p>
  </div> -->



  <!-- All Scripts -->
  <script src="https://code.jquery.com/jquery-1.12.4.js" integrity="sha256-Qw82+bXyGq6MydymqBxNPYTaUXXq7c8v3CwiYwLLNXU="
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/fontawesome.min.js"
    integrity="sha512-5qbIAL4qJ/FSsWfIq5Pd0qbqoZpk5NcUVeAAREV2Li4EKzyJDEGlADHhHOSSCw0tHP7z3Q4hNHJXa81P92borQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.js"
    integrity="sha512-An4a3FEMyR5BbO9CRQQqgsBscxjM7uNNmccUSESNVtWn53EWx5B9oO7RVnPvPG6EcYcYPp0Gv3i/QQ4KUzB5WA=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="{{ asset('frontend_asset') }}/plugins/wow/js/wow.min.js" defer></script>
  <script src="{{ asset('frontend_asset') }}/js/script.js"></script>
</body>

</html>