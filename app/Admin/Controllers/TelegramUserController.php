<?php

namespace App\Admin\Controllers;

use App\Models\TelegramUser;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class TelegramUserController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'TelegramUser';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new TelegramUser());

        $grid->column('id', __('Id'));
        $grid->column('name', __('Name'));
        $grid->column('age', __('Age'))->sortable();
        $grid->column('status', __('Status'));
        $grid->column('action')->display(function () {
            return "<button class='btn btn-sm btn-success'>Hello</button>";
        });
        //search
        $grid->quickSearch('name');

        $grid->disableActions();
        $grid->disableCreateButton();
        $grid->paginate(15);

        return $grid;
    }
    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(TelegramUser::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('age', __('Age'));
        $show->field('status', __('Status'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new TelegramUser());

        $form->text('name', __('Name'));
        $form->number('age', __('Age'));
        $form->text('status', __('Status'))->default('новый');

        return $form;
    }
}
