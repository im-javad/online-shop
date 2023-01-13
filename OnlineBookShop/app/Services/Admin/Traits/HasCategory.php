<?PhP 
namespace App\Services\Admin\Traits;

use App\Models\Category;
use Illuminate\Http\Request;

trait HasCategory{
    /**
     * Add form validation
     *
     * @param Request $request
     * @return array
     */ 
    public function validateAddForm(Request $request){
        return $request->validate([
            'slug' => 'required | string | max:50 | unique:categories,slug',
            'title' => 'required | string | max:50 | unique:categories,title'
        ]);
    }

    /**
     * Update form validation
     *
     * @param Request $request
     * @return array
     */ 
    public function validateUpdateForm(Request $request){
        return $request->validate([
            'slug' => 'required | string | max:50',
            'title' => 'required | string | max:50'
        ]);
    }

    /**
     * Category storage operation
     *
     * @param array $validator
     * @return void
     */
    public function doStore(array $validator){
        try {
            Category::create([
                'slug' => $validator['slug'],
                'title' => $validator['title']
            ]);
        }catch(\Throwable $th){
            return back()->with('simpleWarningAlert' , 'Failed to storage category.please try again after few minute.');
        }
    }

    /**
     * Category update operation
     *
     * @param App\Models\Category $category
     * @param array $validator
     * @return void
     */
    public function doUpdate(Category $category , array $validator){
        $category->update([
            'slug' => $validator['slug'],
            'title' => $validator['title']
        ]);
    }
}

