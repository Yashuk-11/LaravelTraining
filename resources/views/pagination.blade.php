<h1>Pagination concept</h1>
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
        <td>{{$d['cid']}}</td>
        <th>{{$d['aadhar']}}</th>
        <th>{{$d['date']}}</th>
        <th>{{$d['descp']}}</th>
        <th>{{$d['loc']}}</th>
    </tr>
    @endforeach
</table>
<span >
    {{$data->links()}}
</span>
<style>
    .w-S{
        display: none;
    }
</style>
