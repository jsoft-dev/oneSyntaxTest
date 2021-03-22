<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tailwind Login Template by David Grzyb</title>
    <meta name="author" content="David Grzyb">
    <meta name="description" content="">

    <link href="https://unpkg.com/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
    <style>
        .body-bg {
            background-color: #9921e8;
            background-image: linear-gradient(315deg, #9921e8 0%, #5f72be 74%);
        }
    </style>
</head>

<body class="body-bg min-h-screen pt-12 md:pt-20 pb-6 px-2 md:px-0" style="font-family:'Lato',sans-serif;">
    <header class="max-w-lg mx-auto">
        <a href="#">
            <h1 class="text-4xl font-bold text-white text-center">Startup</h1>
        </a>
    </header>

    <main class="bg-white max-w-lg mx-auto p-8 md:p-12 my-10 rounded-lg shadow-2xl">
        <section>
            <h3 class="font-bold text-2xl">Welcome to Startup</h3>
            <p class="text-gray-600 pt-2">Sign in to your account.</p>
        </section>

        <section class="mt-10">
            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-4" :errors="$errors" />
            <x-guest-layout>
                <x-auth-card>
                    <x-slot name="logo">
                        <a href="/">
                            <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
                        </a>
                    </x-slot>
                    <form class="flex flex-col" method="POST" action="{{ route('register') }}">
                        @csrf
                        <!-- Name -->
                        <div class="mb-6 pt-3 rounded bg-gray-200">
                            <x-label for="name" :value="__('User Name')" class="block text-gray-700 text-sm font-bold mb-2 ml-3" />

                            <x-input id="username" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-purple-600 transition duration-500 px-3 pb-3" type="text" :value="old('username')" name="username" required autofocus />
                        </div>

                        <div class="mb-6 pt-3 rounded bg-gray-200">
                            <x-label for="name" :value="__('First Name')" class="block text-gray-700 text-sm font-bold mb-2 ml-3" />

                            <x-input id="first_name" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-purple-600 transition duration-500 px-3 pb-3" type="text" :value="old('first_name')" name="first_name" required autofocus />
                        </div>

                        <div class="mb-6 pt-3 rounded bg-gray-200">
                            <x-label for="name" :value="__('Last Name')" class="block text-gray-700 text-sm font-bold mb-2 ml-3" />

                            <x-input id="last_name" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-purple-600 transition duration-500 px-3 pb-3" type="text" :value="old('last_name')" name="last_name"  required autofocus />
                        </div>

                        <!-- Email Address -->
                        <div class="mb-6 pt-3 rounded bg-gray-200">
                            <x-label for="email" :value="__('Email')" class="block text-gray-700 text-sm font-bold mb-2 ml-3" />

                            <x-input id="email" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-purple-600 transition duration-500 px-3 pb-3" type="email" name="email" :value="old('email')" required />
                        </div>


                        <!-- Password -->
                        <div class="mb-6 pt-3 rounded bg-gray-200">
                            <x-label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="password" :value="__('Password')" />

                            <x-input id="password" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-purple-600 transition duration-500 px-3 pb-3" type="password" name="password" :value="old('password')" required />
                        </div>
                        <!-- Confirm Password -->
                        <div class="mb-6 pt-3 rounded bg-gray-200">
                            <x-label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="password_confirmation" :value="__('Confirm Password')" />

                            <x-input id="password_confirmation" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-purple-600 transition duration-500 px-3 pb-3" type="password" name="password_confirmation" :value="old('password')" required />
                        </div>

                        <div class="mb-6 pt-3 rounded bg-gray-200">
                            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                                {{ __('Already registered?') }}
                            </a>

                            <x-button class="bg-purple-600 hover:bg-purple-700 text-white font-bold py-2 rounded shadow-lg hover:shadow-xl transition duration-200">
                                {{ __('Register') }}
                            </x-button>
                        </div>
                    </form>
                </x-auth-card>
            </x-guest-layout>
        </section>
    </main>

    <div class="max-w-lg mx-auto text-center mt-12 mb-6">
        <p class="text-white">Don't have an account? <a href="#" class="font-bold hover:underline">Sign up</a>.</p>
    </div>

    <footer class="max-w-lg mx-auto flex justify-center text-white">
        <a href="#" class="hover:underline">Contact</a>
        <span class="mx-3">•</span>
        <a href="#" class="hover:underline">Privacy</a>
    </footer>
</body>

</html>