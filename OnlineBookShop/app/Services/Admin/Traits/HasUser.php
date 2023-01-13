<?PhP 
namespace App\Services\Admin\Traits;

use App\Models\User;
use Illuminate\Http\Request;

trait HasUser{
    /**
     * Add form validation
     *
     * @param Illuminate\Http\Request $request
     * @return array
     */
    public function validateAddForm(Request $request){
        return $request->validate([
            'name' => 'required | string | min:3 | max:50',
            'email' => 'required | email | min:3 | max:75 | unique:users,email',
            'password' => 'required | min:6 | max:250',
            'role' => 'required | in:user,admin',
            'phone-number' => 'required | digits:11 | unique:users,phone_number',
            'address' => 'max:250',
        ]);
    }

    /**
     * Update form validation
     *
     * @param Illuminate\Http\Request $request
     * @return array
     */
    public function validateUpdateForm(Request $request){
        return $request->validate([
            'name' => 'required | string | min:3 | max:50',
            'email' => 'required | email | min:3 | max:75',
            'password' => 'required | min:6 | max:250',
            'role' => 'required | in:user,admin',
            'phone-number' => 'required | digits:11',
            'address' => 'max:250',
        ]);
    }

    /**
     * User storage operation
     *
     * @param array $validator
     * @return void
     */
    public function doStore(array $validator){
        try {
            User::create([
                'sname' => $validator['name'],
                'email' => $validator['email'],
                'password' => bcrypt($validator['password']),
                'role' => $validator['role'],
                'phone_number' => $validator['phone-number'],
                'address' => $validator['address'],
            ]);
        }catch(\Throwable $th){
            return back()->with('simpleWarningAlert' , 'Failed to storage user.please try again after few minute.');
        }
    }

    /**
     * User update operation
     *
     * @param App\Models\User $user
     * @param array $validator
     * @return void
     */
    public function doUpdate(User $user , array $validator){
        $user->update([
            'name' => $validator['name'],
            'email' => $validator['email'],
            'password' => bcrypt($validator['password']),
            'role' => $validator['role'],
            'phone_number' => $validator['phone-number'],
            'address' => $validator['address'],
        ]);
    }
}


