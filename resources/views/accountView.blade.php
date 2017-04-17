@extends('layouts.app')

@section('content-left')
<div class="row">
<div class="col-sm-3 col-md-2 col-xs-2 sidebar">
        <ul class="nav nav-pills nav-stacked" >
        <li class="active"><a href="{{ url('/test')}}">Home</a></li>
        <li ><a href="#">Home</a></li>
        <li ><a href="#">Home</a></li>
        <li ><a href="#">Home</a></li>
    </ul>
            </div>
  
@endsection
@section('content-right')

<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 col-xs-10 col-xs-offset-1 main">
<div class="table-responsive" style="min-height: 400px; max-width: 90%; ">
    <table class='table table-hover table-bordered'>
            <tr class="success">
                    <th>ID</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th ></th>        
                </tr>
          
            @foreach($accounts as $account)
            
            <tr >
                    <td>{{$account -> id}}</td>
                    <td>{{$account -> username}}</td>
                    <td>{{$account -> password}}</td>
                    <td><a  href="{{ url('/table/edit{id}') }}"><img src=""><input  type="submit" value="Edit" class="btn btn-success" /></a> 
                        <a href="{{url('/table/delete') }}"><input type="submit" value="Del" class="btn btn-danger" /></a>
                    </td>
                    
                </tr>
           
            @endforeach
            
        </table>
</div>
        
<div >{{ $accounts->links()}}</div>
</div>
  </div>
  @endsection('content')