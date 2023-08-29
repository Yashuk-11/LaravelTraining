<h1>Fetching Customer details from database</h1>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Aadhar number</th>
        <th>Date</th>
        <th>Description</th>
        <th>Location</th>
    </tr>
    @foreach($data as $d)
    <tr>
        <td>{{$d['id']}}</td>
        <th>{{$d['aadhar']}}</th>
        <th>{{$d['date']}}</th>
        <th>{{$d['descp']}}</th>
        <th>{{$d['loc']}}</th>
    </tr>
    @endforeach
</table>
