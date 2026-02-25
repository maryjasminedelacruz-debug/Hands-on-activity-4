<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @yield('title')
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>
<body>
    <nav class="bg-blue-800 text-white p-4 flex justify-between items-center">
        <h1>Student Management System</h1>

        <ul class="flex gap-4">
            <li><a href="#" class="hover:underline">Home</a></li>
            <li><a href="#" class="hover:underline">Add Student</a></li>
            <li><a href="#" class="hover:underline">Contact Us</a></li>
        </ul>
    </nav>

    <div class="container mx-auto mt-8">

        @yield('content')
    </div>
</body>
</html>