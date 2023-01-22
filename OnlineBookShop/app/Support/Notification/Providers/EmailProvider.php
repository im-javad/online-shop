<?PhP 
namespace  App\Support\Notification\Providers;

use App\Models\User;
use App\Support\Notification\Providers\Contracts\ProviderInterface;
use Illuminate\Contracts\Mail\Mailable;
use Illuminate\Support\Facades\Mail;

class EmailProvider implements ProviderInterface{
    private $user;
    private $mailable;

    /**
     * Assign value to properties
     *
     * @param \App\Models\User $user
     * @param \Illuminate\Contracts\Mail\Mailable $mailable
     */
    public function __construct(User $user , Mailable $mailable) {
        $this->user = $user;
        $this->mailable = $mailable;
    }

    /**
     * Send email
     *
     * @return \Illuminate\Mail\SentMessage|null
     */
    public function send(){
        return Mail::to($this->user->email)->send($this->mailable);
    }
}

