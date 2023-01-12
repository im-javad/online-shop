<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Services\Admin\Traits\HasCategory;
use Illuminate\Http\Request;

class CategoryController extends Controller{
    use HasCategory;

    /**
     * Show the categories page 
     *
     * @return void
     */
    public function index(){
        $categories = Category::paginate(10);

        return view('admin.categories.index' , compact('categories'));
    }
  
    /**
     * Add a new category
     *
     * @return void
     */
    public function storage(Request $request){
        $validator = $this->validateAddForm($request);

        Category::create([
            'slug' => $validator['slug'],
            'title' => $validator['title']
        ]);

        return back()->with('simpleSuccessAlert' , 'New product added successfully');
    }

    /**
     * Destroy a category
     *
     * @return void
     */ 
    public function destroy(Category $category){
        $category->delete();

        return back()->with('simpleSuccessAlert' , 'Remove category successfully');
    }

    /**
     * Show edit category form 
     *
     * @param \App\Models\Category $category
     * @return void
     */
    public function edit(Category $category){
        return view('admin.categories.edit' , compact('category'));
    }
    
    /**
     * Update a category 
     *
     * @param \App\Models\Category $category
     * @return void
     */
    public function update(Category $category , Request $request){
        $validator = $this->validateAddForm($request);

        $category->update([
            'slug' => $validator['slug'],
            'title' => $validator['title']
        ]);

        return redirect()->route('categories.index')->with('simpleSuccessAlert' , 'Update category successfully');
    }
}


