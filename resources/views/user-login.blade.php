<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Login</title>
    @vite('resources/css/app.css')
</head>
<body>
    <x-user-navbar></x-user-navbar>
   <div class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-white p-8 rounded-2xl shadow-lg w-full max-w-sm">
        <h2 class="text-2xl text-center text-gray-800 mb-6 ">User Login</h2>
        @error('user')
                    <div class="text-red-500">{{$message}}</div>
                @enderror
        <form action="/user-login" method="post" class="space-y-4">
            @csrf
            
            <div>
                <label for="" class="text-gray-600 mb-1">User Email</label>
                <input type="text" placeholder="Enter User Email" name="email" class="w-full px-4 py-2 border border-gray-300 rounded-xl focus:outline-none">
                @error('email')
                    <div class="text-red-500">{{$message}}</div>
                @enderror
            </div>
            <div>
                <label for="" class="text-gray-600 mb-1">Password</label>
                <input type="password" placeholder="Enter User Password" name="password" class="w-full px-4 py-2 border border-gray-300 rounded-xl focus:outline-none">
                @error('password')
                    <div class="text-red-500">{{$message}}</div>
                @enderror
            </div>
            
            <button type="submit" class="w-full bg-blue-500 rounded-xl px-4 py-2 cursor-pointer text-white">Login</button>
        </form>
    </div>
</div> 
</body>

</html>