<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <script src="{{ asset('js/app.js') }}" defer></script>
 <link href="{{ mix('css/app.css') }}" rel="stylesheet">
 <title>welcome</title>
</head>
<body>
 <div class="bg-social-media w-screen h-screen bg-repeat bg-cove flex justify-center items-center">
  <div class="">
   <button class="bg-first rounded-xl m-2 py-2 px-5">
    <a href="/login" class="text-white text-2xl">Login</a>
   </button>
   <button class="bg-first rounded-xl m-2 py-2 px-5">
    <a href="/register" class="text-white text-2xl">Register</a>
   </button>
  </div>
 </div>
</body>
</html>