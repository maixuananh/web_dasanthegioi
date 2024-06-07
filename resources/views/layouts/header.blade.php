<nav class="navbar navbar-expand-sm bg-dark navbar-dark">

  <div class="container-fluid">
    <!-- Links -->
    <ul class="navbar-nav">
      <li class="nav-item">
       <a class="nav-link {{@request()->is('/') ?'active':''}}" href="/">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{@request ()->is('about') ?'active':''}}" href="/about">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{@request()->is('admin ') ?'active':''}}" href="Admin">Admin</a>
      </li>
    </ul>
    <form class="d-flex">
        <input class="form-control me-2" type="text" placeholder="Search">
        <button class="btn btn-primary" type="button">Search</button>
      </form>
  </div>

</nav>
