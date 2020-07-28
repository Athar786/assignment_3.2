@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
 <div class="row">
     <a class="btn btn-success" href="{{ route('insert.create') }}"> Add New Data</a>
    <div class="col-sm-12">
    <table class="table">
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Moblie No</th>
          <th>Address</th>
          <th colspan ="2">Action</th>
          
        </tr>
        @foreach($select as $row)   
          <tr class = "text-center">
            <td>{{ $row->id }}</td>
            <td>{{ $row->name }}</td>
            <td>{{ $row->mobile }}</td>
            <td>{{ $row->address }}</td>
            <td><a href="{{route('insert.destroy',$row->id)}}" class="btn btn-danger">Delete</a></td>
            
           </tr>
            @endforeach
       </table>

            </div>
        </div>
    </div>
</div>
@endsection
