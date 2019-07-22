@extends('layouts.app')

@section('body')
    <h1 class="text-xl font-hairline"> 
        The <strong>only</strong> official Workcation
    </h1>
    <h2 class="font-semibold text-sm my-3">
        2019 Baltimore
    </h2>

    <form action="{{ route('signup.store') }}" method="post"
        class="flex flex-wrap w-full">
        @csrf
        
        @if ($errors->any())
            <section class="bg-red-200 p-4 mb-4">
                <h1 class="text-xl mb-4 font-thin">
                    I'm sorry, but it looks like you fucked something up.
                </h1>

                @foreach($errors->all() as $error)
                    <p class="w-full">
                        {{ $error }}
                    </p>
                @endforeach
            </section>
        @endif

        <label class="w-full">
            <input type="email" name="email" placeholder="email"
                class="w-full lg:w-1/2 border-b border-gray-400 py-2 px-1"
                />
        </label>

        <label class="w-full my-2">
            <input type="text" name="name" placeholder="yo name"
                class="w-full lg:w-1/2 border-b border-gray-400 py-2 px-1"
                />
        </label>

        <footer class="w-full my-8">
            <button class="border border-1 border-gray-600 py-2 px-4">
                Alright. Hand my personal data over. <strong>I'm in!</strong>
            </button>
        </footer>
    </form>
@endsection