<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use App\Customer;
use DB;

class CustomerController extends Controller
{
      function index()
      {
            return view('customer');
      }
       
     function get_datatable()
       {
            return Datatables::eloquent(Customer::query())->make(true);
       }

     
         
}