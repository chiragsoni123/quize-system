<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Categories</title>
    @vite('resources/css/app.css')
</head>
<body>
    <x-user-navbar></x-user-navbar>
    
    <div class="bg-gray-100 flex flex-col items-center min-h-screen pt-5">
        
        <h1 class="text-4xl text-center text-green-800 font-bold mb-6 ">Quiz Name : {{$quizName}}</h1>
        <h2 class="text-lg text-center text-blue-400 font-bold mb-6 ">This Quiz contain {{$quizCount}} questions and no limit to attempt this quiz</h2>
        <h1 class="text-2xl text-center text-green-800 font-bold mb-6 ">Good luck !!!</h1>

        <a type="submit" href="user-signup" class=" bg-blue-500 rounded-md px-4 py-3 my-5 cursor-pointer text-white">Login/Signup to start Quiz</a>

        
    </div>
</body>
</html>