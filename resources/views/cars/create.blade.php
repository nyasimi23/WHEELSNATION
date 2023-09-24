<form method="POST" action="/cars" enctype="multipart/form-data">

    @csrf
    <div class="mb-6">
      <label for="make" class="">Make</label>
      <input type="text" class="" name="make"
        value="{{old('make')}}" />

      @error('make')
      <p class="text-red-500 text-xs mt-1">{{$message}}</p>
      @enderror
    </div>

    <div class="mb-6">
        <label for="model" class="">Model</label>
        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="model"
          value="{{old('make')}}" />
  
        @error('model')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>

      <div class="mb-6">
        <label for="price" class="">Price</label>
        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="price"
          value="{{old('make')}}" />
  
        @error('price')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>

      <div class="mb-6">
        <label for="year" class="">Year</label>
        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="year"
          value="{{old('make')}}" />
  
        @error('year')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>

      <div class="mb-6">
        <button class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
          Create Post
        </button>

        <a href="/cars" class="text-black ml-4"> Back </a>
      </div>

</form>