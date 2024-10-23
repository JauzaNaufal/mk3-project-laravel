<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tailwind Layout</title>
  @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">

  <!-- Navbar -->
  <nav class="bg-gray-800 p-4">
    <div class="container mx-auto flex justify-center">
      <ul class="flex space-x-6 text-white text-lg">
        <li><a href="#" class="hover:text-gray-300">HOME</a></li>
        <li><a href="#" class="hover:text-gray-300">ABOUT ME</a></li>
        <li><a href="#" class="hover:text-gray-300">FAVORIT</a></li>
      </ul>
    </div>
  </nav>

  <!-- Main Content -->
  <div class="container mx-auto mt-10">
    <div class="flex justify-center bg-white p-8 rounded-lg shadow-md">

      <!-- Image Section -->
      <div class="flex-shrink-0 mb-6 md:mb-0 md:mr-8">
        <img src="path-to-your-image.jpg" alt="Profile" class="w-48 h-48 rounded-lg object-cover shadow-md">
      </div>

      <!-- Text Section -->
      <div>
        <h1 class="text-3xl font-bold">Jauza Naufal Rifai</h1>
        <p class="mt-4 text-gray-600">
          Aku lahir pada 25 Januari 2008 di Banyumas dan sekarang Saya tinggal di Desa Kemawi Somagede.
        </p>
      </div>

    </div>
  </div>

</body>
</html>
