<div class="d-flex flex-column flex-shrink-0 bg-secondary" style="width: 4.5rem;">
    <ul class="nav nav-pills nav-flush flex-column mb-auto text-center">
        @forelse ($movies as $movie)
            <li class="nav-item">
                <a href="{{ route('home') }}" class="nav-link border-bottom text-white" aria-current="page" title="Home"
                    data-bs-toggle="tooltip" data-bs-placement="right">
                    <img src="{{ $movie->image }}" alt="">

                </a>
            </li>
        @empty
        @endforelse
    </ul>
</div>
