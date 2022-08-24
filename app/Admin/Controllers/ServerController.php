<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\Server;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;

class ServerController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new Server(), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('ip');
            $grid->column('password');
            $grid->column('hash');
            $grid->column('local');
            $grid->column('status');
            $grid->column('money');
            $grid->column('max_user');
            $grid->column('created_at');
            $grid->column('updated_at')->sortable();
        
            $grid->filter(function (Grid\Filter $filter) {
                $filter->equal('id');
        
            });
        });
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     *
     * @return Show
     */
    protected function detail($id)
    {
        return Show::make($id, new Server(), function (Show $show) {
            $show->field('id');
            $show->field('ip');
            $show->field('password');
            $show->field('hash');
            $show->field('local');
            $show->field('status');
            $show->field('money');
            $show->field('max_user');
            $show->field('created_at');
            $show->field('updated_at');
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Form::make(new Server(), function (Form $form) {
            $form->display('id');
            $form->text('ip');
            $form->text('password');
            $form->text('hash');
            $form->text('local');
            $form->text('status');
            $form->text('money');
            $form->text('max_user');
        
            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
