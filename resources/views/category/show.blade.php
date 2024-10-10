@extends("layouts.app")

@section('main')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>Show Categories details
                  
                </h4>
            </div>
            <div class="card-body">
                
                    <div class="mb-3">
                        <label for="name">Name</label>
                        <p>{{$category->name}}</p>
                        
                    </div>
                    <div class="mb-3">
                        <label for="description">Description</label>
                        <p>{!! $category->description !!}</p>
                       
                    </div>
                    <div class="mb-3">
                        <label for="status">Status</label>
                        <p>{{$category->status==1?"checked":""}}</p>
                       
                    </div>
                    
            </div>
        </div>
    </div>
</div>
@endsection

