<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use App\Loaninfo;
use DB;

class LoaninfoController extends Controller
{
      function index()
      {
            return view('loaninfo');
      }
       
     function get_datatable()
       {
            return Datatables::eloquent(Loaninfo::query())->make(true);
       }
      
}