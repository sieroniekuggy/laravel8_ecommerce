<h1>Update Member Details</h1>

<form action="/edit" method="POST">
    @csrf
    <input type="hidden" name="id" value="{{$data['id']}}">
    <input type="text" name="name" value="{{$data['name']}}" id=""> <br><br>
    <input type="text" name="email" value="{{$data['email']}}" id=""><br><br>
    <input type="text" name="address" value="{{$data['address']}}" id=""><br><br>
    <button type="submit">Update</button>
</form>
