<?php

namespace App\Http\Controllers;

use Admin\Models\Taxonomy;
use Admin\Models\Term;
use Illuminate\Http\Request;

class TaxonomyTermController extends Controller
{
   /**
   * Display a listing of the resource.
   *
   * @param  \App\Models\Taxonomy  $taxonomy
   * @return \Illuminate\Http\Response
   */
   public function index(Request $request, Taxonomy $taxonomy)
   {
      //
   }

   /**
   * Show the form for creating a new resource.
   *
   * @param  \App\Models\Taxonomy  $taxonomy
   * @return \Illuminate\Http\Response
   */
   public function create(Request $request, Taxonomy $taxonomy)
   {
      //
   }

   /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\Taxonomy  $taxonomy
   * @return \Illuminate\Http\Response
   */
   public function store(Request $request, Taxonomy $taxonomy)
   {
      //
   }

   /**
   * Display the specified resource.
   *
   * @param  \App\Models\Taxonomy  $taxonomy
   * @param  \App\Models\Term  $term
   * @return \Illuminate\Http\Response
   */
   public function show(Request $request, Taxonomy $taxonomy, Term $term)
   {
      //
   }

   /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\Taxonomy  $taxonomy
   * @param  \App\Models\Term  $term
   * @return \Illuminate\Http\Response
   */
   public function edit(Request $request, Taxonomy $taxonomy, Term $term)
   {
      //
   }

   /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\Taxonomy  $taxonomy
   * @param  \App\Models\Term  $term
   * @return \Illuminate\Http\Response
   */
   public function update(Request $request, Taxonomy $taxonomy, Term $term)
   {
      //
   }

   /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\Taxonomy  $taxonomy
   * @param  \App\Models\Term  $term
   * @return \Illuminate\Http\Response
   */
   public function destroy(Request $request, Taxonomy $taxonomy, Term $term)
   {
      //
   }
}
