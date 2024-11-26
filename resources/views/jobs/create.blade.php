<x-layout>
    <x-slot:heading>
         Page
    </x-slot:heading>
     <!--
  This example requires some changes to your config:
  
  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/forms'),
    ],
  }
  ```
-->
<form method="POST" action="/jobs">
  @csrf
  <div class="space-y-12">
    <div class="border-b border-gray-900/10 pb-12">
      <h2 class="text-base/7 font-semibold text-gray-900">Create A neW joB</h2>
    <x-form-filed>
          <x-form-lable for="name">Name</x-form-lable>
          <div class="mt-2">
            <x-form-input type="text" name="name" id="name" value="name"  ></x-form-input>
            <x-form-error props="name"></x-form-error>
            </x-form-filed>

       </div>
       <x-form-filed>
        <x-form-lable for="salary">Salary</x-form-lable>
        <div class="mt-2">
        <x-form-input type="text" name="salary" id="salary" value="salary"  ></x-form-input>
          <x-form-error props="salary"></x-form-error>
         </x-form-filed>


       

     

      </div>
  <!-- <div class=" m-4" > @if($errors->any()) @endif
        <ul >
          @foreach ( $errors->all() as  $error)
          <li class=" text-red-500">{{$error}}</li>
          @endforeach
        </ul></div> -->
 

    </div>

    <div class="mt-6 flex items-center justify-between gap-x-6">
      <x-form-button type="buttom" color="red">Cancle</x-form-button>
      <x-form-button type="submit">Save</x-form-button>
        </div>
   
  </div>

 
</form>

        
</x-layout>
