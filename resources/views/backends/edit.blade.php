<!DOCTYPE html>
<html>
<head>
<title> EMPLOYEE DETAILS </title>
</head>
<style>
th {
    background-color:#808080;
    padding: 10px;
    padding-right: 500px;
    font-size: 19px;
}

h2 {
    background-color:#808080;
    padding: 5px;
}

.wrapper {
    text-align: center;
}

button {
    position: absolute;
    background-color:orange;
}

label{
    width: 190px;
    display: inline-block;
}
</style>
<body>
<form method="post" action="{{ route('backends.update', $backend->id) }}">
        @csrf
<div class = "container">
<h2>Employee Details</h2>
<input type="hidden" name="method" value="update"/>
<div class ="form-group">
<label for ="name">Employee Id:</label>
<input type ="text" class ="form-control" name ="employee_id" placeholder ="Employee Id" value={{ $backend->employee_id }} />
</div>
</br>
<div class = "form-group">
<label for = "name">Aplicant Name: </label>
<input type ="text" class ="form-control" name ="name" placeholder = "FirstName" value={{ $backend->name }} />
<input type ="text" class ="form-control" name ="name_m" placeholder = "MiddleName"value={{ $backend->name_m }} />
<input type ="text" class ="form-control" name ="name_l" placeholder = "LastName" value={{ $backend->name_l }} />
</div>
<br/>
<div class ="form-group">
<label for = "name">Father/Husband/MotherName: </label>
<input type ="text" class ="form-control" name ="father"placeholder="FirstName" value={{ $backend->father }} />
<input type ="text" class ="form-control" name ="father_m" placeholder= "MiddleName" value={{ $backend->father_m }} />
<input type ="text" class ="form-control" name ="father_l" placeholder ="LastName" value={{ $backend->father_l }} />

<h3>gender: </h3>

Male<input type ="radio" checked ="checked" name ="gender" value ="male" value={{ $backend->gender }} />
Female<input type ="radio" checked ="checked" name ="gender" value ="female" value={{ $backend->gender }} />
</div>
<br/>
<div class ="form-group">
<label for = "name">BirthDate: </label>
<input type ="date" class ="form-control" name ="dob" value={{ $backend->dob }} />
</div>
<div class="form-control">
<label name="name">Department: </label>
<input type="radio" checked ="checked" name ="department" value ="collection" value={{ $backend->department }} />Collection
<input type ="radio" checked ="checked" name ="department" value ="backend"value={{ $backend->department }} />backend
<input type ="radio" checked ="checked" name ="department" value ="it" value={{ $backend->department }} />IT
</div>
<br/> 
</div>
<table id ="employee">
<thead>
<tr>
<th>Current Address </th>
<th>Permanent Address </th>
</tr>
<br/>
<tbody>
<tr>
<td>
<br/>
<label name ="name">House No: </label>
 <input type ="text" class ="form-control" name ="house" value={{ $backend->house }} />
</td>
<td>
<br/>
<label name ="name">House No: </label>
<input type ="text" class ="form-control" name ="house_no" value={{ $backend->house_no }} />
</td>
</tr>
<tr>
<td>
<label name ="name">Street/Area: </label>
 <input type ="text" class ="form-control" name ="area" value={{ $backend->area }} />
</td>
<td>
<label name ="name">Street/Area: </label>
 <input type ="text" class ="form-control" name ="area_p" value={{ $backend->area_p }} />
</td>
</tr>
<tr>
<td>
<label name ="name">Town/Village: </label>
<input type ="text" class ="form-control" name ="town" value={{ $backend->town }} />
</td>
<td>
<label name ="name">Town/Village:  </label>
<input type ="text" class ="form-control" name ="town_p" value={{ $backend->town_p }} />
</td>
</tr>
<tr>
<td>
<label name ="name">District/City: </label>
<input type ="text" class ="form-control" name ="district" value={{ $backend->district }} />
</td>
<td>
<label name ="name">District/City: </label>
<input type ="text" class ="form-control" name ="district_p" value={{ $backend->district_p }} />
</td>
</tr>
<tr>
<td>
<label name ="name">LandMark: </label>
<input type ="text" class ="form-control" name ="landmark" value={{ $backend->landmark }} />
</td>
<td>
<label name ="name">LandMark: </label>
<input type ="text" class ="form-control" name ="landmark_p" value={{ $backend->landmark_p }} />
</td>
</tr>
<tr>
<td>
<label name ="name">Pin Code: </label>
<input type ="text" class ="form-control" name ="pincode" value={{ $backend->pincode }} />
<button type ="validate">Validate</button>
</td>
<td>
<label name ="name">Pin Code: </label>
<input type ="text" class ="form-control" name ="pincode_p" value={{ $backend->pincode_p }} />
</td>
</tr>
<tr>
<td>
<label name ="name">State: </label>
<input type ="text" class ="form-control" name ="state" value={{ $backend->state }} />
</td>
<td>
<label name ="name">State: </label>
 <input type ="text" class ="form-control" name ="state_p" value={{ $backend->state_p }} />
