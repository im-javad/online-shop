<?PhP 
namespace App\Support\Notification;

use App\Support\Notification\Validation\GeneralValidation;

/**
 * Send all kinds of notifications
 * 
 * @method mixed sendEmail(\App\Models\User $user , \Illuminate\Contracts\Mail\Mailable $mailable)
 */
class Notification{
    public function __call($providerName , $providerArgumant){
        $providerPath =__NAMESPACE__ . '\Providers\\' . substr($providerName , 4) . 'Provider';

        GeneralValidation::existClass($providerPath);

        $providerInstance = new $providerPath(...$providerArgumant);

        GeneralValidation::MustImplementsProviderInterface($providerInstance);

        return $providerInstance->send();
    }
}



