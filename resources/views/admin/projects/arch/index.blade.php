@extends('layouts.adminMaster')

@section('mid_section')
    <div class="container container-fluid">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1> Architecture Projects </h1> 
                
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                <button onclick="location.href='{{ url('/admin_architecture_projects/create') }}'" type="button" class="btn btn-outline-primary">add new project</button>
            </div>
        </div>
        
    </div>
@endsection