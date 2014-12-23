<?php namespace Crockett95\BootstrapperJasny;

use Bootstrapper\Navigation as Original;

class Navigation extends Original
{
    /**
     * Constant for nav menu
     */
    const NAVIGATION_NAVMENU = 'navmenu-nav';

    public function navmenu(array $links = [], array $attributes = null)
    {
        $this->type = self::NAVIGATION_NAVMENU;
        if (!isset($attributes)) {
            $attributes = $this->attributes;
        }

        return $this->links($links)->withAttributes($attributes);
    }

    public function renderItem($link)
    {
        if (isset($link['title']) && !isset($link['link'])) {
            return $this->renderDropdownHeader($link);
        } else {
            return parent::renderItem($link);
        }
    }

    public function renderDropdownHeader($link)
    {
        return '<li role="presentation" class="dropdown-header">' .
            $link['title'] .
        '</li>';
    }
}