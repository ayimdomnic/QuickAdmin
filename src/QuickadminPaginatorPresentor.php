<?php

use Illuminate\Contracts\Pagination\Presenter;
use Illuminate\Pagination\BootstrapThreePresenter;

class QuickadminPaginatorPresenter extends BootstrapThreePresenter implements Presenter
{
    public function render()
    {
        if ($this->hasPages()) {
            return sprintf(
            //list them here
                '<ul class="pagination pagination-sm no-margin">%s %s %s</ul>',
                $this->getPrevioursButton(),
                $this->getLinks(),
                $this->getNextButton()

            );
            //return something maybe
            return '';
        }
    }
}
