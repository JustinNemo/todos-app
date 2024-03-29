@extends('layouts.app')

@section('title')
Todo Item: {{$todo->name}}
@endsection
@section('content')

        <h1 class="text-center my-5">{{$todo->name}}</h1>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default">
                    <div class="card-header">
                         Todo Description  
                    </div>
                        <div class="card-body">
                            {{$todo->description}}
                         </div>
                </div> 
                    <a href="/todos/{{$todo->id}}/edit" class="btn btn-info btn-block">Edit</a>
            </div>
        </div>
    

@endsection