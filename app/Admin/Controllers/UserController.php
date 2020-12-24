<?php

namespace App\Admin\Controllers;

use App\Models\User;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use Encore\Admin\Layout\Content;
use Encore\Admin\Controllers\HasResourceActions;
use Illuminate\Http\Request;
use Encore\Admin\Controllers;
use Illuminate\Routing\Controller;
class UserController extends AdminController
{
    use HasResourceActions;
    public function index(Content $content)
    {
        /*return $content
            ->header('會員管理')
            ->description('管理所有會員')
            ->body($this->grid());*/
        return $content
            ->title($this->title())
            ->description($this->description['index'] ?? trans('會員管理'))
            ->body($this->grid());
    }
    public function show($id, Content $content)
    {
        /*return $content
            ->header($this->title)
            ->description('description')
            ->body($this->detail($id));*/
        return $content
            ->title($this->title())
            ->description($this->description['show'] ?? trans('user.show'))
            ->body($this->detail($id));
    }
    public function edit($id, Content $content)
    {
        /*return $content
            ->header($this->title)
            ->description('編輯')
            ->body($this->form()->edit($id));*/
        return $content
            ->title($this->title())
            ->description($this->description['edit'] ?? trans('user.edit'))
            ->body($this->form()->edit($id));
    }
    public function create(Content $content)
    {
       /* return $content
            ->header($this->title)
            ->description('description')
            ->body($this->form());*/
        return $content
            ->title($this->title())
            ->description($this->description['create'] ?? trans('user.create'))
            ->body($this->form());
    }
    public function store()
    {
        app(UserRequest::class);
        return $this->form()->store();
    }
    public function update($id) {
        app(UserRequest::class);
        return $this->form()->update($id);
    }

    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'User';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new User());

        $grid->column('id', __('Id'));
        $grid->column('name', __('Name'));
        $grid->column('email', __('Email'));
        $grid->column('email_verified_at', __('Email verified at'));
        $grid->column('password', __('Password'));
        $grid->column('two_factor_secret', __('Two factor secret'));
        $grid->column('two_factor_recovery_codes', __('Two factor recovery codes'));
        $grid->column('remember_token', __('Remember token'));
        $grid->column('current_team_id', __('Current team id'));
        $grid->column('profile_photo_path', __('Profile photo path'));
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
        $show = new Show(User::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('email', __('Email'));
        $show->field('email_verified_at', __('Email verified at'));
        $show->field('password', __('Password'));
        $show->field('two_factor_secret', __('Two factor secret'));
        $show->field('two_factor_recovery_codes', __('Two factor recovery codes'));
        $show->field('remember_token', __('Remember token'));
        $show->field('current_team_id', __('Current team id'));
        $show->field('profile_photo_path', __('Profile photo path'));
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
        $form = new Form(new User());

        $form->text('name', __('Name'));
        $form->email('email', __('Email'));
        $form->datetime('email_verified_at', __('Email verified at'))->default(date('Y-m-d H:i:s'));
        $form->password('password', __('Password'));
        //$form->textarea('two_factor_secret', __('Two factor secret'));
        //$form->textarea('two_factor_recovery_codes', __('Two factor recovery codes'));
        //$form->text('remember_token', __('Remember token'));
        //$form->number('current_team_id', __('Current team id'));
        //$form->textarea('profile_photo_path', __('Profile photo path'));

        return $form;
    }
}
