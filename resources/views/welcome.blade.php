<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Login</title>
    @vite('resources/css/app.css')
</head>
<body>
   <x-user-navbar></x-user-navbar> 
   <div class="flex flex-col min-h-screen items-center bg-gray-100">
        <h1 class="text-3xl text-green-900 p-5 ">Check your Skills</h1>
        <div class="w-full max-w-md">
            <div class="relative">
                <input class="w-full px-4 py-3 text-gray-700 border border-gray-300 rounded-2xl shadow " type="text" placeholder="Search quiz...">
            </div>
        </div>
   </div>
</body>
