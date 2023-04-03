@extends('layouts.main')

@section('content')
    <div class="container mx-auto px-4 pt-16">
        <div class="popular-movies">
            <h2 class="uppercase tracking-wider text-mellon-primary text-lg font-semibold">Hit filmovi</h2>
            {{-- Popularni filmovi --}}
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                <div class="mt-8">
                    <a href="#">
                        <img class="hover:opacity-75 transition ease-in-out duration-150"
                            src="{{ asset('storage/covers/The_Lighthouse.jpg') }}" alt="The_Lighthouse.jpg">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray:300">The Lighthouse</a>
                        <div class="flex items-center text-gray-400 text-sm mt-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                class="bi bi-star-fill fill-mellon-primary" viewBox="0 0 16 16">
                                <path
                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                            </svg>
                            <span class="ml-1">85%</span>
                            <span class="mx-2">|</span>
                            <span>20 feb, 2020</span>
                        </div>
                        <div class="text-gray-400 text-sm">Triller, Drama, Tragedija</div>
                    </div>
                </div>
                <div class="mt-8">
                    <a href="#">
                        <img class="hover:opacity-75 transition ease-in-out duration-150"
                            src="{{ asset('storage/covers/The_Lighthouse.jpg') }}" alt="The_Lighthouse.jpg">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray:300">The Lighthouse</a>
                        <div class="flex items-center text-gray-400 text-sm mt-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                class="bi bi-star-fill fill-mellon-primary" viewBox="0 0 16 16">
                                <path
                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                            </svg>
                            <span class="ml-1">85%</span>
                            <span class="mx-2">|</span>
                            <span>20 feb, 2020</span>
                        </div>
                        <div class="text-gray-400 text-sm">Triller, Drama, Tragedija</div>
                    </div>
                </div>
                <div class="mt-8">
                    <a href="#">
                        <img class="hover:opacity-75 transition ease-in-out duration-150"
                            src="{{ asset('storage/covers/The_Lighthouse.jpg') }}" alt="The_Lighthouse.jpg">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray:300">The Lighthouse</a>
                        <div class="flex items-center text-gray-400 text-sm mt-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                class="bi bi-star-fill fill-mellon-primary" viewBox="0 0 16 16">
                                <path
                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                            </svg>
                            <span class="ml-1">85%</span>
                            <span class="mx-2">|</span>
                            <span>20 feb, 2020</span>
                        </div>
                        <div class="text-gray-400 text-sm">Triller, Drama, Tragedija</div>
                    </div>
                </div>
                <div class="mt-8">
                    <a href="#">
                        <img class="hover:opacity-75 transition ease-in-out duration-150"
                            src="{{ asset('storage/covers/The_Lighthouse.jpg') }}" alt="The_Lighthouse.jpg">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray:300">The Lighthouse</a>
                        <div class="flex items-center text-gray-400 text-sm mt-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                class="bi bi-star-fill fill-mellon-primary" viewBox="0 0 16 16">
                                <path
                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                            </svg>
                            <span class="ml-1">85%</span>
                            <span class="mx-2">|</span>
                            <span>20 feb, 2020</span>
                        </div>
                        <div class="text-gray-400 text-sm">Triller, Drama, Tragedija</div>
                    </div>
                </div>
                <div class="mt-8">
                    <a href="#">
                        <img class="hover:opacity-75 transition ease-in-out duration-150"
                            src="{{ asset('storage/covers/The_Lighthouse.jpg') }}" alt="The_Lighthouse.jpg">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray:300">The Lighthouse</a>
                        <div class="flex items-center text-gray-400 text-sm mt-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                class="bi bi-star-fill fill-mellon-primary" viewBox="0 0 16 16">
                                <path
                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                            </svg>
                            <span class="ml-1">85%</span>
                            <span class="mx-2">|</span>
                            <span>20 feb, 2020</span>
                        </div>
                        <div class="text-gray-400 text-sm">Triller, Drama, Tragedija</div>
                    </div>
                </div>
                <div class="mt-8">
                    <a href="#">
                        <img class="hover:opacity-75 transition ease-in-out duration-150"
                            src="{{ asset('storage/covers/The_Lighthouse.jpg') }}" alt="The_Lighthouse.jpg">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray:300">The Lighthouse</a>
                        <div class="flex items-center text-gray-400 text-sm mt-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                class="bi bi-star-fill fill-mellon-primary" viewBox="0 0 16 16">
                                <path
                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                            </svg>
                            <span class="ml-1">85%</span>
                            <span class="mx-2">|</span>
                            <span>20 feb, 2020</span>
                        </div>
                        <div class="text-gray-400 text-sm">Triller, Drama, Tragedija</div>
                    </div>
                </div>
                <div class="mt-8">
                    <a href="#">
                        <img class="hover:opacity-75 transition ease-in-out duration-150"
                            src="{{ asset('storage/covers/The_Lighthouse.jpg') }}" alt="The_Lighthouse.jpg">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray:300">The Lighthouse</a>
                        <div class="flex items-center text-gray-400 text-sm mt-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                class="bi bi-star-fill fill-mellon-primary" viewBox="0 0 16 16">
                                <path
                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                            </svg>
                            <span class="ml-1">85%</span>
                            <span class="mx-2">|</span>
                            <span>20 feb, 2020</span>
                        </div>
                        <div class="text-gray-400 text-sm">Triller, Drama, Tragedija</div>
                    </div>
                </div>
                <div class="mt-8">
                    <a href="#">
                        <img class="hover:opacity-75 transition ease-in-out duration-150"
                            src="{{ asset('storage/covers/The_Lighthouse.jpg') }}" alt="The_Lighthouse.jpg">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray:300">The Lighthouse</a>
                        <div class="flex items-center text-gray-400 text-sm mt-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                class="bi bi-star-fill fill-mellon-primary" viewBox="0 0 16 16">
                                <path
                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                            </svg>
                            <span class="ml-1">85%</span>
                            <span class="mx-2">|</span>
                            <span>20 feb, 2020</span>
                        </div>
                        <div class="text-gray-400 text-sm">Triller, Drama, Tragedija</div>
                    </div>
                </div>
                <div class="mt-8">
                    <a href="#">
                        <img class="hover:opacity-75 transition ease-in-out duration-150"
                            src="{{ asset('storage/covers/The_Lighthouse.jpg') }}" alt="The_Lighthouse.jpg">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray:300">The Lighthouse</a>
                        <div class="flex items-center text-gray-400 text-sm mt-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                class="bi bi-star-fill fill-mellon-primary" viewBox="0 0 16 16">
                                <path
                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                            </svg>
                            <span class="ml-1">85%</span>
                            <span class="mx-2">|</span>
                            <span>20 feb, 2020</span>
                        </div>
                        <div class="text-gray-400 text-sm">Triller, Drama, Tragedija</div>
                    </div>
                </div>
                <div class="mt-8">
                    <a href="#">
                        <img class="hover:opacity-75 transition ease-in-out duration-150"
                            src="{{ asset('storage/covers/The_Lighthouse.jpg') }}" alt="The_Lighthouse.jpg">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray:300">The Lighthouse</a>
                        <div class="flex items-center text-gray-400 text-sm mt-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                class="bi bi-star-fill fill-mellon-primary" viewBox="0 0 16 16">
                                <path
                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                            </svg>
                            <span class="ml-1">85%</span>
                            <span class="mx-2">|</span>
                            <span>20 feb, 2020</span>
                        </div>
                        <div class="text-gray-400 text-sm">Triller, Drama, Tragedija</div>
                    </div>
                </div>
            </div>
        </div>
        {{-- Kraj popularnih filmova --}}
        {{-- Aktuelni filmovi --}}
        <div class="now-playing-movies py-24">
            <h2 class="uppercase tracking-wider text-mellon-primary text-lg font-semibold">Aktuelni</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                <div class="mt-8">
                    <a href="#">
                        <img class="hover:opacity-75 transition ease-in-out duration-150"
                            src="{{ asset('storage/covers/The_Lighthouse.jpg') }}" alt="The_Lighthouse.jpg">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray:300">The Lighthouse</a>
                        <div class="flex items-center text-gray-400 text-sm mt-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                class="bi bi-star-fill fill-mellon-primary" viewBox="0 0 16 16">
                                <path
                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                            </svg>
                            <span class="ml-1">85%</span>
                            <span class="mx-2">|</span>
                            <span>20 feb, 2020</span>
                        </div>
                        <div class="text-gray-400 text-sm">Triller, Drama, Tragedija</div>
                    </div>
                </div>
                <div class="mt-8">
                    <a href="#">
                        <img class="hover:opacity-75 transition ease-in-out duration-150"
                            src="{{ asset('storage/covers/The_Lighthouse.jpg') }}" alt="The_Lighthouse.jpg">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray:300">The Lighthouse</a>
                        <div class="flex items-center text-gray-400 text-sm mt-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                class="bi bi-star-fill fill-mellon-primary" viewBox="0 0 16 16">
                                <path
                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                            </svg>
                            <span class="ml-1">85%</span>
                            <span class="mx-2">|</span>
                            <span>20 feb, 2020</span>
                        </div>
                        <div class="text-gray-400 text-sm">Triller, Drama, Tragedija</div>
                    </div>
                </div>
                <div class="mt-8">
                    <a href="#">
                        <img class="hover:opacity-75 transition ease-in-out duration-150"
                            src="{{ asset('storage/covers/The_Lighthouse.jpg') }}" alt="The_Lighthouse.jpg">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray:300">The Lighthouse</a>
                        <div class="flex items-center text-gray-400 text-sm mt-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                class="bi bi-star-fill fill-mellon-primary" viewBox="0 0 16 16">
                                <path
                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                            </svg>
                            <span class="ml-1">85%</span>
                            <span class="mx-2">|</span>
                            <span>20 feb, 2020</span>
                        </div>
                        <div class="text-gray-400 text-sm">Triller, Drama, Tragedija</div>
                    </div>
                </div>
                <div class="mt-8">
                    <a href="#">
                        <img class="hover:opacity-75 transition ease-in-out duration-150"
                            src="{{ asset('storage/covers/The_Lighthouse.jpg') }}" alt="The_Lighthouse.jpg">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray:300">The Lighthouse</a>
                        <div class="flex items-center text-gray-400 text-sm mt-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                class="bi bi-star-fill fill-mellon-primary" viewBox="0 0 16 16">
                                <path
                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                            </svg>
                            <span class="ml-1">85%</span>
                            <span class="mx-2">|</span>
                            <span>20 feb, 2020</span>
                        </div>
                        <div class="text-gray-400 text-sm">Triller, Drama, Tragedija</div>
                    </div>
                </div>
                <div class="mt-8">
                    <a href="#">
                        <img class="hover:opacity-75 transition ease-in-out duration-150"
                            src="{{ asset('storage/covers/The_Lighthouse.jpg') }}" alt="The_Lighthouse.jpg">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray:300">The Lighthouse</a>
                        <div class="flex items-center text-gray-400 text-sm mt-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                class="bi bi-star-fill fill-mellon-primary" viewBox="0 0 16 16">
                                <path
                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                            </svg>
                            <span class="ml-1">85%</span>
                            <span class="mx-2">|</span>
                            <span>20 feb, 2020</span>
                        </div>
                        <div class="text-gray-400 text-sm">Triller, Drama, Tragedija</div>
                    </div>
                </div>
                <div class="mt-8">
                    <a href="#">
                        <img class="hover:opacity-75 transition ease-in-out duration-150"
                            src="{{ asset('storage/covers/The_Lighthouse.jpg') }}" alt="The_Lighthouse.jpg">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray:300">The Lighthouse</a>
                        <div class="flex items-center text-gray-400 text-sm mt-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                class="bi bi-star-fill fill-mellon-primary" viewBox="0 0 16 16">
                                <path
                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                            </svg>
                            <span class="ml-1">85%</span>
                            <span class="mx-2">|</span>
                            <span>20 feb, 2020</span>
                        </div>
                        <div class="text-gray-400 text-sm">Triller, Drama, Tragedija</div>
                    </div>
                </div>
                <div class="mt-8">
                    <a href="#">
                        <img class="hover:opacity-75 transition ease-in-out duration-150"
                            src="{{ asset('storage/covers/The_Lighthouse.jpg') }}" alt="The_Lighthouse.jpg">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray:300">The Lighthouse</a>
                        <div class="flex items-center text-gray-400 text-sm mt-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                class="bi bi-star-fill fill-mellon-primary" viewBox="0 0 16 16">
                                <path
                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                            </svg>
                            <span class="ml-1">85%</span>
                            <span class="mx-2">|</span>
                            <span>20 feb, 2020</span>
                        </div>
                        <div class="text-gray-400 text-sm">Triller, Drama, Tragedija</div>
                    </div>
                </div>
                <div class="mt-8">
                    <a href="#">
                        <img class="hover:opacity-75 transition ease-in-out duration-150"
                            src="{{ asset('storage/covers/The_Lighthouse.jpg') }}" alt="The_Lighthouse.jpg">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray:300">The Lighthouse</a>
                        <div class="flex items-center text-gray-400 text-sm mt-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                class="bi bi-star-fill fill-mellon-primary" viewBox="0 0 16 16">
                                <path
                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                            </svg>
                            <span class="ml-1">85%</span>
                            <span class="mx-2">|</span>
                            <span>20 feb, 2020</span>
                        </div>
                        <div class="text-gray-400 text-sm">Triller, Drama, Tragedija</div>
                    </div>
                </div>
                <div class="mt-8">
                    <a href="#">
                        <img class="hover:opacity-75 transition ease-in-out duration-150"
                            src="{{ asset('storage/covers/The_Lighthouse.jpg') }}" alt="The_Lighthouse.jpg">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray:300">The Lighthouse</a>
                        <div class="flex items-center text-gray-400 text-sm mt-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                class="bi bi-star-fill fill-mellon-primary" viewBox="0 0 16 16">
                                <path
                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                            </svg>
                            <span class="ml-1">85%</span>
                            <span class="mx-2">|</span>
                            <span>20 feb, 2020</span>
                        </div>
                        <div class="text-gray-400 text-sm">Triller, Drama, Tragedija</div>
                    </div>
                </div>
                <div class="mt-8">
                    <a href="#">
                        <img class="hover:opacity-75 transition ease-in-out duration-150"
                            src="{{ asset('storage/covers/The_Lighthouse.jpg') }}" alt="The_Lighthouse.jpg">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray:300">The Lighthouse</a>
                        <div class="flex items-center text-gray-400 text-sm mt-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                class="bi bi-star-fill fill-mellon-primary" viewBox="0 0 16 16">
                                <path
                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                            </svg>
                            <span class="ml-1">85%</span>
                            <span class="mx-2">|</span>
                            <span>20 feb, 2020</span>
                        </div>
                        <div class="text-gray-400 text-sm">Triller, Drama, Tragedija</div>
                    </div>
                </div>
            </div>
        </div>
        {{-- Kraj aktuelnih filmova --}}

    </div>
@endsection
