@extends('layouts.app')

@section('main')

<div class="row">
    <div class="col-md-12">
        @session('status')
           <div class="alert alert-success">
            {{session('status')}}
            </div> 
        @endsession
       
        <div class="card">
            <div class="card-header">
                <h4>Categories List
                    <a href="{{url("category/create")}}" class="btn btn-primary float-end">Add Category</a>
                </h4>
            </div>
            <div class="card-body">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Status</th>
                            <th colspan="3">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($category as $list)
                        <tr>
                            <td>{{$list->id}}</td>
                            <td>{{$list->name}}</td>
                            <td>{{$list->description}}</td>
                            <td>{{$list->status==1?"visible":"hidden"}}</td>
                            <td><a href="{{route('category.edit',$list->id)}}" class="btn btn-success"> Edit</a></td>
                            <td><a href="{{route('category.show',$list->id)}}" class="btn btn-info">Show</a></td>
                            <td>
                                <form action="{{route('category.destroy',$list->id)}}" method="POST">

                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>

                                </form>
                               
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
    
@endsection