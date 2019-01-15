@extends('layouts.adminMaster')

@section('left_section')
    <div class="card bg-dark text-white">
        <div class="card-header text-center">
            Admin Panel
        </div>
        <div class="card-body text-center">
            <div class="col-md-12">
                <div class="btn-group">
                    <button type="button" class="btn btn-dark dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Projects
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Interior</a>
                        <a class="dropdown-item" href="#">Exterior</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection