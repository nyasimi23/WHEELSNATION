

@foreach ($cars as $car)

<h1>
    {{$car['make']}}
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