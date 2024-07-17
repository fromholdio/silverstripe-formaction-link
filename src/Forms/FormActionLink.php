<?php

namespace Fromholdio\FormActionLink\Forms;

use SilverStripe\Forms\FormAction;

class FormActionLink extends FormAction
{
    protected string $href;

    public function setHref(string $href): self
    {
        $this->href = $href;
        return $this;
    }

    public function getHref(): string
    {
        return $this->href;
    }
}
