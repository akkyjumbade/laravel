<?php

namespace Admin\Http\Controllers;

use Admin\Models\Taxonomy;
use App\Http\Controllers\Controller;
// use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Str;

class TaxonomyController extends Controller
{
   function index(Request $req, $type = null) {
      $users = Taxonomy::latest();
      $status = $req->query('status', null);
      if ($status) {
         $users->where('status', $status);
      }
      //$status = $req->query('status', null);
      $taxonomies = $users->paginate(config('admin.pagination_limit'));
      // dd($taxonomies);
      return inertia('taxonomies/index', compact(
         'taxonomies'
      ));
   }
   function create() {
      $taxonomies = Taxonomy::select(['id as value', 'title as label'])->get();
      $taxonomy = new Taxonomy();
      $taxonomy->title = '';
      return inertia('taxonomies/create', compact(
         'taxonomies', 'taxonomy'
      ));
   }

   function store(Request $req) {
      $req->validate([
         'title' => ['required', 'unique:roles'],
         'description' => ['nullable', 'max:255'],
      ]);
      try {
         $category = Category::create([
            'title' => $req->input('title'),
            'slug' => Str::slug(strtolower($req->input('title'). time())),
            'description' => $req->input('description', $req->input('title')),
         ]);
         return response()->success([
            'message' => __('Category created'),
            'data' => $category
         ]);
      }catch (\Throwable $th) {
         return response()->error([
            'message' => $th->getMessage()
         ]);
      }
   }
   function show(Category $category) {
      return view('admin::categories.show', compact(
         'category'
      ));
   }
   function edit(Category $category) {
      $categories = Category::select(['id as value', 'title as label'])->get();
      return view('admin::categories.create', compact(
         'categories', 'category'
      ));
   }
}
