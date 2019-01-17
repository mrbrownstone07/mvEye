@extends('layouts.adminMaster')

@section('mid_section')
    <div class="">
        <div class="card">
            <div class="card-header bg-white text-center">
                Add New Architecture Project     
            </div>
            <div class="card-body text-center">
                <button onclick="location.href='{{ url('/admin_architecture_projects/create') }}'" type="button" 
                    class="btn btn-outline-primary">add new project</button> 
            </div>
        </div>  
    </div>

    <div class="container container-fluid" style="padding: 10px 0px">
        <div class="row">
            <div class="col-md-12 text-center">
                Architecture Projects
            </div>
        </div>
    </div>
    <div class="container">
        @php
            $count = 1;
        @endphp
        @if (count($projects) == 0)
            <div class="alert alert-primary alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>
                </button>
                <strong>No projects uploaded yet!</strong>
            </div>
        @endif
        <div class="row">
            @foreach ($projects as $project)
                <div class="col-md-4" style="padding:0px">
                    <a class="link-fix" id="arch-pro-link" href="admin_architecture_projects/show/{{$project->id}}">
                        <div class="card rounded-0 border-0 hover-img" style="">
                            <img class="card-img rounded-0 border-0" src="storage/{{$project->projectName}}/bg/{{$project->mainImg}}" 
                                alt="Card image" style="height:400px">
                            <div class="card-img-overlay">
                                <h6 class="card-title"> {{$project->projectName}} </h6>
                                <p class="card-text"> {{$project->tagline}} </p>
                                <small class="card-text"> {{$project->started_at}} </small>
                                <div class="row">
                                    <div class="col-md-12">
                                        @if ($project->state == 0)
                                        <small> on-going </small> 
                                        @else
                                            <small> completed </small> 
                                        @endif  
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                @if ($count ==  3)
                    <br>
                @endif
            @endforeach   
        </div>
    </div>
    <br>
    <br>
    <br>
@endsection