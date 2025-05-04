<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome to Noor</title>

    <!-- Tailwind CSS via CDN (single file) -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- HTMX CDN -->
    <script src="https://unpkg.com/htmx.org@1.9.10"></script>
</head>
<body class="bg-gray-100 text-gray-800 flex items-center justify-center h-screen">
    <div class="text-center">
        <img src="public/cover.png" alt="Noor Logo" class="w-full mb-6" />
        <h1 class="text-4xl font-bold mb-4">Welcome to Noor</h1>
        <p class="text-lg mb-4">A minimalist PHP framework for building powerful, server-driven web applications.</p>

        <!-- Example HTMX usage -->
        <button 
            class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition"
            hx-get="/hello"
            hx-swap="innerHTML"
            hx-target="#response"
        >
            Greet Me
        </button>
        <div id="response" class="mt-4"></div>
    </div>
</body>
</html>
