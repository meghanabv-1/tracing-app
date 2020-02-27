<!DOCTYPE html>
</html>
<head>
    <title>Search Employee </title>
</head>
<style>
    body{
        background-color: #FFFACD;
    }
    form{
        padding:200px;
        padding-right:25%;
        margin: 25px;
        margin-right: 25%;

    }
    </style>
    <body>
    <form method="get" action ="/search-result" role ="search">
    {{ csrf_field() }}
        <div class ="container">
        <h2><u>Search Employee's </u></h2>
        </div>
    <div class ="form-group">
    <label for ="name">Employee Id : </label>
    <input type ="search" class ="form-control" name ="employee_id" placeholder = "Enter Employee Id" >
    <button type = "Submit" class ="btn btn-primary" value ="search data">Search</button>
</div>
</form>
</body>
</html>


