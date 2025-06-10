<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Quiz</title>
    @vite('resources/css/app.css')
</head>
<body>
    <x-navbar name={{$name}}></x-navbar>
    <div class="bg-gray-100 flex flex-col items-center min-h-screen pt-5">
        <div class="bg-white p-8 rounded-2xl shadow-lg w-full max-w-md">
            @if(!session('quizDetails'))
            <h2 class="text-2xl text-center text-gray-800 mb-6 ">Add Quiz</h2>
            
            <form action="/add-quiz" method="get" class="space-y-4">
                {{-- @csrf --}}
                <div>
                    <input type="text" placeholder="Enter Quiz Name" name="quiz" class="w-full px-4 py-2 border border-gray-300 rounded-xl focus:outline-none">
                    
                </div>
                <div>
                    <select type="text" placeholder="Enter Quiz Name" name="category_id" class="w-full px-4 py-2 border border-gray-300 rounded-xl focus:outline-none">
                        @foreach ($categories as $category)
                           <option value="{{$category->id}}">{{$category->name}}</option> 
                        @endforeach
                        
                    </select>
                </div>
                
                <button type="submit" class="w-full bg-blue-500 rounded-xl px-4 py-2 cursor-pointer text-white">Add</button>
            </form>
            @else
            <span class="text-green-500 font-bold">Quiz: {{session('quizDetails')->name}}</span>
            <h2 class="text-2xl text-center text-gray-800 mb-6 ">Add MCQ's</h2>
            <form action="add-mcq" method="post" class="space-y-4">
                @csrf
                <div>
                    <textarea type="text" placeholder="Enter your question Name" name="question" class="w-full px-4 py-2 border border-gray-300 rounded-xl focus:outline-none"></textarea>
                    
                </div>
                <div>
                    <input type="text" placeholder="Enter first option" name="a" class="w-full px-4 py-2 border border-gray-300 rounded-xl focus:outline-none">
                    
                </div>
                <div>
                    <input type="text" placeholder="Enter second option" name="b" class="w-full px-4 py-2 border border-gray-300 rounded-xl focus:outline-none">
                    
                </div>
                <div>
                    <input type="text" placeholder="Enter third option" name="c" class="w-full px-4 py-2 border border-gray-300 rounded-xl focus:outline-none">
                    
                </div>
                <div>
                    <input type="text" placeholder="Enter forth option" name="d" class="w-full px-4 py-2 border border-gray-300 rounded-xl focus:outline-none">
                    
                </div>

                <div>
                    <select name="correct_ans" class="w-full px-4 py-2 border border-gray-300 rounded-xl focus:outline-none">
                        <option value="">Select Right Answer</option>
                        <option value="a">A</option>
                        <option value="b">B</option>
                        <option value="c">C</option>
                        <option value="d">D</option>

                    </select>
                </div>

                <button type="submit" name="submit" value="add-more" class="w-full bg-blue-500 rounded-xl px-4 py-2 cursor-pointer text-white">Add More</button>
                <button type="submit" name="submit" value="done" class="w-full bg-green-500 rounded-xl px-4 py-2 cursor-pointer text-white">Add and Submit</button>


            </form>
            @endif
        </div>
    </div>
</body>