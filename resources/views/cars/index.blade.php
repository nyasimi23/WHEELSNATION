
<div>
    <button>
        <a href="/cars/create">Create Post</a>
    </button>
</div>

<form class="inline" method="POST" action="/logout">
    @csrf
    <button type="submit">
      <i class="fa-solid fa-door-closed"></i> Logout
    </button>
  </form>


<form action="/cars">
    <div>
        <input type="text" name="search" class=""
        placeholder="Search Car..." />
    </div>
    <div class="absolute top-2 right-2">
        <button type="submit" class="">
          Search
        </button>
    </div>

</form>

<div>
    <a href="/cars">Home</a>
</div>


@foreach ($cars as $car)

<h1>
    <a href="/cars/{{$car->id}}">{{$car['make']}}</a>
</h1>

<h2>
    {{$car['model']}}
</h2>

<p>
    {{$car['year']}}
</p>

<p>
    {{$car['price']}}
</p>
    
@endforeach

