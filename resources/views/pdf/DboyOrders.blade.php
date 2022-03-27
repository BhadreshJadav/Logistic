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

<h1 align='center'>Delivery boy order details Details</h1>

<table id="customers">
  <tr>
    <th>User ID</th>
    <th>User Name</th>
    <th>User CIty</th>
    <th>User Area</th>
    <th>Mobile</th>
    <th>Order Status</th>
    <th>AWB Number</th>
   </tr>
   @if(count($data))
   @foreach($data as $order)
  <tr>
    <td>{{ @$order->user->id }}</td>
    <td>{{ @$order->user->name }}</td>
    <td>{{ @$order->user->name }}</td>
    <td>{{ @$order->user->area  }}</td>
    <td>{{ @$order->user->mobile }}</td>
    <td>{{ $order->status }}</td>
    <td>{{ $order->awb_no }}</td>
  </tr>
  @endforeach
  @else
  <h2>No Record Found</h2>
  @endif
</table>

</body>
</html>
