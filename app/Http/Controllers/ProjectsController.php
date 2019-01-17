<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use App\Image;
use App\Location;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\Services\PayUService\Exception;


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
            'projectName' => 'required|unique:projects',
            'tagLine' => 'required',
            'des' => 'required',
            'type' => 'required',
            'state' => 'required',
            'projStart' => 'required',
        ]);

        $p = new Project;
        $p->projectName = $request->input('projectName');
        $p->tagline = $request->input('tagLine');
        $p->description = $request->input('des');
        $p->type = $request->input('type');
        $p->state = $request->input('state');
        $p->started_at = $request->input('projStart');

        if($request->hasFile('mainImg')){
            $img = $request->file('mainImg');
            $fileName = $img->getClientOriginalName();
            $fileName = md5($fileName) . '.' . $request->mainImg->extension();
            $folderName = "public/" . $request->input('projectName') . '/bg';
            Storage::makeDirectory($folderName);
            $request->mainImg->storeAs($folderName, $fileName);
            $p->mainImg = $fileName;
        }

        $p->save();
        $projectName = $request->input('projectName');
        $proj = Project::where('projectName', '=', $projectName)->first();

        $l = new Location;
        $l->country = $request->input('country');
        $l->zipcode = $request->input('zipCode');
        $l->city = $request->input('city');
        $l->area = $request->input('area');
        $l->road = $request->input('road');
        $l->section = $request->input('section');
        $l->sector = $request->input('sector');
        $l->project_id = $p->id;

        $l->save();

        return redirect('/admin_architecture_projects/create')->with('success', 'project added');  
    }

    public function archProjectStoreImg(Request $request, $id){
        $errors = '';
        $p = Project::find($id);
        if($request->hasFile('image')){
            foreach ($request->image as $file) {
                $i = new Image;
                $fileName = $file->getClientOriginalName();
                $fileName = md5($fileName) . $id . '.' . $file->extension();
                $folderName = "public/" . $p->projectName;
                Storage::makeDirectory($folderName);
                $file->storeAs($folderName, $fileName);
                $i->fileName = $fileName;
                $i->project_id = $id;
                try{
                    $i->save();
                }catch(\Exception $e){
                    $errors .= $file->getClientOriginalName() . 'already exists <br>';
                }
                 
            }

            if($errors){
                return redirect('/admin_architecture_projects/show/' . $id)->with('error', 'duplicate files: <br> '.$errors);
            }
            
            return redirect('/admin_architecture_projects/show/' . $id)->with('success', 'images uploaded');
        }
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

    public function archProjectUpdate(Request $request, $id){
        $this->validate($request,[
            'mainImg' => 'image|mimes:jpeg,png,jpg,gif,svg|max:8000',
            'projectName' => 'required',
            'tagLine' => 'required',
            'des' => 'required',
            'type' => 'required',
            'state' => 'required',
            'projStart' => 'required',
        ]);

        $p = Project::find($id);
        

        if($p->projectName != $request->input('projectName') && !$request->hasFile('mainImg')){
            $newFolderName = "public/" . $request->input('projectName') . '/bg';
            $oldFolderName = "public/" . $p->projectName . '/bg';
            Storage::move($oldFolderName . '/' . $p->mainImg, $newFolderName . '/' . $p->mainImg);
            Storage::deleteDirectory('public/' . $p->projectName);
        }

        if($request->hasFile('mainImg')){
            $img = $request->file('mainImg');
            $fileName = $img->getClientOriginalName();
            $fileName = md5($fileName) . '.' . $request->mainImg->extension();
            $newFolderName = "public/" . $request->input('projectName') . '/bg';
            $oldFolderName = "public/" . $p->projectName . '/bg';
            
            
            Storage::makeDirectory($newFolderName);
            Storage::deleteDirectory('public/' . $p->projectName);

            $request->mainImg->storeAs($newFolderName, $fileName);
            $p->mainImg = $fileName;
        }

        $p->projectName = $request->input('projectName');
        $p->tagline = $request->input('tagLine');
        $p->description = $request->input('des');
        $p->type = $request->input('type');
        $p->state = $request->input('state');
        $p->started_at = $request->input('projStart');

        $p->save();

        $projectName = $request->input('projectName');
        // $proj = Project::where('projectName', '=', $projectName)->first();

        
        $l = Location::where('project_id', '=', $id)->first();
        $l->country = $request->input('country');
        $l->zipcode = $request->input('zipCode');
        $l->city = $request->input('city');
        $l->area = $request->input('area');
        $l->road = $request->input('road');
        $l->section = $request->input('section');
        $l->sector = $request->input('sector');
        $l->project_id = $id;

        $l->save();
        return redirect('/admin_architecture_projects/show/' . $id)->with('success', 'Edition is saved');
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
