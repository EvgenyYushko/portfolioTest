<?php


namespace App\Admin\Controllers;


use App\Models\Skills;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class SkillsController extends AdminController
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
        $grid = new Grid(new Skills());

        $grid->column('id', __('ID'))->sortable();
        $grid->column('name', __('Назнание'))->sortable();
        $grid->column('desc', __('Описание'))->sortable();
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

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
        $show = new Show(Skills::findOrFail($id));

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
        $form = new Form(new Skills);

        $form->display('id', __('ID'));
        $form->text('name', __('Название'));
        $form->text('desc', __('Краткое описание'));
        $form->image('image', __('логотип'));
        $form->display('created_at', __('Created At'));
        $form->display('updated_at', __('Updated At'));

        return $form;
    }

}