</td>
</tr>
<tr>
<td>
<label name ="name">Location: </label>
 <input type ="text" class ="form-control" name ="location" value={{ $backend->location }} />
</td>
<td>
<label name ="name">Location: </label>
<input type ="text" class ="form-control" name ="location_p" value={{ $backend->location_p }} />
</td>
</tr>
<tr>
<td>
<label name ="name">Mobile No: </label>
<input type ="text" class ="form-control" name ="mobile_no" value={{ $backend->mobile_no }} />
</td>
<td>
<hr>
<label name ="name">Contact Person Name At Permanent Address: </label>
<input type ="text" class ="form-control" name ="contact_person" value={{ $backend->contact_person }} />
</td>
</tr>
<tr>
<td>
<label name ="name">Email Id: </label>
<input type ="text" class ="form-control" name ="email" value={{ $backend->email }} />
</td>
<td>
<hr/>
<label name ="name">Mobile Number At Permanent Address: </label>
 <input type ="text" class ="form-control" name ="mobile_nop" value={{ $backend->mobile_nop }} />
</td>
</tr>
<tr>
<td>
<label name ="name">PAN No: </label>
 <input type ="text" class ="form-control" name ="pan_no" value={{ $backend->pan_no }} />
</td>
<td>
<hr/>
<label>Confirmation taken from applicant to validate PAN</label>
Yes<input type ="radio" checked ="checked" name ="confirmation" value="yes" value={{ $backend->confirmation }} />
No<input type ="radio" checked ="checked" name ="confirmation" value ="no" value={{ $backend->confirmation }} />
</div>
</td>
</tr>
</tbody>
</table>
<table id ="employee">
<thead>
<tr>
<td>
<label name ="name">Account No:</label>
<input type ="text" class ="form-control" name ="account_no"value={{ $backend->account_no }} />
</td>
</tr>
<tr>
<td>
<label name ="name">Aadhar No:: </label>
<input type ="text" class ="form-control" name="aadhar" value={{ $backend->aadhar }} />
</td>
</tr>
<tr>
<td>
<label name ="name">DRA No: </label>
<input type ="text" class ="form-control" name="dra_no" value={{ $backend->dra_no }} />
</td>
</tr>
<tr>
<td>
<label name ="name">PVC :</label>
<input type ="radio" checked ="checked" name ="pvc"  value ="yes"value={{ $backend->pvc }} />Yes
<input type ="radio" checked ="checked" name ="pvc" value ="no" value={{ $backend->pvc }} />No
</td>
</tr>
<tr>
<td>
<label name ="name">Designation: </label>
<input type ="text" class ="form-control" name="designation" value={{ $backend->designation }} />
</td>
</tr>
<tr>
<td>
<label name ="name">Date Of Joining: </label>
<input type ="date" class ="form-control" name="doj" value={{ $backend->doj }} />
</td>
</tr>
<tr>
<td>
<label name ="name">Resume Filled:</label>
<input type ="radio" checked ="checked" name ="resume" value ="yes" value={{ $backend->resume }} />Yes
<input type ="radio" checked ="checked" name ="resume" value ="no"value={{ $backend->resume }} />No
</td>
</tr>
<tr>
<td>
<label name ="name">Status:</label>
<input type ="radio" checked ="checked" name ="status"  value ="working" value={{ $backend->status }} />Working
<input type ="radio" checked ="checked" name ="status" value ="left" value={{ $backend->status }} />Left
</td>
</tr>
{{method_field('PUT')}}
<td>
<div class="wrapper">
</br>
    <button type="submit" class="btn btn-primary">Submit</button>
    </br>
</div>
</td>
</tr>
</thead>
</table>
</form>

</body>
</html>