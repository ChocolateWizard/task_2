@extends('layouts.main')

@section('content')
    <div class="container mx-auto px-4 pt-16">
        <div class="popular-movies">
            <h2 class="uppercase tracking-wider text-mellon-primary text-lg font-semibold">Popular movies</h2>
            {{-- Popular movies --}}
            @unless (count($popularMovies) == 0)
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                    @foreach ($popularMovies as $popularMovie)
                        <x-movie-card :movie="$popularMovie" />
                    @endforeach
                </div>
            @else
                <h2 class="mt-5 uppercase tracking-wider text-onyx-primary-30 text-lg font-bold">Could not load popular movies</h2>
            @endunless

        </div>
        {{-- End of popular movies --}}
        {{-- Current movies --}}
        <div class="now-playing-movies py-24">
            <h2 class="uppercase tracking-wider text-mellon-primary text-lg font-semibold">Current movies</h2>
            @unless (count($currentMovies) == 0)
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                    @foreach ($currentMovies as $currentMovie)
                        <x-movie-card :movie="$currentMovie" />
                    @endforeach
                </div>
            @else
                <h2 class="mt-5 uppercase tracking-wider text-onyx-primary-30 text-lg font-bold">Could not load current movies</h2>
            @endunless

        </div>
        {{-- End of current movies --}}

    </div>
@endsection
