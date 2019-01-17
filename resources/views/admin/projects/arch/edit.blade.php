@extends('layouts.adminMaster')

@section('mid_section')
    <div class="container container-fluid">
        <div class="card shadow-sm">
            <div class="card-header text-center bg-white">
                Edit project information
            </div>
            <div class="card-body text-center">
                <form action="{{ route('archProj.update', $project->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group row">
                        <label for="projectName" class="col-md-4 text-md-right">{{ __('project name') }}</label>
                        <div class="col-md-6">
                        <input value="{{$project->projectName}}" class="form-control" type="text" name="projectName" id="projectName" placeholder="project name">
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
                            <input type="radio" name="state" id="state" value="0"> ongoing 
                        </div>
                        <div class="col-md-3 text-md-right">
                            <input type="radio" name="state" id="state" value="1"> finished 
                        </div>
                    </div>
                    {{-- location --}}
                    <div class="form-group row">
                        <label for="country" class="col-md-4 text-md-right">{{ __('country') }}</label>
                        <div class="col-md-6">
                        <input value="{{$project->locations->country}}" class="form-control" type="text" name="country" id="country" placeholder="country">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="zipCode" class="col-md-4 text-md-right">{{ __('zip code') }}</label>
                        <div class="col-md-6">
                            <input value="{{$project->locations->zipcode}}" class="form-control" type="text" name="zipCode" id="zipCode" placeholder="zip code">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="city" class="col-md-4 text-md-right">{{ __('city') }}</label>
                        <div class="col-md-6">
                            <input value="{{$project->locations->city}}" class="form-control" type="text" name="city" id="city" placeholder="city">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="area" class="col-md-4 text-md-right">{{ __('area') }}</label>
                        <div class="col-md-6">
                            <input value="{{$project->locations->area}}" class="form-control" type="text" name="area" id="area" placeholder="area">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="road" class="col-md-4 text-md-right">{{ __('road') }}</label>
                        <div class="col-md-6">
                            <input value="{{$project->locations->road}}" class="form-control" type="text" name="road" id="road" placeholder="road">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="section" class="col-md-4 text-md-right">{{ __('section') }}</label>
                        <div class="col-md-6">
                            <input value="{{$project->locations->section}}" class="form-control" type="text" name="section" id="section" placeholder="section">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="sector" class="col-md-4 text-md-right">{{ __('sector') }}</label>
                        <div class="col-md-6">
                            <input value="{{$project->locations->sector}}" class="form-control" type="text" name="sector" id="sector" placeholder="sector">
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