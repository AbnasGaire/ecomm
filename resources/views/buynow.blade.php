@extends('master')

@section('content')
<div class="container">
    <table class="table">
    
        <tr>
          <th>Amount</th>
          
          <td>Rs:&nbsp;{{$data}}</td>
  
        </tr>
  
        <tr>
          <th>Tax</th>
          <td>Rs:&nbsp;0</td>
        </tr>
  
        <tr>
            <th>Delivery</th>
            <td>Rs:&nbsp;100</td>
        </tr>
  
        <tr>
            <th>Total</th>
            <td>Rs:&nbsp;{{$data+100}}</td>
        </tr>
      
     
      
    </table>
</div>

@endsection