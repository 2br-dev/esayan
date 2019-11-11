<?php

declare(strict_types=1);

namespace Fastest\Core\Modules;

final class contactsPageModule extends \Fastest\Core\Modules\Module
{
    public function router()
    {
        return $this->blockMethod();
    }

    public function blockMethod()
    {
        $contact = Q("SELECT * FROM `#_mdd_contacts` WHERE `visible` = ?i", [1])->row();
        return [
            'template' => 'block',
            'contact' => $contact
        ];
    }
}