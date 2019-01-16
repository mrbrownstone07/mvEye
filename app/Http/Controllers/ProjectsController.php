<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

class ProjectsController extends Controller
{
    public function archProject(){
        return view('projects.arch');
    }

    public function interiorProject(){
        return view('projects.interior');
    }
    
    public function adminShowArchProjects(){
        return view('admin.projects.arch.index');
    }

    public function adminShowInteriorProjects(){
        return view('admin.projects.interior.index');
    }

    public function createArchProject(){
        return view('admin.projects.arch.create');
    }

    public function createInteriorProject(){
        return view('admin.projects.interior.create');
    }

    public function archProjectStore(Request $request){
        // $this->validate($request,[

        // ]);

        $p = new Project;
        $p->projectName = $request->input('projName');
        $p->tagline = $request->input('tagLine');
        $p->description = $request->input('des');
        $p->type = $request->input('type');
        $p->state = $request->input('state');
        $p->started_at = $request->input('projStart');

        $p->save();

        return redirect('/admin_architecture_projects/create')->with('success', 'project added');
    }
}
