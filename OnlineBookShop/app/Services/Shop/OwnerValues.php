<?PhP 
namespace APp\Services\shop;

use App\Models\Category;

class OwnerValues{
    /**
     * Giving all the categories with their products in the form of an array
     *
     * @return array|null
     */ 
    public static function geCategoriesWithProducts(){
        $all = [];

        foreach (Category::all() as $category) {
            $all += ([
                $category->slug => $category->products
            ]);
        }

        return $all;
    }
}

