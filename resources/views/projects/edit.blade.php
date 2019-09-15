@extends('layout')

@section('content')
<form method="POST" action="/projects/{{$project->id}}">
    @csrf
    {{ method_field('PATCH')}}
    <div class="row">
            <div class="col-md-6">
                    <label class="label" for="title">Title</label>
                </div>
    </div>
    <div class="row" >
     
      <div class="col-md-6">
      <input type="text" name="title" placeholder="title..." class="form-control input-sm" value="{{$project->title}}"/>
    </div>

</div>


<div class="row" style="margin-top:20px">
        <div class="col-md-6">
                <label class="label" for="description">Description</label>
            </div>
</div>
    <div class="row" >
    <div class="col-md-6">
        <textarea name="description" class="form-control input-sm" style="resize-none" placeholder="description" >{{$project->description}} </textarea>
    </div>
        </div>



    
        <div class="row" style="margin-top:20px;">
        <div class="col-md-3">
        <button type="submit" class="btn btn-primary ">
            Update Project
        </button>
    </div>
    </form>
    <div class="col-md-3">
        <form method="POST" action="/projects/{{$project->id}}">
                {{ method_field('DELETE')}}
        <button type="submit" class="btn btn-danger float-right">
              Delete
       </button>
     </form>
   
        </div>
    </div>



@endsection