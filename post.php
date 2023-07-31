<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
  <title>Single Post</title>
</head>
<body>
  <header class="bg-gray-900 text-white">
    <div class="container mx-auto flex items-center justify-between py-4">
      <div class="flex items-center">
        <img src="images/logo.png" alt="Logo" class="h-8 mr-4">
      </div>
      <nav class="space-x-4">
        <a href="index.html" class="text-white hover:text-gray-300">Home</a>
        <a href="blog.html" class="text-white hover:text-gray-300">Blog</a>
        <a href="contact" class="text-white hover:text-gray-300">Contact</a>
      </nav>
    </div>
  </header>

  <div class="container mx-auto mt-8">
    <article>
      <h2 class="text-2xl font-bold">Post Title</h2>
      <img src="post-image.jpg" alt="Post Image" class="w-full h-auto mt-4">
      <div class="mt-4">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi.</p>
        <!-- Add more content as needed -->
      </div>
      <div class="flex flex-col md:flex-row items-center mt-4">
        <img src="author-avatar.jpg" alt="Author Avatar" class="h-8 w-8 rounded-full mb-2 md:mb-0 md:mr-2">
        <p class="text-gray-600">Written by <span class="font-bold">Author Name</span></p>
      </div>
      <div class="mt-4">
        <h2 class="text-lg font-bold">Share this post:</h2>
        <div class="flex space-x-4 mt-2">
          <a href="#" class="text-blue-500 hover:text-blue-700">
            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
          </a>
          <a href="#" class="text-blue-500 hover:text-blue-700">
            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
          </a>
          <!-- Add more social sharing buttons as needed -->
        </div>
      </div>
    </article>
  </div>
</body>
</html>