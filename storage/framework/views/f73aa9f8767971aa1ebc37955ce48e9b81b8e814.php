<?php $__env->startSection('content'); ?>
    <a class="btn btn-primary" href="/posts">Go back</a>
    <h1><?php echo e($data->title); ?></h1>
    <hr>
    <img style="width: 50%" src="/storage/cover_images/<?php echo e($data->cover_image); ?>" alt="">
    <hr>
    <h3>Created at <?php echo e($data->created_at); ?></h3>
    <hr>
    <h3>Last updated <?php echo e($data->updated_at); ?></h3>
    <hr>
    <h3>Created by <?php echo e($data->user->name); ?></h3>
    <div>
        <h4>Content</h4>
        
        <p><?php echo $data->body; ?></p>
        
    </div>
    <hr>
    <?php if(!Auth::guest()): ?>
        <?php if(Auth::user()->id == $data->user_id): ?>
            <a href="/posts/<?php echo e($data->id); ?>/edit" class="btn btn-default">Edit</a>
            <?php echo Form::open(['action' => ['PostsController@destroy',$data->id], 'method'=>'POST', 'class'=>'pull-right']); ?>

                <?php echo e(Form::hidden('_method', 'DELETE')); ?>

                <?php echo e(Form::submit('Delete',['class' => 'btn btn-danger'])); ?>

            <?php echo Form::close(); ?>   
        <?php endif; ?>
         
    <?php endif; ?>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>