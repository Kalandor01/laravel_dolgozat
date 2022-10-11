
<form action="/api/flights" method="post">
    {{csrf_field()}}
    <input type="date" name="date" placeholder="Date">
    <select name="airline_id" placeholder="Airline">
        @foreach ($airlines as $airline)
            <option value="{{$airline->airline_id}}">{{$airline->name}}: {{$airline->country}}</option>
        @endforeach
    </select>
    <input type="number" name="limit" placeholder="Limit">
    <input type="submit" value="ok">
</form>