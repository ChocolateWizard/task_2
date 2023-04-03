@extends('layouts.main')

@section('content')
    <div class="container mx-auto px-4 pt-16">
        <div class="popular-movies">
            <h2 class="uppercase tracking-wider text-mellon-primary text-lg font-semibold">Popular movies</h2>
            {{-- Popular movies --}}
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                <x-movie-card />
                <x-movie-card />
                <x-movie-card />
                <x-movie-card />
                <x-movie-card />
                <x-movie-card />


            </div>
        </div>
        {{-- End of popular movies --}}
        {{-- Current movies --}}
        <div class="now-playing-movies py-24">
            <h2 class="uppercase tracking-wider text-mellon-primary text-lg font-semibold">Current movies</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                <x-movie-card />
                <x-movie-card />
                <x-movie-card />
                <x-movie-card />
                <x-movie-card />
                <x-movie-card />

            </div>
        </div>
        {{-- End of current movies --}}

    </div>
@endsection
