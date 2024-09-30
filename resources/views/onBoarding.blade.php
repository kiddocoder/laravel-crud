<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Laravel Crup App | Onboarding</title>
      @vite('resources/css/app.css')
</head>

<body>
      <section class="mx-auto max-w-4xl px-4 sm:px-6 lg:px-8 bg-gray-50 dark:bg-gray-900 flex flex-col items-center justify-center min-h-screen">
            <div class="text-center mb-8">
                  <h1 class="text-3xl font-bold text-gray-800 dark:text-white">Welcome to Our App!</h1>
                  <p class="mt-2 text-gray-600 dark:text-gray-300">Please log in to continue</p>
            </div>
            <img src="{{ asset('images/onboarding-image.jpg') }}" alt="Onboarding Image" class="mb-6 rounded-lg shadow-lg">

            <div class="flex flex-col space-y-4">
                  <a href="#" class="flex items-center justify-center px-4 py-2 text-white bg-blue-600 rounded-lg shadow hover:bg-blue-700 transition duration-200">
                        <img src="{{ asset('images/google-logo.png') }}" alt="Google Logo" class="w-5 h-5 mr-2">
                        Login with Google
                  </a>
                  <a href="#" class="flex items-center justify-center px-4 py-2 text-white bg-gray-800 rounded-lg shadow hover:bg-gray-700 transition duration-200">
                        <img src="{{ asset('images/github-logo.png') }}" alt="GitHub Logo" class="w-5 h-5 mr-2">
                        Login with GitHub
                  </a>
            </div>
      </section>
</body>

</html>