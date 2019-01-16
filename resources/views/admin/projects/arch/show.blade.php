@extends('layouts.adminMaster')

@section('mid_section')
    <div class="container">
        <div class="row" style="padding-bottom:20px">
            <div class="col-md-8 text-md-left">
                <h4> {{$project->projectName}} </h4>
            </div>
            <div class="col-md-2 text-md-right">
                <a href="{{ URL::route('archProj.edit', $project->id) }}" class="btn btn-default"> Edit </a>
                {{-- <button action="{{ route('archProj.edit', $project->id) }}" type="button" class="btn btn-outline-primary">Edit</button> --}}
            </div>
            <div class="col-md-2 text-md-right">
                <button type="button" class="btn btn-outline-danger">Remove</button>
            </div>
        </div>
        <div class="card rounded-0 border-1" style="">
            <img class="card-img" src="/storage/{{$project->projectName}}/{{$project->mainImg}}" 
                alt="Card image" style="height:300px">
        </div>
        <div class="row cotainer" style="margin-top:20px">
            <div class=" col-md-12">
                <div class="card bottom-wrap">
                    <div class="card-header bg-white">
                        <b> tagline: </b>
                    </div>
                    <div class="card-body">
                        {{$project->tagline}}
                    </div>
                </div> 
            </div>
            <div class=" col-md-12">
                <div class="card bottom-wrap">
                    <div class="card-header bg-white">
                        <b> project started at: </b> 
                    </div>
                    <div class="card-body">
                        {{$project->started_at}}
                    </div>
                </div>
            </div>
            <div class=" col-md-12">
                <div class="card bottom-wrap">
                    <div class="card-header bg-white">
                        <b>  project uploaded: </b> 
                    </div>
                    <div class="card-body">
                        {{$project->created_at->diffForHumans()}} 
                    </div>
                </div>
            </div>
            <div class=" col-md-12">
                <div class="card bottom-wrap">
                    <div class="card-header bg-white">
                        <b> project state: </b> 
                    </div>
                    <div class="card-body">
                        @if ($project->state == 0)
                            on-going 
                        @else
                            completed 
                        @endif  
                    </div>
                </div>
            </div>
            <div class=" col-md-12">
                <div class="card bottom-wrap">
                    <div class="card-header bg-white">
                        <b> project description: </b> 
                    </div>
                    <div class="card-body">
                        {{$project->description}}  
                    </div>
                </div>
            </div>

            <br>
            <br>
            <br>
            <br>
        </div>
    </div>
@endsection