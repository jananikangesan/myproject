@extends("layouts.app")

@section('main')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>Edit Categories
                    <a href="{{url('category')}}" class="btn btn-danger float-end">Back</a>
                </h4>
            </div>
            <div class="card-body">
                <form action="{{route("category.update",$category->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control" value="{{$category->name}}"/>
                        @error('name')
                           <span class="text-danger"> {{$message}}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="description">Description</label>
                        <textarea name="description" rows="3" class="form-control" >{!! $category->description !!}</textarea>
                        @error('description')
                           <span class="text-danger"> {{$message}}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="status">Status</label>
                        <br/>
                       <input type="checkbox" name="status" style="width: 30px; height:30px;" {{$category->status==1?"checked":""}}
                       />checked=visible, unchecked=hidden
                       @error('status')
                           <span class="text-danger"> {{$message}}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

