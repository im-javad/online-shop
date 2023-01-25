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

        return view('admin.frontend.categories.index' , compact('categories'));
    }
  
    /**
     * Add a new category
     *
     * @return void
     */
    public function storage(Request $request){
        $validator = $this->validateAddForm($request);
        
        $this->doStore($validator);

        return back()->with('simpleSuccessAlert' , 'New product added successfully');
    }

    /**
     * Show edit category form 
     *
     * @param \App\Models\Category $category
     * @return void
     */
    public function edit(Category $category){
        return view('admin.frontend.categories.edit' , compact('category'));
    }
    
    /**
     * Update a category 
     *
     * @param \App\Models\Category $category
     * @return void
     */
    public function update(Category $category , Request $request){
        $validator = $this->validateUpdateForm($request);

        $this->doUpdate($category , $validator);

        return redirect()->route('admin.categories.index')->with('simpleSuccessAlert' , 'Update category successfully');
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
}


