<h1>Edit page</h1>
<form action="/editdata" method="POST">
    @csrf
    <input type="hidden" name='id' value={{$data['id']}}>
    <input type="text" name='aadhar' value={{$data['aadhar']}}><br><br>
    <input type="text" name='date' value={{$data['date']}}><br><br>
    <input type="text" name='desc' value={{$data['descp']}}><br><br>
    <input type="text" name='loc' value={{$data['loc']}}><br><br>
    <button type='submit'>Update</button>
</form>
