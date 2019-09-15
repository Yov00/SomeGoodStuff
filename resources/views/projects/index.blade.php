@extends('layout')

@section('content')

<table class="table table-hover" style="width:100%;">
        <thead>
                <tr>
                    <th>ID</th>
             
           
                      <th>{{$title}}</th>
              
                          
                            <th>Description</th>
                            <th>Created Date</th>
                            <th></th>
                        </tr>
        </thead>
        <tbody>
    @foreach($projects as $project)
     
    <tr>

   
            <td style="width:10%">
                    <a href="/projects/{{$project->id}}">
                    
                    {{$project->id}}
                    </a>
                    </td>
        <td style="width:25%">
                <a href="/projects/{{$project->id}}">
        {{$project->title}}
                </a>
        </td>
        <td style="width:25%">
                <a href="/projects/{{$project->id}}">
            {{$project->description}}
                </a>
    
        </td>
        <td style="width:25%">
                <a href="/projects/{{$project->id}}">
            {{$project->created_at}}
                </a>
    
        </td>
        <td style="width:7.5%">
                <a href="/projects/{{$project->id}}/edit">
               <button  class="btn btn-primary float-right">
                     Edit
              </button>
                </a>
            </td>
        <td style="width:7.5%">
             <form method="POST" action="/projects/{{$project->id}}">
                    @csrf
                    {{ method_field('DELETE')}}
            <button type="submit" class="btn btn-danger float-right">
                  Delete
           </button>
         </form>
         </td>

    </tr>

    @endforeach
        </tbody>
    
</table>
@endsection