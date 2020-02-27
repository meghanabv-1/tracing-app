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
<div class = "container">
<h2>Employee Details</h2>
</div>
<a href="{{ route('backends.index') }}" class="btn btn-info">Back to all tasks</a>
<a href="{{ route('backends.edit', $backend->id) }}" class="btn btn-primary">Edit Task</a>
<table>
    <thead>
    <tr>
<td><b>Employee Id: {{$backend->employee_id}}</b></td>
</tr>
<tr>
<td><b>Aplicant Name: </b>{{$backend->name}}</td>
</tr>
<tr>
<td><b>Father/Husband/MotherName: </b>{{$backend->father}}</td>
</tr>
<tr>
<td><b>Gender: </b> {{$backend->gender}}</td>
</tr>
<tr>
<td><b>BirthDate: </b>{{$backend->dob}}</td>
</tr>
<tr>
<td><b>Department: </b> {{$backend->department}}</td>
</tr>
</table>
<table id ="employee">
<thead>
<tr>
<th>Current Address </th>
<th>Permanent Address </th>
</tr>
<br/>
<tbody>
    <tr>
        <td>House No: {{$backend->house}}</td>
        <td>House No: {{$backend->house_no}}</td>
</tr>
<tr>
        <td>Street/Area: {{$backend->area}}</td>
        <td>Street/Area: {{$backend->area_p}}</td>
</tr>

<tr>
        <td>Town/Village: {{$backend->town}}</td>
        <td>Town/Village: {{$backend->town_p}}</td>
</tr>
<tr>
        <td>District/City: {{$backend->district}}</td>
        <td>District/City: {{$backend->district_p}}</td>
</tr>
<tr>
        <td>LandMark: {{$backend->landmark}}</td>
        <td>LandMark: {{$backend->landmark_p}}</td>
</tr>
<tr>
        <td>Pin Code: {{$backend->pincode}}</td>
        <td>Pin Code: {{$backend->pincode_p}}</td>
</tr>
<tr>
        <td>State: {{$backend->state}}</td>
        <td>State: {{$backend->state_p}}</td>
</tr>
<tr>
        <td>Location: {{$backend->location}}</td>
        <td>Location: {{$backend->location_p}}</td>
</tr>
<tr>
        <td>Mobile No: {{$backend->mobile_no}}</td>
        <td>Contact Person Name At Permanent Address:{{$backend->contact_person}}</td>
</tr>
<tr>
        <td>Email Id: {{$backend->email}}</td>
        <td>Mobile Number At Permanent Address: {{$backend->mobile_nop}}</td>
</tr>
<tr>
        <td>PAN No: {{$backend->pan_no}}</td>
        <td>Confirmation taken from applicant to validate PAN: {{$backend->confirmation}}</td>
</tr>
</tbody>
</table>
<table>
<h2>Office Details</h2>
<tr>
        <td>Account No: {{$backend->account_no}}</td>
</tr>
<tr>
        <td>Aadhar No: {{$backend->aadhar}}</td>
</tr>
<tr>
        <td>DRA No: {{$backend->dra_no}}</td>
</tr>
<tr>
        <td>PVC : {{$backend->pvc}}</td>
</tr>
<tr>
        <td>Designation: {{$backend->designation}}</td>
</tr>
<tr>
        <td>Date Of Joining: {{$backend->doj}}</td>
</tr>
<tr>
        <td>Resume Filled: {{$backend->resume}}</td>
</tr>
<tr>
        <td>Status: {{$backend->status}}</td>
</tr>
<td>
</table>
<div class="col-md-6 text-right">
        {!! Form::open([
            'method' => 'DELETE',
            'route' => ['backends.destroy', $backend->id]
        ]) !!}
            {!! Form::submit('Delete this task?', ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}
    </div>
</body>
</html>