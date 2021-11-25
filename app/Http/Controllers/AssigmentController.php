<?php
namespace App\Http\Controllers;
use App\Models\Assigment;
use DB;
use Session;
use Redirect;
use Illuminate\Support\Carbon;
use App\Http\Requests\assigmentRequest;
use App\Http\Requests\assigmentupdateRequest;
use Illuminate\Http\Request;

class AssigmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usersession = Session::get('usersession');
        if(!empty($usersession))
        {
            $assigments = Assigment::all();
            return view('admin.assigment.index', compact('assigments'));
        }else{
            return Redirect::to('admin-login');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $usersession = Session::get('usersession');
        if(!empty($usersession))
        {
            return view('admin.assigment.create');
        }else{
            return Redirect::to('admin-login');
        }
    }


    public function store(assigmentRequest $request)
    {
            $usersession = Session::get('usersession');
            if(!empty($usersession))
            {
                $newImagename = time().'-'.$request->home_title.'.'.$request->allocated_file->extension();

                $request->allocated_file->move(public_path('images'), $newImagename);

                $assigment = Assigment::create([
                'home_title'     =>$request->home_title,
                'start_time'    =>$request->start_time,
                'description'    =>$request->description,
                'end_time'       =>$request->end_time,
                'allocated_file' =>$newImagename 
                 ]);
                return redirect()->back()->with('success', 'Homework Allocated Successfully!');
            }else{
               return  Redirect::to('admin-login');
            }
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Assigment  $assigment
     * @return \Illuminate\Http\Response
     */

    public function show(Assigment $assigment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Assigment  $assigment
     * @return \Illuminate\Http\Response
     */
    public function edit(Assigment $assigment)
    {
       $usersession = Session::get('usersession');
        if(!empty($usersession)){
            return view('admin.assigment.edit')->with('assigment', $assigment);
        }else{
           return Redirect::to('admin-login');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Assigment  $assigment
     * @return \Illuminate\Http\Response
     */
    public function update(assigmentupdateRequest $request, Assigment $assigment)
    {
       $usersession = Session::get('usersession');
       if(!empty($usersession))
       {
          $oldimage = $request->input('Old_image');
          if($fileupload = $request->file('allocated_file'))
          {
            $imagefile = time().'-'.$request->home_title.'.'.$request->allocated_file->extension();
            $request->allocated_file->move(public_path('images'), $imagefile);
            $imagefileupload = $imagefile;
          }else{
            $imagefile      = $oldimage;
          }
          $assigment->update([
            'home_title'     =>$request->home_title,
            'start_time'    =>$request->start_time,
            'description'    =>$request->description,
            'end_time'       =>$request->end_time,
            'allocated_file' =>$imagefile 
             ]);
             return redirect()->back()->with('success', 'Update Assigment Successfully');
       }else{
          return Redirect::to('admin-login');
       }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Assigment  $assigment
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $usersession = Session::get('usersession');
       if(!empty($usersession)){
        $assigment = Assigment::find($id); 
        $assigment->delete();
        return redirect()->back()->with('danger', 'Assigment Deleted Successfully');
       }else{
        return Redirect::to('admin-login');
       }
    }

    public function classShow(){
        echo "Hello";
    }

    
}
