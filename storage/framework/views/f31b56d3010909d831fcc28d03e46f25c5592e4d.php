<?php $__env->startSection('content'); ?>
    <h1>Create Post by <?php echo e(Auth::user()->name); ?></h1>
    <?php echo Form::open(['action' => 'PostsController@store','method' => 'POST', 'enctype'=>'multipart/form-data']); ?>

        <div class="form-group">
            <?php echo e(Form::label('title','Title')); ?>

            <?php echo e(Form::text('title','',['class' => 'form-control','placeholder' =>'Title'])); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('body','Content')); ?>

            <?php echo e(Form::textarea('body','',['id' => 'article-ckeditor','class' => 'form-control','placeholder' =>'Body Content'])); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::file('cover_image')); ?>

        </div>
        <?php echo e(Form::submit('Create',['class' => 'btn btn-primary'])); ?>

    <?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>