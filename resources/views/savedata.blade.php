<h1>Inserting data to database</h1>
<form action="insertdata" method="POST">
    @csrf
    <input type="text" name='aadhar' placeholder="Enter aahar number"><br><br>
    <input type="text" name='date' placeholder="Enter date "><br><br>
    <input type="text" name='desc' placeholder="Enter description"><br><br>
    <input type="text" name='loc' placeholder="Enter loaction"><br><br>
    <button type='submit'>Submit</button>
</form>
