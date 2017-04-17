@extends('layout.app')

@section('content')
    
<table class='table table-hover active' style="width: 70%; margin-left: 10%; margin-top: 50px; ">
 
                <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Password</th>
                </tr>
          
            @foreach($accounts as $account)
            
            <tr >
                    <td>{{$account -> id}}</td>
                    <td>{{$account -> username}}</td>
                    <td>{{$account -> password}}</td>
                </tr>
           
            @endforeach;
        </table>

@endsection('content')
