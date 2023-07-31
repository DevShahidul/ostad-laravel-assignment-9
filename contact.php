<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
  <title>Contact Page</title>
</head>
<body>
  <header class="bg-gray-900 text-white">
    <div class="container mx-auto flex items-center justify-between py-4">
      <div class="flex items-center">
        <img src="images/logo.png" alt="Logo" class="h-8 mr-4">
      </div>
      <nav class="space-x-4">
        <a href="index.html" class="text-white hover:text-gray-300">Home</a>
        <a href="about.html" class="text-white hover:text-gray-300">About</a>
        <a href="contact" class="text-white hover:text-gray-300">Contact</a>
      </nav>
    </div>
  </header>

  <div class="container mx-auto mt-8">
    <div class="max-w-md mx-auto bg-white p-8 border border-gray-300 rounded-md">
      <h2 class="text-2xl font-bold mb-4">Contact Us</h2>
      <form action="process.php" method="POST">
        <div class="mb-4">
          <label for="name" class="block mb-2">Name</label>
          <input type="text" id="name" name="name" class="w-full border border-gray-300 rounded-md px-3 py-2" required>
        </div>
        <div class="mb-4">
          <label for="email" class="block mb-2">Email</label>
          <input type="email" id="email" name="email" class="w-full border border-gray-300 rounded-md px-3 py-2" required>
        </div>
        <div class="mb-4">
          <label for="subject" class="block mb-2">Subject</label>
          <input type="text" id="subject" name="subject" class="w-full border border-gray-300 rounded-md px-3 py-2" required>
        </div>
        <div class="mb-4">
          <label for="message" class="block mb-2">Message</label>
          <textarea id="message" name="message" class="w-full border border-gray-300 rounded-md px-3 py-2" rows="5" required></textarea>
        </div>
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">Submit</button>
      </form>
      <div class="mt-4" id="success-message" style="display: none;">
        <p class="text-green-500">Your message has been sent successfully.</p>
      </div>
    </div>
  </div>

  <script>
    const form = document.querySelector('form');
    const successMessage = document.querySelector('#success-message');

    form.addEventListener('submit', (e) => {
      e.preventDefault();
      // Simulate form submission
      setTimeout(() => {
        form.reset();
        successMessage.style.display = 'block';
      }, 1000);
    });
  </script>
</body>
</html>