@extends('layout')
<?php $i = 1; $count = 0; $truthy = false;?>
@section('content')
<h3 style="margin-top:40px;">{{$project->title}}</h3>
<p>{{$project->description}}</p>
<?php
    
       foreach($project->tasks as $task)
       {
           if($task->completed)
           {
               $count++;
              
             
           }
           
        }
     
   
?>
             '<div class="complated"><img src="{{$count == count($project->tasks) ? 'https://pngimage.net/wp-content/uploads/2018/05/completed-png-2.png':'http://st2.depositphotos.com/3205183/7727/v/450/depositphotos_77278456-stock-illustration-not-completed-red-grunge-rubber.jpg'}}" alt=""></div>




@if($project->tasks->count())
<div style="font-size:25px;">Tasks:</div>
    @foreach($project->tasks as $task)
   
       <div style="padding:5px 0;"> 

        <form action="/tasks/{{$task->id}}" method="POST">
            @csrf
            @method('PATCH')
      
        <div class="box">
        <label for="{{$task->id}}">
        <input onChange="this.form.submit()" type="checkbox" name="completed" id="{{$task->id}}" class="completed" style="padding:5px;" {{$task->completed ? 'checked':''}}>
        {!!$task->completed ? '<strike>':''!!}
           {{$i++.'. '.$task->description}}
           {!!$task->completed ? '</strike>':''!!}
         </label>
        </div>
    </form>
    </div>
   
    @endforeach
@endif

<div class="row" style="margin-top:50px;">
<div class="col-md-3">
 <a href="/projects"><button class="btn btn-secondary">Back<<< </button></a>   
</div>
 <div class="col-md-3">
     <a href="/projects/{{$project->id}}/edit"><button class="btn btn-primary">Edit</button></a>
 </div>
</div>

<form action="/projects/{{$project->id}}/tasks" method="POST" style="margin-top:50px;">
    @csrf
    <div class="row"> 
        <div class="col-md-6" style="padding:0">
                <label for="description" style="font-weight:bold;">New Task</label>
        </div>
    </div>
    <div class="row">
  <div class="col-md-4" style="padding:0;">


    <input type="text" class="form-control input-sm " name="description" id="description" placeholder="New task...">
</div>
<div class="col-md-2" style="padding:0 0 0 5px;box-sizing:border-box;">
    <button class="btn btn-dark" type="submit">Create </button>
</div>
</div>
</form>
@endsection