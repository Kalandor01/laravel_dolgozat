
<form action="/api/flights/{{$flight->flight_id}}" method="post">
    {{csrf_field()}}
    {{method_field('PUT')}}
    <input type="date" name="date" placeholder="Date">
    <select name="airline_id" placeholder="Airline">
        @foreach ($airlines as $airline)
            <option value="{{$airline->airline_id}}"
            {{$airline->airline_id == $flight->flight_id ? 'selected': ''}}
            >{{$airline->name}}</option>
        @endforeach
    </select>
    <input type="number" name="limit" placeholder="Limt">
    <input type="submit" value="ok">
</form>