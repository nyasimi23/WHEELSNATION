<form method="POST" action="/users">
    @csrf
    <div class="mb-6">
      <label for="name" class=""> Name </label>
      <input type="text" class="" name="name" value="{{old('name')}}" />

      @error('name')
      <p class="">{{$message}}</p>
      @enderror
    </div>

    <div class="mb-6">
      <label for="email" class="">Email</label>
      <input type="email" class="" name="email" value="{{old('email')}}" />

      @error('email')
      <p class="text-red-500 text-xs mt-1">{{$message}}</p>
      @enderror
    </div>

    <div class="mb-6">
      <label for="password" class="inline-block text-lg mb-2">
        Password
      </label>
      <input type="password" class="border border-gray-200 rounded p-2 w-full" name="password"
        value="{{old('password')}}" />

      @error('password')
      <p class="text-red-500 text-xs mt-1">{{$message}}</p>
      @enderror
    </div>

    <div class="mb-6">
      <label for="password2" class="inline-block text-lg mb-2">
        Confirm Password
      </label>
      <input type="password" class="" name="password_confirmation"
        value="{{old('password_confirmation')}}" />

      @error('password_confirmation')
      <p class="text-red-500 text-xs mt-1">{{$message}}</p>
      @enderror
    </div>

    <div class="mb-6">
      <button type="submit" class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
        Sign Up
      </button>
    </div>

    <div>
      <button>
        <a href="/">BACK</a>
      </button>
    </div>

    <div class="mt-8">
      <p>
        Already have an account?
        <a href="/login" class="text-laravel">Login</a>
      </p>
    </div>
  </form>