<x-layout>
    <x-slot:heading>
        Edit Page {{$job->name }}
    </x-slot:heading>
<form method="POST" action="/job/{{$job->id}}">
  @csrf
  @method('PATCH')
  <div class="space-y-12">
    <div class="border-b border-gray-900/10 pb-12">
      <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
        <div class="sm:col-span-4">
          <label for="name" class="block text-sm/6 font-medium text-gray-900">name</label>
          <div class="mt-2">
            <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
              <input type="text" name="name" id="name"  class="block flex-1 border-0 bg-transparent py-1.5 px-3  text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm/6" value="{{$job->name}}">
            </div>
            @error('name')
            <div class=" text-red-500">{{$message}}</div>
            @enderror
          </div>
        </div>

       </div>
      <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
        <div class="sm:col-span-4">
          <label for="salary" class="block text-sm/6 font-medium text-gray-900">salary</label>
          <div class="mt-2">
            <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
              <input type="text" name="salary" id="salary"  class="block flex-1 border-0 bg-transparent py-1.5 px-3  text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm/6" value="{{$job->salary}}">
            </div>
            @error('salary')
            <div class=" text-red-500">{{$message}}</div>
            @enderror
          </div>
        </div>

       

     

      </div>
  <!-- <div class=" m-4" > @if($errors->any()) @endif
        <ul >
          @foreach ( $errors->all() as  $error)
          <li class=" text-red-500">{{$error}}</li>
          @endforeach
        </ul></div> -->
 

    </div>
    
    <div class="mt-6 flex items-center justify-between gap-x-6">
      <x-form-button form="delete-form"  color="red">Delete</x-form-button>
      <x-form-button type="submit"  color="green">Update</x-form-button>

        </div>
  
   
  </div>

 
</form>
<form method="POST" action="/job/{{$job->id}}" id="delete-form" class="hidden">
  @csrf
  @method('DELETE')
  </form>
        
</x-layout>
