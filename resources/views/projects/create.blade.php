@extends('layout')

@section('content')
<form method="POST" action="/projects">
    @csrf
    <div class="row">
            <div class="col-md-6">
                    <label class="label" for="title">Title</label>
                </div>
    </div>
    <div class="row" >
     
      <div class="col-md-6">
      <input type="text" name="title" required placeholder="title..." class="form-control input-sm"  style=" {{$errors->has('title') ? 'border:2px solid tomato': ''}}"  value="{{old('title')}}"/>
    </div>

</div>


<div class="row" style="margin-top:20px">
        <div class="col-md-6">
                <label class="label" for="description">Description</label>
            </div>
</div>
    <div class="row" >
    <div class="col-md-6">
    <textarea name="description" required class="form-control " style="resize-none; {{$errors->has('description') ? 'border:2px solid tomato': ''}}" placeholder="description" >{{old('description')}}</textarea>
    </div>
        </div>



    
        <div class="row" style="margin-top:20px;">
        <div class="col-md-6">
        <button type="submit" class="btn btn-primary float-right">
            Create Project
        </button>
    </div>
        </div>

        @if($errors->any())
        <div class="content" style="padding:20px 0">

@foreach($errors->all() as $error)

<div class="alert alert-danger" role="alert">
    {{$error}}
</div>
@endforeach
        
        </div>
        @endif
</form>
@endsection