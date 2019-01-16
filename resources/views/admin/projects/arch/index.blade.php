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
        <div class="row">
            @foreach ($projects as $project)
                <div class="col-md-4" style="padding:0px">
                    <a class="link-fix" id="arch-pro-link" href="admin_architecture_projects/show/{{$project->id}}">
                        <div class="card rounded-0 border-1" style="">
                            {{-- <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        {{$project->projectName}}
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        {{$project->tagline}}
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                    {{$project->started_at}} 
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        @if ($project->state == 0)
                                            on-going
                                        @else
                                            completed
                                        @endif  
                                    </div>
                                </div>
                            </div> --}}
                        <img class="card-img" src="storage/{{$project->projectName}}/{{$project->mainImg}}" 
                            alt="Card image" style="height:300px">
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

@endsection