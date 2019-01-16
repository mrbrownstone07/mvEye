<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;


class ProjectsController extends Controller
{   
    //Arch projects controllers
    public function archProject(){
        return view('projects.arch');
    }

    //admin part for arch projects
    public function adminAllArchProjects(){
        $projects = Project::all();
        return view('admin.projects.arch.index')->with('projects', $projects);
    }


    public function createArchProject(){
        return view('admin.projects.arch.create');
    }

    public function archProjectStore(Request $request){
        $this->validate($request,[
            'mainImg' => 'image|mimes:jpeg,png,jpg,gif,svg|max:8000',
            'projName' => 'required',
            'tagLine' => 'required',
            'des' => 'required',
            'type' => 'required',
            'state' => 'required',
            'projStart' => 'required',
        ]);

        $p = new Project;
        $p->projectName = $request->input('projName');
        $p->tagline = $request->input('tagLine');
        $p->description = $request->input('des');
        $p->type = $request->input('type');
        $p->state = $request->input('state');
        $p->started_at = $request->input('projStart');

        if($request->hasFile('mainImg')){
            $img = $request->file('mainImg');
            $fileName = $img->getClientOriginalName();
            $fileName = md5($fileName . $request->input('projName')) . '.' . $request->mainImg->extension();
            $folderName = "public/" . $request->input('projName');
            Storage::makeDirectory($folderName);
            $request->mainImg->storeAs($folderName, $fileName);
            $p->mainImg = $fileName;
        }
        
        $p->save();

        return redirect('/admin_architecture_projects/create')->with('success', 'project added');  
    }

    public function adminShowArchProjects($id){
        $project = Project::find($id);
        // dd($project);
        return view('admin.projects.arch.show')->with('project', $project);
    }

    public function admineEditArchProjects($id){
        $project = Project::find($id);

        return view('admin.projects.arch.edit')->with('project', $project);
    }

    public function archProjectUpdate(Request $request){
        

    }



    // Interior projects controllers
    public function interiorProject(){
        return view('projects.interior');
    }
    

    //admin part for interior
    public function adminAllInteriorProjects(){
        return view('admin.projects.interior.index');
    }


    public function createInteriorProject(){
        return view('admin.projects.interior.create');
    }


}
