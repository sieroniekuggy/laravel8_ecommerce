<h1>Add Members</h1>

<form action="" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Enter name" id=""> <br><br>
    <input type="text" name="email" placeholder="Enter email" id=""><br><br>
    <input type="text" name="address" placeholder="Enter address" id=""><br><br>
    <button type="submit">Add</button>
</form>
