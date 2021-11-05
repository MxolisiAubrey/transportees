<br/>
<a
    class="btn btn-danger float-right"
    href=""> 
    Logout
</a>
<h2 class="text-center mt-5 mb-3"><?php echo $title;?></h2>
<div class="card">
    <div class="card-header">
        <a class="btn btn-info float-right" href="<?php echo base_url('project/');?>"> 
        Display All Transportees
        </a>
    </div>
    <div class="card-body">
       <b class="text-muted">Full Name:</b>
       <p><?php echo $project->name;?></p>
       <b class="text-muted">Details:</b>
       <p><?php echo $project->description;?></p>
       <b class="text-muted">Morning Departure:</b>
       <p><?php echo $project->morning_dep;?></p>
       <b class="text-muted">Afternoon Departure:</b>
       <p><?php echo $project->afternoon_dep;?></p>
       
    </div>
</div>