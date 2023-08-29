<h1>Login page</h1>
@if(session('name'))
<h3 style="color:red;">{{session('user')}} user has been added</h3>
@endif
<form action="userrequestcontroller" method="GET">
   <!-- {{method_field('DELETE')}}  to use put and delete method define first like this, and use put or delete as route method -->
    @csrf
 <input type="text" name="name" placeholder="Enter username"><br><br>
 <input type="password" name="password" placeholder="Enter password"><br><br>
    <button type="submit">Login</button>
</form>
