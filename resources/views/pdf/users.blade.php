<!DOCTYPE html>
<html>
<head>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
</head>
<body>

<h1 align='center'>User's Details</h1>

<table id="customers">
  <tr>
    <th>User_id</th>
    <th>Name</th>
    <th>Email_id</th>
    <th>City</th>
    <th>Mobile</th>
   </tr>
   @if(count($data))
   @foreach($data as $user)
  <tr>
    <td>{{$user->id}}</td>
    <td>{{$user->name}}</td>
    <td>{{$user->email}}</td>
    <td>{{$user->city}}</td>
    <td>{{$user->mobile}}</td>
  </tr>
  @endforeach
  @else
  <h2>No Record Found</h2>
  @endif
</table>

</body>
</html>
