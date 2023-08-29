<h1>Delete data from database</h1>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Aadhar number</th>
        <th>Date</th>
        <th>Description</th>
        <th>Location</th>
        <th>Delete</th>
        <th>Edit</th>
    </tr>
    @foreach($data as $d)
    <tr>
        <td>{{$d['id']}}</td>
        <th>{{$d['aadhar']}}</th>
        <th>{{$d['date']}}</th>
        <th>{{$d['descp']}}</th>
        <th>{{$d['loc']}}</th>
        <td><a href={{"deletedata/". $d['id']}}>Delete</a></td>
        <td><a href={{"editdata/". $d['id']}}>Edit</a></td>
    </tr>
    @endforeach
</table>

