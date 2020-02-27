<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Backend;
use DB;

class BackendController extends Controller
{
  public function index()
  {
      $backends = Backend::all();

      return view('backends.index', compact('backends'));
  }
    public function create()
    {
        return view('backends.create');
    }

    public function store(Request $request)
    {
      $request->validate([
        'employee_id'=>'required',
          'name'=>'required',
          'name_m'=>'required',
          'name_l'=>'required',
          'father'=>'required',
          'father_m'=>'required',
          'father_l'=>'required',
          'gender'=>'required',
          'dob'=>'required',
          'department'=>'required',
          'house'=>'required',
          'house_no'=>'required',
          'area'=>'required',
          'area_p'=>'required',
          'town'=>'required',
          'town_p'=>'required',
          'district'=>'required',
          'district_p'=>'required',
          'landmark'=>'required',
          'landmark_p'=>'required',
          'pincode'=>'required',
          'pincode_p'=>'required',
          'state'=>'required',
          'state_p'=>'required',
          'location'=>'required',
          'location_p'=>'required',
          'mobile_no'=>'required',
          'contact_person'=>'required',
          'email'=>'required',
          'mobile_nop'=>'required',
          'pan_no'=>'required',
          'confirmation'=>'required',
          'account_no'=>'required',
          'aadhar'=>'required',
          'dra_no'=>'required',
          'pvc'=>'required',
          'designation'=>'required',
          'doj'=>'required',
          'resume'=>'required',
          'status'=>'required',
        ]);

        $backend = new Backend([
            'employee_id' => $request->get('employee_id'),
            'name' => $request->get('name'),
            'name_m' => $request->get('name_m'),
            'name_l' => $request->get('name_l'),
            'father' => $request->get('father'),
            'father_m' => $request->get('father_m'),
            'father_l' => $request->get('father_l'),
            'gender' => $request->get('gender'),
            'dob' => $request->get('dob'),
            'department' => $request->get('department'),
            'house' => $request->get('house'),
            'house_no' => $request->get('house_no'),
            'area' => $request->get('area'),
            'area_p' => $request->get('area_p'),
            'town' => $request->get('town'),
            'town_p' => $request->get('town_p'),
            'district' => $request->get('district'),
            'district_p' => $request->get('district_p'),
            'landmark' => $request->get('landmark'),
            'landmark_p' => $request->get('landmark_p'),
            'pincode' => $request->get('pincode'),
            'pincode_p' => $request->get('pincode_p'),
            'state' => $request->get('state'),
            'state_p' => $request->get('state_p'),
            'location' => $request->get('location'),
            'location_p' => $request->get('location_p'),
            'mobile_no' => $request->get('mobile_no'),
            'contact_person' => $request->get('contact_person'),
            'email' => $request->get('email'),
            'mobile_nop' => $request->get('mobile_nop'),
            'pan_no' => $request->get('pan_no'),
            'confirmation' => $request->get('econfirmation'),
            'account_no' => $request->get('account_no'),
            'aadhar' => $request->get('aadhar'),
            'dra_no' => $request->get('dra_no'),
            'pvc' => $request->get('pvc'),
            'designation' => $request->get('designation'),
            'doj' => $request->get('doj'),
            'resume' => $request->get('resume'),
            'status' => $request->get('status'),

            ]);

            $backend->save();
            return redirect('/backends')->with('success', 'Data has been added');
    
      }
      public function show($id)
      {
          $backend = Backend::findOrFail($id);
      
          return view('backends.show')->withBackend($backend);
      }
      
      public function edit($id)
      {
          $backend = Backend::findOrFail($id);
      
          return view('backends.edit')->withBackend($backend);
      }


   public function update(Request $request, $id)
{
    $request->validate([
      'employee_id'=>'required',
      'name'=>'required',
      'name_m'=>'required',
      'name_l'=>'required',
      'father'=>'required',
      'father_m'=>'required',
      'father_l'=>'required',
      'gender'=>'required',
      'dob'=>'required',
      'department'=>'required',
      'house'=>'required',
      'house_no'=>'required',
      'area'=>'required',
      'area_p'=>'required',
      'town'=>'required',
      'town_p'=>'required',
      'district'=>'required',
      'district_p'=>'required',
      'landmark'=>'required',
      'landmark_p'=>'required',
      'pincode'=>'required',
      'pincode_p'=>'required',
      'state'=>'required',
      'state_p'=>'required',
      'location'=>'required',
      'location_p'=>'required',
      'mobile_no'=>'required',
      'contact_person'=>'required',
      'email'=>'required',
      'mobile_nop'=>'required',
      'pan_no'=>'required',
      'confirmation'=>'required',
      'account_no'=>'required',
      'aadhar'=>'required',
      'dra_no'=>'required',
      'pvc'=>'required',
      'designation'=>'required',
      'doj'=>'required',
      'resume'=>'required',
      'status'=>'required',
    ]);

    $backend = Backend::find($id);
         $backend->employee_id = $request->get('employee_id');
         $backend->name = $request->get('name');
         $backend->name_m = $request->get('name_m');
         $backend->name_l = $request->get('name_l');
         $backend->father = $request->get('father');
         $backend->father_m = $request->get('father_m');
         $backend->father_l = $request->get('father_l');
         $backend->gender = $request->get('gender');
         $backend->dob = $request->get('dob');
         $backend->department = $request->get('department');
         $backend->house = $request->get('house');
         $backend->house_no= $request->get('house_no');
         $backend->area = $request->get('area');
         $backend->area_p = $request->get('area_p');
         $backend->town = $request->get('town');
         $backend->town_p = $request->get('town_p');
         $backend->district = $request->get('district');
         $backend->district_p = $request->get('district_p');
         $backend->landmark = $request->get('landmark');
         $backend->landmark_p = $request->get('landmark_p');
         $backend->pincode = $request->get('pincode');
         $backend->pincode_p = $request->get('pincode_p');
         $backend->state = $request->get('state');
         $backend->state_p = $request->get('state_p');
         $backend->location = $request->get('location');
         $backend->location_p = $request->get('location_p');
         $backend->mobile_no = $request->get('mobile_no');
         $backend->contact_person = $request->get('contact_person');
         $backend->email = $request->get('email');
         $backend->mobile_nop = $request->get('mobile_nop');
         $backend->pan_no = $request->get('pan_no');
         $backend->confirmation = $request->get('econfirmation');
         $backend->account_no = $request->get('account_no');
         $backend->aadhar = $request->get('aadhar');
         $backend->dra_no = $request->get('dra_no');
         $backend->pvc = $request->get('pvc');
         $backend->designation = $request->get('designation');
         $backend->doj = $request->get('doj');
         $backend->resume = $request->get('resume');
         $backend->status = $request->get('status');
         
         $backend->save();
   
         return redirect('/backends')->with('success', 'Data has been updated');
}
  public function destroy($id)
{
    $backend = Backend::findOrFail($id);

    $backend->delete();

    return redirect()->route('backends.index')->with('success', 'Data has been Deleted');
}

public function search(Request $request){
  $search = $request->get('search');
  $backend = DB::table('backends')->where('employee_id', 'like', '%' .$search. '%')->get();
  return view('backends.search');
}

}

