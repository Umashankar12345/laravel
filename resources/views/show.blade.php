<h1>ORM Eloquent Read</h1>

<table border = "1" >
    <tr>
        <th>Name </th>
        <th> Email </th>
        <th> Age </th>
</tr>

@foreach($data as $student)
    <tr>
        <td>{{ $student->name }}</td>
        <td>{{ $student->email }}</td>
        <td>{{ $student->age }}</td>
    </tr>
@endforeach
</table>