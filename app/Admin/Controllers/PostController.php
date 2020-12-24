<?php

namespace App\Admin\Controllers;

use App\Models\Post;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use http\Env\Request;

class PostController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Post';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Post());



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
        $show = new Show(Post::findOrFail($id));



        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Post());



        return $form;
    }
    public function store(Request $request)
    {
        $post=POST::create($request->all());
        return redirect()->route('posts.index');
    }
    public function index()
    {
        $posts = Post::orderBy('id', 'DESC')->get();
        /* 略 */
        $data = ['posts' => $posts];
        return view('posts.index', $data);

    }
    public function update(Post $post, Request $request)
    {
        $post->update($request->all());
        return redirect()->route('posts.index');
    }
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('posts.index');
    }

}
