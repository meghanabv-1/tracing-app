<!DOCTYPE html>
<html>
<head>
<title>customer details</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="https://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.2.4/css/buttons.dataTables.min.css">
<link href="https://datatables.yajrabox.com/css/datatables.bootstrap.css" rel="stylesheet">
<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
</style>
</head>
<body>
<br/>
<div class="container box">
<h3 align="center">LOAN DETAILS</h3><br/>
<div class="panel panel-default">
<div class="panel-heading">search customer data</div>
<div cass="panel-body">
</div>
<div class="table-rensponsive">
<h3 align="center"> Total data: <span id="total_records"></span></h3>
<table id="users-table" class="table">
<thead>
<tr>
<th>bankname</th>
<th>loan_application_no</th>
<th>cust_name</th>
<th>teamleadname</th>
<th>month</th>
<th>pos</th>
<th>status</th>
<th>Mobile</th>
</tr>
</thead>
<tbody>

</tbody>
</table>
</div>
</div>
</div>
</div>
</body>
<html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>


    <!--Data Table-->
    <script type="text/javascript"  src=" https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript"  src=" https://cdn.datatables.net/buttons/1.2.4/js/dataTables.buttons.min.js"></script>

    <!--Export table buttons-->
    <script type="text/javascript"  src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script type="text/javascript" src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.24/build/pdfmake.min.js" ></script>
    <script type="text/javascript"  src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.24/build/vfs_fonts.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.html5.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.2.1/js/buttons.print.min.js"></script>
<script>
$(function(){
    $('#users-table').DataTable({
        processing: true,
        serverside: true,
        ajax: 'http://127.0.0.1:8000/loaninfo/get_datatable',

        columns : [
            {data: 'bankname'},
            {data: 'loan_application_no'},
            {data: 'cust_name'},
            {data: 'teamlead'},
            {data: 'month'},
            {data: 'pos'},
            {data: 'status'},
            {data: 'mobile'},
            
        ]
    });
    });
    </script>
   