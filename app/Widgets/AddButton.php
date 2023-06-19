<?php

namespace App\Widgets;

use SleepingOwl\Admin\Widgets\Widget;

class AddButton extends Widget
{

    public function active()
    {
        return true;
    }

    /**
     * При помещении в один блок нескольких виджетов они будут выведены в порядке их позиции
     * Данный метод не обязателен
     *
     * @return integer
     */
    public function position()
    {
        return 0;
    }
    /**
     * HTML который необходимо поместить
     *
     * @return string
     */
    public function toHtml()
    {
        return view('admin-buttons')->render();
    }

    /**
     * Путь до шаблона, в который добавляем
     *
     * @return string|array
     */
    public function template()
    {
        // AdminTemplate::getViewPath('dashboard') == 'sleepingowl:default.dashboard'
        return \AdminTemplate::getViewPath('_partials.header');
    }

    /**
     * Блок в шаблоне, куда помещаем
     *
     * @return string
     */
    public function block()
    {
        return 'navbar.right';
    }
}
