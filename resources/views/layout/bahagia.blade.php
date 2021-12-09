<!DOCTYPE html>
<html>

<head>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <link
        href="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/build/css/bootstrap-datetimepicker.css"
        rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;600&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link
        rel="stylesheet"
        href="https://use.fontawesome.com/releases/v5.15.3/css/all.css"
        integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk"
        crossorigin="anonymous"
        />


    <script type="text/javascript" src="//code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>
    <script
        src="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/src/js/bootstrap-datetimepicker.js">
    </script>

    <style>
    /* The sidebar menu */
    .sidenav {
    height: 100%; /* Full-height: remove this if you want "auto" height */
    width: 180px; /* Set the width of the sidebar */
    position: fixed; /* Fixed Sidebar (stay in place on scroll) */
    z-index: 1; /* Stay on top */
    top: 0; /* Stay at the top */
    left: 0;
    background-color: #111; /* Black */
    overflow-x: hidden; /* Disable horizontal scroll */
    padding-top: 50px;
    }

    /* The navigation menu links */
    .sidenav a {
    padding: 6px 8px 6px 16px;
    color: #818181;
    display: block;
    transition: all 1s;
    border-radius: .25rem;
    margin: 0 1rem;
    font-family: 'Quicksand', sans-serif;
    font-weight: 500;
    font-size: 2rem;
    }

    /* When you mouse over the navigation links, change their color */
    .sidenav a:hover {
    color: #f1f1f1;
    transition: all 1s;
    font-size: 2.5rem;
    background-color: #ffa500;
    }

    /* Style page content */
    .main {
    margin-left: 190px; /* Same as the width of the sidebar */
    padding: 0px;
    font-size: 20px;
    }

    /* On smaller screens, where height is less than 450px, change the style of the sidebar (less padding and a smaller font size) */
    @media screen and (max-height: 450px) {
    .sidenav {padding-top: 15px;}
    .sidenav a {font-size: 18px;}
    }

    .navbar {
  background-color: #0C0C0C;
  margin-left: 150px;
    }

    .navbar a {
    transition: all 1s;
    border-radius: .25rem;
    margin: 0 1rem;
    font-family: 'Quicksand', sans-serif;
    font-weight: 500;
    font-size: 2rem;
    }

    .navbar a:hover {
    transition: all 1s;
    font-size: 3rem;
    background-color: #ffa500;
    }

    input, textarea {
        font-size: 20px !important;
    }

    </style>

</head>
    <body data-spy="scroll" data-target=".navbar">

        <nav class="navbar navbar-expand-lg navbar-light">

            <img class="bashara-icon" src="https://i.postimg.cc/ZqgtmT4s/2-2-removebg-preview.png" height='100px' padding='2rem'> </img>


        <button class="navbar-toggler bg-white" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbar" data-spy="scroll" data-target=".navbar">
          <ul class="navbar-nav ml-auto nav-pills">

            <li class="nav-item">
              <a class="nav-link text-white" href="#"> <i class=""></i>  &nbsp; 5026201066 </a>
            </li>

            <li class="nav-item">
              <a class="nav-link text-white" href="https://www.linkedin.com/in/bashara-aina/" target="_blank"> <i class="fas fa-user-circle fa-x"></i> &nbsp; Bashara Aina </a>
            </li>

          </ul>
        </div>

        </nav>

    <!-- Side navigation -->

<div class="sidenav">
    <a href="/" ><i class="fas fa-home"></i>Home</a>
    <a href="/pegawai"><i class="fas fa-user-tie"></i>Pegawai</a>
    <a href="/absen"><i class="far fa-clipboard"></i>Absen</a>
    <a href="/tugas"><i class="fas fa-tasks"></i>Tugas</a>
    <a href="#">soon!</a>
    <a href="#">Praktikum</a>
  </div>

  <!-- Page content -->
  <div class="main">
    @yield('judulhalaman')
    @section('konten')


    @show
  </div>


  <footer class="footer container fixed-bottom">

    <p class="float-right">

      <a href="/" class="text-warning">

        Back to home

      </a>

    </p>

    <h3>
      &copy; Hak Cipta oleh 5026201066-Bashara Aina
    </h3>


  </footer>


</body>

</html>
