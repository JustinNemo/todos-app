@extends('layouts.app')

@section('title')
Edit todo
@endsection

@section('content')

<h1 class="text-center my-5">{{$todo->name}}</h1>
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card card-default">
            <div class="card-header">
                <div class="card-body">
                    @if($errors->any())
                        <div class="alert alert-danger">
                            <ul class="list-group">
                            @foreach($errors->all() as $error)
                                <li class="list-group-item">
                                {{ $error }}
                                </li>
                            @endforeach
                            </ul>
                        </div>
                        @endif
                    <form action="/todos/{{$todo->id}}/update-todos" method="POST">
                    {{ csrf_field() }}

                        <div class="form-group">
                            <input type="text" value="{{$todo->name}}" class="form-control" name='name' placeholder="title">
                        </div>
                        <div class="form-group">
                            <textarea name="description" placeholder="Description" cols="30" rows="10" class="form-control">{{$todo->description}}</textarea>
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-success btn-block">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection