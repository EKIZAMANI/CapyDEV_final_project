@extends('layouts.navigation')
@section('title')
CapyType | Custom Words
@endsection
    @section('content')
    <div style="padding-left: 570px; ">
        <form class="bg-white m-10 p-10 rounded-md outline w-1/2 border-collapse" style="background-color: #262A33; color: #526777;">
          <label for="custom-word " class="font text-lg">custom-word:</label>
          <div class="">
            <input id="custom-word" name="custom-word" type="text" class="w-full p-2 border rounded-md " placeholder="Type your custom word...">
            <div style="padding-left: 475px; padding-top: 20px;">
                <button type="submit" class="ml-2 py-2 px-4 bg-gray-700 rounded-md hover:bg-gray-800 focus:outline-none focus:ring-2 " style="color: #2ABA86;">Submit</button>
            </div>
          </div>
        </form>
    </div>
    @endsection
