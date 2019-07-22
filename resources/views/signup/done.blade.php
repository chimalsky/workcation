@extends('layouts.app')

@section('body')
    <h1 class="text-2xl">
        <span class="font-semibold">{{ $user->name }}</span>... you have 
        just joined an elite group of people. 
    </h1>

    <p class="my-8">
        Be prepared to accelerate your life by <span class="font-bold text-red-600">1000x</span>
    </p>

    <footer class="w-full flex flex-wrap justify-end">
        <p class="text-right text-sm font-semibold">
            Don't worry. We'll reach out to you through 
            
            <span class="bg-yellow-300">
                {{ $user->email }}
            </span>
            
            <br/>When you're ready.
        </p>

        <p class="text-right text-sm mt-8">
            If that's the wrong email, <a class="border-b border-gray-800" href="{{ route('signup.show') }}"> signup again </a>
            after feeling ashamed 
            of what you've just done.
        </p>
    </footer>
@endsection