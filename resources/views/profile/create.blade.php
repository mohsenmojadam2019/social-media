<div>
 <div class="inset-center z-20 rounded-xl bg-white">
  <form action="{{route('profile.create')}}">
    @csrf
    <input type="number" name="age" placeholder="age" required class="text-xl text-first m-1 w-full text-xl p-2 rounded-xl border-2 border-gray-300">
    <input type="number" name="gender" placeholder="gender" required class="text-xl text-first m-1 w-full text-xl p-2 rounded-xl border-2 border-gray-300">
    <input type="file" name="photo" class="text-xl" />
    <input type="submit" value="submit" class="py-2 px-4 m-2 text-white bg-first text-2xl rounded-2xl"/>
  </form>
 </div>
 <div v-if="popup" class="absolute -inset-full opacity-50 bg-black z-10"></div>
</div>