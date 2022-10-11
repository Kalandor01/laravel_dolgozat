
<form action="/api/airlines/{{$airline->airline_id}}" method="post">
    {{csrf_field()}}
    {{method_field('PUT')}}
    <input type="text" name="name" placeholder="Name">
    <input type="text" name="country" placeholder="Country">
    <input type="submit" value="ok">
</form>