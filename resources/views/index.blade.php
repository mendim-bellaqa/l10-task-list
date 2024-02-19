@extends('layouts.app')

@section('title', 'The list of tasks')

@section('content')
  <nav class="mb-4 text-white ">
    <a href="{{ route('tasks.create') }}" class="link">Add Task!</a>
  </nav>

  @forelse ($tasks as $task)
    <div>
      <a href="{{ route('tasks.show', ['task' => $task->id]) }}"
        @class(['line-through' => $task->completed])>{{ $task->title }}</a>
    </div>
  @empty
    <div>There are no tasks!</div>
  @endforelse

  @if ($tasks->count())
    <nav class="mt-4">
      {{ $tasks->links() }}
    </nav>
  @endif

   <section class="bg-black  py-4 px-4 lg:px-16">
                    <div class="container mx-auto px-[12px] md:px-2 xl:px-12 max-w-[100%] nanum2">
                        <h1 class="text-center text-5xl pb-28">You also Can</h1>
                        <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 gap-x-4 gap-y-28 lg:gap-y-16">
                            <div class="relative group h-48 flex   flex-col rounded-xl bg-white bg-clip-border text-gray-700 shadow-md">
                                <a href="#"
                                    class="block">
                                    <div class="h-28">
                                        <div
                                            class="absolute -top-20 lg:top-[-10%] left-[5%] z-40  group-hover:top-[-40%] group-hover:opacity-[0.9]   duration-300 w-[90%] h-48 bg-red-500 rounded-xl justify-items-center align-middle">
                                            <img src="https://epicpadprinting.com/public/img/indus/Backpacks-and-umbrella.png"
                                                class="w-36 h-36  mt-6 m-auto" alt="Backpacks and Umbrella"
                                                title="Backpacks and Umbrella" loading="lazy" width="200" height="200">
                                        </div>
                                    </div>
                                    <div class="p-6   z-10 w-full   ">
                                        <p
                                            class="mb-2 inline-block text-tg text-center w-full  text-xl  font-sans  font-semibold leading-snug tracking-normal   antialiased">
                                            Daily tasks
                                        </p>
                                    </div>
                                </a>
                            </div>

                            <div class="relative group h-48 flex   flex-col rounded-xl bg-white bg-clip-border text-gray-700 shadow-md">
                                <a href="#" class="block">
                                    <div class="h-28">
                                        <div
                                            class="absolute -top-20 lg:top-[-10%] left-[5%] z-40  group-hover:top-[-40%] group-hover:opacity-[0.9]   duration-300 w-[90%] h-48 bg-red-500 rounded-xl justify-items-center align-middle">
                                            <img src="https://epicpadprinting.com/public/img/indus/MEDICAL.png"
                                                class="w-36 h-36  mt-6 m-auto" alt="Medical" title="Medical" loading="lazy" width="200"
                                                height="200">
                                        </div>
                                    </div>
                                    <div class="p-6   z-10 w-full   ">
                                        <p
                                            class="mb-2 inline-block text-tg text-center w-full  text-xl  font-sans  font-semibold leading-snug tracking-normal   antialiased">
                                            Weekly tasks
                                        </p>
                                    </div>
                                </a>
                            </div>

                            <div class="relative group h-48 flex   flex-col rounded-xl bg-white bg-clip-border text-gray-700 shadow-md">
                                <a href="#" class="block">
                                    <div class="h-28">
                                        <div
                                            class="absolute -top-20 lg:top-[-10%] left-[5%] z-40  group-hover:top-[-40%] group-hover:opacity-[0.9]   duration-300 w-[90%] h-48 bg-red-500 rounded-xl justify-items-center align-middle">
                                            <img src="https://epicpadprinting.com/public/img/indus/Tools.png"
                                                class="w-36 h-36  mt-6 m-auto" alt="Tools" title="Tools" loading="lazy" width="200"
                                                height="200">
                                        </div>
                                    </div>
                                    <div class="p-6   z-10 w-full   ">
                                        <p
                                            class="mb-2 inline-block text-tg text-center w-full  text-xl  font-sans  font-semibold leading-snug tracking-normal   antialiased">
                                            Tools and Settings
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </section>
@endsection
