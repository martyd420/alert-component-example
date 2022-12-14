<?php /** @noinspection PhpUnused */

declare(strict_types=1);

namespace App\Presenters;

use App\Alert\Alert;
use Nette;

final class HomepagePresenter extends Nette\Application\UI\Presenter
{

    public function handleAlertSuccess()
    {
        $this->flashMessage(new Alert('Voperace proběhla óká', 'success'));
    }


    public function handleAlertError()
    {
        $this->flashMessage(new Alert('Tady vidím velký špatný', 'error'));
    }


    public function handleAlertCountdown()
    {
        $alert = new Alert('Odpočítávací alert.', 'countdown');
        $alert->setCountdown(32);
        //$alert->setButtonAction('javascript:alert("Click!")');
        $alert->setButtonAction('https://www.google.com');
        $alert->setButtonText('action button');

        $this->flashMessage($alert);
    }

}
