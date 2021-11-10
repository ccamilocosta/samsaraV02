@section ('search')

      <form class="d-flex" action="{{ route('inc.search') }}" method="GET">
        <input class="form-control me-2" type="text" name="search" required placeholder="Search" aria-label="Search">
        <button class="btn" type="submit">Search</button>
      </form>



