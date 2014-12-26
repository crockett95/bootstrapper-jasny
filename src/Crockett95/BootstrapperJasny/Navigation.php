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

        /**
     * Renders the dropdown
     *
     * @param array $link The link to render
     * @return string
     */
    protected function renderDropdown(array $link)
    {
        if (self::NAVIGATION_NAVMENU !== $this->type) return parent::renderDropdown();

        if ($this->dropdownShouldBeActive($link)) {
            $string = '<li class=\'dropdown active\'>';
        } else {
            $string = '<li class=\'dropdown\'>';
        }

        $string .= "<a class='dropdown-toggle' data-toggle='dropdown' href='#'>{$link[0]} <span class='caret'></span></a>";
        $string .= '<ul class=\'dropdown-menu navmenu-nav\' role=\'menu\'>';

        foreach ($link[1] as $item) {
            $string .= $this->renderItem($item);
        }

        $string .= '</ul>';
        $string .= '</li>';

        return $string;
    }
}