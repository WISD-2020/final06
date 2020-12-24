<?php

namespace App\Admin\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use Encore\Admin\Layout\Content;
use Encore\Admin\Controllers\HasResourceActions;
class ProductController extends AdminController
{
    use HasResourceActions;
    public function index(Content $content)
    {
        return $content
            ->header('商品管理')
            ->description('管理所有賣場商品')
            ->body($this->grid());
    }
    public function show($id, Content $content)
    {
        return $content
            ->header($this->title)
            ->description('description')
            ->body($this->detail($id));
    }
    public function edit($id, Content $content)
    {
        return $content
            ->header($this->title)
            ->description('編輯')
            ->body($this->form()->edit($id));
    }
    public function create(Content $content)
    {
        return $content
            ->header($this->title)
            ->description('description')
            ->body($this->form());
    }
   /*public function store(Content $content)
    {
        return $content
            ->header($this->title)
            ->description('description')
            ->body($this->form());
    }

    /*public function update(Request $request, Content $content)
    {
        //
    }
*/
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Product';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Product());

        $grid->column('id', __('Id'));
        $grid->column('title', __('Title'));
        $grid->column('description', __('Description'));
        $grid->column('image', __('Image'));
        $grid->column('on_sale', __('On sale'));
        $grid->column('price', __('Price'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

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
        $show = new Show(Product::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('title', __('Title'));
        $show->field('description', __('Description'));
        $show->field('image', __('Image'));
        $show->field('on_sale', __('On sale'));
        $show->field('price', __('Price'));
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
        $form = new Form(new Product());

        $form->text('title', __('Title'));
        $form->textarea('description', __('Description'));
        $form->image('image', __('Image'));
        $form->switch('on_sale', __('On sale'))->default(1);
        $form->number('price', __('Price'));

        return $form;
    }
}
