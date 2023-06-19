<?php

namespace App\Http\Sections;

use AdminColumn;
use AdminColumnFilter;
use AdminDisplay;
use AdminForm;
use AdminFormElement;
use Illuminate\Database\Eloquent\Model;
use SleepingOwl\Admin\Contracts\Display\DisplayInterface;
use SleepingOwl\Admin\Contracts\Form\FormInterface;
use SleepingOwl\Admin\Contracts\Initializable;
use SleepingOwl\Admin\Form\Buttons\Cancel;
use SleepingOwl\Admin\Form\Buttons\Save;
use SleepingOwl\Admin\Form\Buttons\SaveAndClose;
use SleepingOwl\Admin\Form\Buttons\SaveAndCreate;
use SleepingOwl\Admin\Section;

/**
 * Class Product
 *
 * @property \App\Models\Product $model
 *
 * @see https://sleepingowladmin.ru/#/ru/model_configuration_section
 */
class Product extends Section implements Initializable
{
    /**
     * @var bool
     */
    protected $checkAccess = false;

    /**
     * @var string
     */
    protected $title;

    /**
     * @var string
     */
    protected $alias;

    /**
     * Initialize class.
     */
    public function initialize()
    {
        $this->addToNavigation()->setPriority(170)->setIcon('fa fa-shopping-bag');
    }

    /**
     * @param array $payload
     *
     * @return DisplayInterface
     */
    public function onDisplay($payload = [])
    {
        $columns = [
            AdminColumn::text('id', '#')->setWidth('50px')->setHtmlAttribute('class', 'text-center'),
            AdminColumn::link('name', 'Название')->setHtmlAttribute('class', 'text-center')
                ->setSearchCallback(function($column, $query, $search){
                    return $query
                        ->orWhere('name', 'like', '%'.$search.'%')
                        ->orWhere('created_at', 'like', '%'.$search.'%')
                    ;
                })
            ,
            AdminColumn::link('slug', 'Slug')->setHtmlAttribute('class', 'text-center'),
            AdminColumn::image('image', 'Картинка')->setHtmlAttribute('class', 'text-center'),
            AdminColumn::text('price', 'Цена')->setHtmlAttribute('class', 'text-center'),
            AdminColumn::lists('categories.name', 'Категории')
                ->append(AdminColumn::filter('category_id'))
                ->setHtmlAttribute('class', 'text-center'),


        ];

        $display = AdminDisplay::datatables()
            ->setName('firstdatatables')
            ->setOrder([[0, 'asc']])
            ->with('categories')
            ->setDisplaySearch(true)
            ->paginate(25)
            ->setColumns($columns)
            ->setHtmlAttribute('class', 'table-primary table-hover th-center')
        ;

        $display->setColumnFilters([
            AdminColumnFilter::select()
                ->setModelForOptions(\App\Models\Category::class, 'id')
                ->setLoadOptionsQueryPreparer(function($element, $query) {
                    return $query;
                })
                ->setDisplay('name')
                ->setColumnName('categories.id')
                ->setPlaceholder('Выбрать категорию')
            ,
        ]);

        $display->getColumnFilters()->setPlacement('card.heading');

        return $display;
    }

    /**
     * @param int|null $id
     * @param array $payload
     *
     * @return FormInterface
     */
    public function onEdit($id = null, $payload = [])
    {
        $form = AdminForm::card()->addBody([
            AdminFormElement::columns()->addColumn([
                AdminFormElement::text('id', 'ID')->setReadonly(true),
                AdminFormElement::text('name', 'Название')
                    ->required()
                ,
                AdminFormElement::html('<hr>'),
                AdminFormElement::text('price', 'Цена'),
                AdminFormElement::html('<hr>'),
                AdminFormElement::html('<p style="font-weight: bold">Категории:</p>'),
                AdminFormElement::manyToMany('categories',  [])
                    ->setRelatedElementDisplayName('name')

            ],  'col-xs-12 col-sm-6 col-md-4 col-lg-4')->addColumn([
                AdminFormElement::image('image', 'Картинка')
            ], 'col-xs-12 col-sm-6 col-md-8 col-lg-8')->addColumn([
                AdminFormElement::wysiwyg('text', 'Содержимое'),
            ], 'col-lg-12'),
        ]);

        $form->getButtons()->setButtons([
            'save'  => new Save(),
            'save_and_close'  => new SaveAndClose(),
            'save_and_create'  => new SaveAndCreate(),
            'cancel'  => (new Cancel()),
        ]);

        return $form;
    }

    /**
     * @return FormInterface
     */
    public function onCreate($payload = [])
    {
        return $this->onEdit(null, $payload);
    }

    /**
     * @return bool
     */
    public function isDeletable(Model $model)
    {
        return true;
    }

    /**
     * @return void
     */
    public function onRestore($id)
    {
        // remove if unused
    }
}
