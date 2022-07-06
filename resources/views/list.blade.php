<h1>Members List</h1>

<table border="1">
    <tr>
        <td>ID</td>
        <td>Name</td>
        <td>Email</td>
        <td>Address</td>
        <td>Operation</td>
    </tr>

@foreach ($members as $member)
<tr>
    <td>{{$member['id']}}</td>
    <td>{{$member['name']}}</td>
    <td>{{$member['email']}}</td>
    <td>{{$member['address']}}</td>
    <td><a href="{{$member['id']}}">Delete</a></td>
</tr>
@endforeach
</table>