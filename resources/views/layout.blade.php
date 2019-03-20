<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>@yield('title')</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>
<body>

<div class = "container-fluid">
	
	<ul class="nav">
      @if (Auth::check())
        <li class="nav-item">
          <a href="/profile" class="nav-link">Profile</a>
        </li>
        <li class="nav-item">
          <a href="/genres" class="nav-link">Genres</a>
        </li>
        <li class="nav-item">
          <a href="/tracks" class="nav-link">Tracks</a>
        </li>
        <li class="nav-item">
          <a href="/playlists" class="nav-link">Playlists</a>
        </li>
        <li class="nav-item">
          <a href="/docs" class="nav-link">Docs</a>
        </li>
        <li class="nav-item">
          <a href="/logout" class="nav-link">Logout</a>
        </li>
      @else
        <li class="nav-item">
          <a href="/login" class="nav-link">Login</a>
        </li>
        <li class="nav-item">
          <a href="/signup" class="nav-link">Sign Up</a>
        </li>
      @endif
    </ul>


	@yield('main')

</div>

</body>
</html>