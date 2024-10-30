<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
  @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">

  <!-- Login Form -->
  <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-sm">
    <h2 class="text-2xl font-bold text-center mb-6">Login</h2>
    <form action="#" method="POST">
      <!-- Username Field -->
      <div class="mb-4">
        <label class="block text-gray-700 font-bold mb-2" for="username">
          Username :
        </label>
        <input type="text" id="username" name="username" value="Jauza"
          class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
      </div>
      

      <!-- Password Field -->
      <div class="mb-6">
        <label class="block text-gray-700 font-bold mb-2" for="password">
          Password :
        </label>
        <input type="password" id="password" name="password" value="*****"
          class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline">
      </div>

      <!-- Login Button -->
      <div class="flex items-center justify-center">
        <button type="submit"
          class="bg-red-600 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
          LOGIN
        </button>
      </div>
    </form><li><a href="{{ route ('home') }}" class="hover:text-red-50 font-bold">Home Sini</a></li>
    </form><li><a href="{{ route ('about') }}" class="hover:text-red-50 font-bold">About Sini</a></li>

  </div>

</body>
</html>
