<?PhP 
namespace App\Services\Admin\Traits;

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
            'slug' => 'required | unique:categories,slug',
            'title' => 'required | unique:categories,title'
        ]);
    }
}
