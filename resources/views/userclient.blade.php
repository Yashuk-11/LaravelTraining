<h1>user api list</h1>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Employee name</th>
        <th>Employee salary</th>
        <th>Employee age</th>
    </tr>
    @foreach($collection as $item)
    <tr>
        <th>{{$item['id']}}</th>
        <th>{{$item['employee_name']}}</th>
        <th>{{$item['employee_salary']}}</th>
        <th>{{$item['employee_age']}}</th>
    </tr>
    @endforeach
</table>
