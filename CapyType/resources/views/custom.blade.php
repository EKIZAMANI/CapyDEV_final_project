@extends('layouts.navigation')
@section('title')
CapyType | Custom Words
@endsection
    @section('content')
    <div style="padding-left: 570px; ">
        <form class="bg-white m-10 p-10 rounded-md outline w-1/2 border-collapse" style="background-color: #262A33; color: #526777;">
          <label for="custom-word " class="font text-lg">custom-word: Enter your text (100-500 characters): </label>
          <div class="">
            <textarea id="user-text" name="Enter your text 100-500 characters" rows="10" class="w-full p-2 border rounded-md " placeholder="Type your custom word..." maxlength="500" minlength="100" required></textarea>
            
            <div style="padding-left: 475px; padding-top: 10px;">
                
                  <button onclick="custom()" type="submit" class="ml-2 py-2 px-4 bg-gray-700 rounded-md hover:bg-gray-800 focus:outline-none focus:ring-2 " style="color: #2ABA86;"><a href="/typing">Submit</a></button>
  
              </div>
          </div>
        </form>


     
        
    </div>
    
    <script src={{ asset('js/paragraphs.js') }}></script>
    <script src={{ asset('js/script.js') }}></script>   
    
    @endsection
