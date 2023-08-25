<h1>Login page</h1>
{{$errors}}
@if($errors->any())
    @foreach($errors->all() as $er)
    <li>{{$er}}</li>
    @endforeach
@endif
<form action="loginpage" method="POST">
    @csrf
    <input type="text" name="username" placeholder="Enter usesrname"/><br>
    <span style="color:red;">@error('username'){{$message}}@enderror</span><br>
    <input type="password" name="password" placeholder="Enter password"/><br>
    <span style="color:red;">@error('password'){{$message}}@enderror</span><br>
    <button type="submit">Login</button>
</form>
