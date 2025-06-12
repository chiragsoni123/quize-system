<nav class="bg-white shadow-md px-4 py-3">
        <div class="flex justify-between items-center">
            <div class="text-2xl font-bold text-gray-800 hover:text-blue-500 cursor-pointer">
                Quiz System
            </div>
            <div class="space-x-4">
                <a class="text-gray-700 hover:text-blue-500" href="/">Home</a>

                <a class="text-gray-700 hover:text-blue-500" href="/admin-categories">Categories</a>
                @if (session('user'))
                <a class="text-gray-700 hover:text-blue-500" href="">Welcome {{session('user')->name}}</a>
                <a class="text-gray-700 hover:text-blue-500" href="/user-logout">Logout</a> 
                @else
                <a class="text-gray-700 hover:text-blue-500" href="/user-login">Login</a>
                <a class="text-gray-700 hover:text-blue-500" href="/user-signup">Signup</a>
                @endif
                
                <a class="text-gray-700 hover:text-blue-500" href="">Blog</a>        
            </div>
        </div>
</nav>