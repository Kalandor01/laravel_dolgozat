
@foreach ($flights as $flight)
    <form action="/api/flights/{{$flight->flight_id}}" method="post">
        {{csrf_field()}}
        {{method_field('GET')}}
        <div class="form-group">
            <input type="submit" value="{{$flight->date}}">
        </div>
    </form>
@endforeach