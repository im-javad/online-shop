<?PhP 
namespace App\Support\Notification\Validation;

use App\Support\Notification\Providers\Contracts\ProviderInterface;

class GeneralValidation{
    /**
     * Checking provider is exists or not
     *
     * @param string $className
     * @return void
     */
    public static function existClass(string $className){
        if(!class_exists($className))
            throw new \Exception("Class not exist!");
    }

    /**
     * Checking method is exists or not 
     *
     * @param App\Service\Notification\Providers\Contracts\ProviderInterface $objectOfClass
     * @param string $mthodName
     * @return void
     */
    public static function existMethod(ProviderInterface $objectOfClass , string $mthodName){
        if(!method_exists($objectOfClass , $mthodName))
            throw new \Exception("Method not exist!");
    }

    /**
     * Checking provider implemented provider interface or not 
     *
     * @param App\Service\Notification\Providers\Contracts\ProviderInterface $objectOfClass
     * @return void
     */
    public static function MustImplementsProviderInterface(ProviderInterface $objectOfClass){
        if(!is_subclass_of($objectOfClass , ProviderInterface::class))
            throw new \Exception("Class must implements App\Services\Notification\Providers\Contracts\Provider");
    }
}
