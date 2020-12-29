<?php

namespace App\Admin\Controllers;

use App\Models\Visits;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class VisitsController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Visits';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Visits());

        $grid->column('id', __('Id'));
        $grid->column('user_id', __('User id'));
        $grid->column('date', __('Date'));
        $grid->column('period', __('Period'));
        $grid->column('way_id', __('Way id'));

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
        $show = new Show(Visits::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('user_id', __('User id'));
        $show->field('date', __('Date'));
        $show->field('period', __('Period'));
        $show->field('way_id', __('Way id'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Visits());

        $form->number('user_id', __('User id'));
        $form->date('date', __('Date'))->default(date('Y-m-d'));
        $form->text('period', __('Period'));
        $form->number('way_id', __('Way id'));

        return $form;
    }
}
