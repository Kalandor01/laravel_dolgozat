
@foreach ($airlines as $airline)
    <form action="/api/airlines/{{$airline->airline_id}}" method="post">
        {{csrf_field()}}
        {{method_field('GET')}}
        <div class="form-group">
            <input type="submit" value="{{$airline->name}}: {{$airline->country}}">
        </div>
    </form>
@endforeach