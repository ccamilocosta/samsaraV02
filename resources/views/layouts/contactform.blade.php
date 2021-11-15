@extends('layouts.dashnav')

@section('content')
</br>
<h2 class=" py-2 px-4 bg-purple-500 text-white font-semibold rounded-lg"> Contact us </h2><br>
<div class="py-2 px-4 bg-purple-500 text-white font-semibold rounded-lg">
     <input type="text" class="form-control" id="name" placeholder="name" name="name" required>
  </div></br>
  <div class="py-2 px-4 bg-purple-500 text-white font-semibold rounded-lg">
   <input type="text" class="form-control" id="email" placeholder="e-mail" name="Email" required>
     </div></br>
  <div class="py-2 px-4 bg-purple-500 text-white font-semibold rounded-lg">
      <textarea type="text" class="form-control" id="message" placeholder="your message here" name="message" required> </textarea>
   </div></br>
   <button class="py-2 px-4 bg-purple-500 text-white font-semibold rounded-lg shadow-md hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-400 focus:ring-opacity-75"">
  send
</button>
  </form></br>

@endsection