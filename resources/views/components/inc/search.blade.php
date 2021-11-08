@section ('search')

<nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand"><img src="{{ asset('img/lion.jpg') }}" alt="geomertic lion head logo" title="Wi_OPP"></a>
      <form class="d-flex" action="{{ route('inc.search') }}" method="GET">
        <input class="form-control me-2" type="text" name="search" required placeholder="Search" aria-label="Search">
        <button class="btn" type="submit">Search</button>
      </form>
  </div>
</nav>
<br>
