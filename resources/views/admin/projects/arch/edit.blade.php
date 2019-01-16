@extends('layouts.adminMaster')

@section('mid_section')
    <div class="container container-fluid">
        <div class="card shadow-sm">
            <div class="card-header text-center bg-white">
                Edit project information
            </div>
            <div class="card-body text-center">
                <form action="{{ route('archProj.update') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group row">
                        <label for="projName" class="col-md-4 text-md-right">{{ __('project name') }}</label>
                        <div class="col-md-6">
                        <input value="{{$project->projectName}}" class="form-control" type="text" name="projName" id="projName" placeholder="project name">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="tagLine" class="col-md-4 text-md-right">{{ __('tag line') }}</label>
                        <div class="col-md-6">
                            <input value="{{$project->tagline}}" class="form-control" type="text" name="tagLine" id="tagLine" placeholder="tag line">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="des" class="col-md-4 text-md-right">{{ __('description') }}</label>
                        <div class="col-md-6">
                            <textarea value="{{$project->description}}" class="form-control" name="des" id="des" rows="3">{{$project->description}}</textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-4 text-md-right" for="projStart">{{ __('started at') }}</label>
                        <div class="col-md-6">
                        <input  value="{{$project->started_at}}" class="form-control" type="date" name="projStart" id="projStart">
                        </div>
                    </div>

                    {{-- hidden  --}}
                    <input type="hidden" class="form-control" name="type" id="type" value="0">
                    <div class="form-group row">
                        <label for="mainImg" class="col-md-4 text-md-right">{{ __('cover image')}}</label>
                        <div class="col-md-6 text-md-left">
                            <input type="file" name="mainImg" id="mainImg" class="form-control-file space">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-4 text-md-right" for="state">{{ __('state') }}</label>
                        <div class="col-md-3 text-md-left">
                            <input value="{{$project->state}}" type="radio" name="state" id="state" value="0"> ongoing 
                        </div>
                        <div class="col-md-3 text-md-right">
                            <input value="{{$project->state}}" type="radio" name="state" id="state" value="1"> finished 
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-10 text-md-right">
                            <button type="submit" class="btn btn-outline-success">Save changes</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection