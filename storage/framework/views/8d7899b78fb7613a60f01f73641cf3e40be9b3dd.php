<?php $__env->startSection('content'); ?>
        <div class="ul">
    
        
            <li><a href="/index.blade">Home</a></p>
            <li><a href="/About.blade">About</a></p>
            <li><a href="/Achievements.blade">Achievements</a></p>
            <li><a href="/rules.blade">Rules&Regulations</a></li>
            <li><a class="active" href="/form.blade">Form</a></li>
            <link rel="stylesheet" type="text/css" href="style.css">
        
</div>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>