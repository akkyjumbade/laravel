<?php

namespace Admin\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class StorageController extends Controller
{
   function index(Request $req) {
      $drives = config('filesystems.disks');
      return view('admin::storage', compact(
         'drives'
      ));
   }

}
