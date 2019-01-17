@extends('layouts.adminMaster')

@section('mid_section')
    <div class="container">
        <div class="row" style="padding-bottom:20px">
            <div class="col-md-6 text-md-left">
                <h4> {{$project->projectName}} </h4>
            </div>
            <div class="col-md-2 text-md-right">
                <a href="{{ URL::route('archProj.edit', $project->id) }}" class="btn btn-outline-secondary"> Edit </a>
            </div>
            <div class="col-md-2 text-md-center">
                <a href="{{ URL::route('archProj.edit', $project->id) }}" class="btn btn-outline-info"  
                data-toggle="modal" data-target="#addImageModal">
                     Add Image 
                </a>
            </div>
            <div class="col-md-2 text-md-right">
                <button type="button" class="btn btn-outline-danger"  data-toggle="modal" data-target="#deleteModal"
                >Remove</button>
            </div>
        </div>
        <div class="card rounded-0 border-1" style="">
            <img class="card-img" src="/storage/{{$project->projectName}}/bg/{{$project->mainImg}}" 
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
            <div class=" col-md-12">
                <div class="card bottom-wrap">
                    <div class="card-header bg-white">
                        <b> project location: </b> 
                    </div>
                    <div class="card-body">
                        <div class="col-sm-12"> <b>country:</b> {{$project->locations->country}} </div>
                        <div class="col-sm-12"> <b>zipcode:</b>  {{$project->locations->zipcode}} </div>
                        <div class="col-sm-12"> <b>area:</b> {{$project->locations->area}} </div>
                        <div class="col-sm-12"> <b>city:</b> {{$project->locations->city}} </div>
                        <div class="col-sm-12"> <b>road:</b> {{$project->locations->road}} </div>
                        <div class="col-sm-12"> <b>section:</b> {{$project->locations->section}} </div>
                        <div class="col-sm-12"> <b>sector:</b> {{$project->locations->sector}} </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <br>
    <br>

    <div class="container">
        <div class="row">
            @foreach ($project->images as $i)
                <div class="col-md-4" style="padding:0px">
                    <div class="card rounded-0 border-0 hover-img">
                        <img class="card-img rounded-0 " src="/storage/{{$project->projectName}}/{{$i->fileName}}" 
                            alt="Card image" style="height:400px">
                    </div>
                    {{-- <div class="hover-img">
                        <img src="/storage/{{$project->projectName}}/{{$i->fileName}}" 
                            alt="" style="">
                    </div> --}}
                </div>
            @endforeach
        </div>
    </div>

    <br>
    <br>

@endsection

<div class="modal fade" id="addImageModal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h6 class="modal-title"> <b> Add secondary images to this project </b> </h6>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            
            <!-- Modal body -->
            <div class="modal-body">
                <form action="{{ route('archProj.storeImg', $project->id) }}"  method="post"  enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <label for="image[]" class="col-md-4 text-md-right">{{ __('secondary images')}}</label>
                        <div class="col-md-6 text-md-left">
                            <input type="file" name="image[]" id="image[]" class="form-control-file space" multiple>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-outline-success"> upload </button>
                </form>
            </div>
            
            <!-- Modal footer -->
        </div>
    </div>
</div>
