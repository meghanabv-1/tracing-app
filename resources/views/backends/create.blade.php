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
<form method="post" action="{{ route('backends.store') }}">
    {{csrf_field()}}
<div class = "container">
<h2>Employee Details</h2>
<div class ="form-group">
<label for ="name">Employee Id:</label>
<input type ="text" class ="form-control" name ="employee_id" placeholder ="Employee Id" />
</div>
</br>
<div class = "form-group">
<label for = "name">Aplicant Name: </label>
<input type ="text" class ="form-control" name ="name" placeholder = "FirstName" />
<input type ="text" class ="form-control" name ="name_m" placeholder = "MiddleName" />
<input type ="text" class ="form-control" name ="name_l" placeholder = "LastName" />
</div>
<br/>
<div class ="form-group">
<label for = "name">Father/Husband/MotherName: </label>
<input type ="text" class ="form-control" name ="father"placeholder="FirstName" />
<input type ="text" class ="form-control" name ="father_m" placeholder= "MiddleName" />
<input type ="text" class ="form-control" name ="father_l" placeholder ="LastName" />

<h3>gender: </h3>

Male<input type ="radio" checked ="checked" name ="gender" value ="male" />
Female<input type ="radio" checked ="checked" name ="gender" value ="female" />
</div>
<br/>
<div class ="form-group">
<label for = "name">BirthDate: </label>
<input type ="date" class ="form-control" name ="dob" />
</div>
<div class="form-control">
<label name="name">Department: </label>
<input type="radio" checked ="checked" name ="department" value ="collection" />Collection
<input type ="radio" checked ="checked" name ="department" value ="backend" />backend
<input type ="radio" checked ="checked" name ="department" value ="it" />IT
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
 <input type ="text" class ="form-control" name ="house" />
</td>
<td>
<br/>
<label name ="name">House No: </label>
<input type ="text" class ="form-control" name ="house_no" />
</td>
</tr>
<tr>
<td>
<label name ="name">Street/Area: </label>
 <input type ="text" class ="form-control" name ="area" />
</td>
<td>
<label name ="name">Street/Area: </label>
 <input type ="text" class ="form-control" name ="area_p" />
</td>
</tr>
<tr>
<td>
<label name ="name">Town/Village: </label>
<input type ="text" class ="form-control" name ="town" />
</td>
<td>
<label name ="name">Town/Village:  </label>
<input type ="text" class ="form-control" name ="town_p" />
</td>
</tr>
<tr>
<td>
<label name ="name">District/City: </label>
<input type ="text" class ="form-control" name ="district" />
</td>
<td>
<label name ="name">District/City: </label>
<input type ="text" class ="form-control" name ="district_p" />
</td>
</tr>
<tr>
<td>
<label name ="name">LandMark: </label>
<input type ="text" class ="form-control" name ="landmark" />
</td>
<td>
<label name ="name">LandMark: </label>
<input type ="text" class ="form-control" name ="landmark_p" />
</td>
</tr>
<tr>
<td>
<label name ="name">Pin Code: </label>
<input type ="text" class ="form-control" name ="pincode" />
<button type ="validate">Validate</button>
</td>
<td>
<label name ="name">Pin Code: </label>
<input type ="text" class ="form-control" name ="pincode_p" />
</td>
</tr>
<tr>
<td>
<label name ="name">State: </label>
<input type ="text" class ="form-control" name ="state" />
</td>
<td>
<label name ="name">State: </label>
 <input type ="text" class ="form-control" name ="state_p"  />
</td>
</tr>
<tr>
<td>
<label name ="name">Location: </label>
 <input type ="text" class ="form-control" name ="location" />
</td>
<td>
<label name ="name">Location: </label>
<input type ="text" class ="form-control" name ="location_p" />
</td>
</tr>
<tr>
<td>
<label name ="name">Mobile No: </label>
<input type ="text" class ="form-control" name ="mobile_no" />
</td>
<td>
<hr>
<label name ="name">Contact Person Name At Permanent Address: </label>
<input type ="text" class ="form-control" name ="contact_person" />
</td>
</tr>
<tr>
<td>
<label name ="name">Email Id: </label>
<input type ="text" class ="form-control" name ="email" />
</td>
<td>
<hr/>
<label name ="name">Mobile Number At Permanent Address: </label>
 <input type ="text" class ="form-control" name ="mobile_nop" />
</td>
</tr>
<tr>
<td>
<label name ="name">PAN No: </label>
 <input type ="text" class ="form-control" name ="pan_no" />
</td>
<td>
<hr/>
<label>Confirmation taken from applicant to validate PAN</label>
<input type ="radio" checked ="checked" name ="confirmation" value="yes"  />Yes
<input type ="radio" checked ="checked" name ="confirmation" value ="no" />No
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
<input type ="text" class ="form-control" name ="account_no" />
</td>
</tr>
<tr>
<td>
<label name ="name">Aadhar No: </label>
<input type ="text" class ="form-control" name="aadhar" />
</td>
</tr>
<tr>
<td>
<label name ="name">DRA No: </label>
<input type ="text" class ="form-control" name="dra_no" />
</td>
</tr>
<tr>
<td>
<label name ="name">PVC :</label>
<input type ="radio" checked ="checked" name ="pvc"  value ="yes" />Yes
<input type ="radio" checked ="checked" name ="pvc" value ="no" />No
</td>
</tr>
<tr>
<td>
<label name ="name">Designation: </label>
<input type ="text" class ="form-control" name="designation" />
</td>
</tr>
<tr>
<td>
<label name ="name">Date Of Joining: </label>
<input type ="date" class ="form-control" name="doj" />
</td>
</tr>
<tr>
<td>
<label name ="name">Resume Filled:</label>
<input type ="radio" checked ="checked" name ="resume" value ="yes" />Yes
<input type ="radio" checked ="checked" name ="resume" value ="no" />No
</td>
</tr>
<tr>
<td>
<label name ="name">Status:</label>
<input type ="radio" checked ="checked" name ="status"  value ="working"  />Working
<input type ="radio" checked ="checked" name ="status" value ="left" />Left
</td>
</tr>
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