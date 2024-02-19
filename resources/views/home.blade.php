@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if(Auth::check())
                        {{ __('You are logged in!') }} {{ Auth::user()->name }}
                    @endif

                </div>
                <div class="mt-5">
                    <a href="/tasks">
                        <button class="btn border-black text-black bg-white">See tasks</button>
                    </a>
                </div>

                <div>
                    <!-- component -->
                <section class="bg-black  py-4 px-4 lg:px-16">
                    <div class="container mx-auto px-[12px] md:px-2 xl:px-12 max-w-[100%] nanum2">
                        <h1 class="text-center text-5xl pb-36">I want to see:</h1>
                        <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 gap-x-4 gap-y-28 lg:gap-y-16">
                             <div class="relative group h-48 flex   flex-col rounded-xl bg-white bg-clip-border text-gray-700 shadow-md">
                                <a href="#"
                                    class="block">
                                    <div class="h-28">
                                        <div
                                            class="absolute -top-20 lg:top-[-10%] left-[5%] z-40  group-hover:top-[-40%] group-hover:opacity-[0.9]   duration-300 w-[90%] h-48 bg-red-500 rounded-xl justify-items-center align-middle">
                                            <img src="https://epicpadprinting.com/public/img/indus/Electric.png"
                                                class="w-36 h-36  mt-6 m-auto" alt="Electric" title="Electric" loading="lazy"
                                                width="200" height="200">
                                        </div>
                                    </div>
                                    <div class="p-6   z-10 w-full   ">
                                        <p
                                            class="mb-2 inline-block text-tg text-center w-full  text-xl  font-sans  font-semibold leading-snug tracking-normal   antialiased">
                                            Electric
                                        </p>
                                    </div>
                                </a>
                            </div>

                            <div class="relative group h-48 flex   flex-col rounded-xl bg-white bg-clip-border text-gray-700 shadow-md">
                                <a href="#"
                                    class="block">
                                    <div class="h-28">
                                        <div
                                            class="absolute -top-20 lg:top-[-10%] left-[5%] z-40  group-hover:top-[-40%] group-hover:opacity-[0.9]   duration-300 w-[90%] h-48 bg-red-500 rounded-xl justify-items-center align-middle">
                                            <img src="https://epicpadprinting.com/public/img/indus/Jewelry-coins-and-medallions.png"
                                                class="w-36 h-36  mt-6 m-auto" alt="Jewelry Coins and Medallions"
                                                title="Jewelry Coins and Medallions" loading="lazy" width="200" height="200">
                                        </div>
                                    </div>
                                    <div class="p-6   z-10 w-full   ">
                                        <p
                                            class="mb-2 inline-block text-tg text-center w-full  text-xl  font-sans  font-semibold leading-snug tracking-normal   antialiased">
                                            Jewelry Coins and Medallions
                                        </p>
                                    </div>
                                </a>
                            </div>

                            <div class="relative group h-48 flex   flex-col rounded-xl bg-white bg-clip-border text-gray-700 shadow-md">
                                <a href="#" class="block">
                                    <div class="h-28">
                                        <div
                                            class="absolute -top-20 lg:top-[-10%] left-[5%] z-40  group-hover:top-[-40%] group-hover:opacity-[0.9]   duration-300 w-[90%] h-48 bg-red-500 rounded-xl justify-items-center align-middle">
                                            <img src="https://epicpadprinting.com/public/img/indus/Promotional.png"
                                                class="w-36 h-36  mt-6 m-auto" alt="Promotional" title="Promotional" loading="lazy"
                                                width="200" height="200">
                                        </div>
                                    </div>
                                    <div class="p-6   z-10 w-full   ">
                                        <p
                                            class="mb-2 inline-block text-tg text-center w-full  text-xl  font-sans  font-semibold leading-snug tracking-normal   antialiased">
                                            Promotional
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </section>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
