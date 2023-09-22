@foreach ($carEvents as $carEvent)

<h1>
    {{$carEvent['event_name']}}
</h1>

<p>
    {{$carEvent['event_date']}}
</p>

<p>
    {{$carEvent['event_time']}}
</p>

<p>
    {{$carEvent['venue']}}
</p>

<p>
    {{$carEvent['ticket_price']}}
</p>
    
@endforeach