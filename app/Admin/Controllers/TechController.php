<?php


namespace App\Admin\Controllers;


use App\Models\Skills;
use App\Models\Tech;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class TechController extends AdminController
{

    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Технологии';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Tech());

        $grid->column('id', __('ID'))->sortable();
        $grid->column('name', __('Назнание'))->sortable();
        $grid->column('percent', __('Процент'));
        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed   $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Tech::findOrFail($id));

        $show->field('id', __('ID'));
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
        $form = new Form(new Tech);
        $form->display('id', __('ID'));
        $form->text('name', __('Название'));
        $form->number('percent', __('Процент'));
        return $form;
    }

}
