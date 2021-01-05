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
        $grid->column('result', __('Result'));

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
        $show->field('result', __('Result'));

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
        //$form->text('period', __('Period'));
        $form->select('period',__('Period'))->options(['10:00-12:00' => '10:00-12:00', '11:00-13:00' => '11:00-13:00','12:00-14:00' => '12:00-14:00'
        ,'13:00-15:00' => '13:00-15:00','14:00-16:00' => '14:00-16:00','15:00-17:00' => '15:00-17:00','16:00-18:00' => '16:00-18:00', 'val' => 'period']);
        $form->number('way_id', __('Way id'));
        $form->text('result', __('Result'))->default('0');

        return $form;
    }
}
