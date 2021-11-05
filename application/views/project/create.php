<br/>
<a
    class="btn btn-danger float-right"
    href=""> 
    Logout
</a>
<h2 class="text-center mt-5 mb-3"><?php echo $title; ?></h2>
<div class="card">
    <div class="card-header">
        <a class="btn btn-info float-right" href="<?php echo base_url('project');?>"> 
            Display All Transportees
        </a>
    </div>
    <div class="card-body">
        <?php if ($this->session->flashdata('errors')) {?>
            <div class="alert alert-danger">
                <?php echo $this->session->flashdata('errors'); ?>
            </div>
        <?php } ?>
        <form action="<?php echo base_url('project/store');?>" method="POST">
            <div class="form-group">
                <label for="name">Full Name</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="form-group">
            <label for="description">Details</label>
            <textarea class="form-control" id="description" rows="3" name="description"></textarea>
            </div>
            <div class="form-group">
                <label for="morning_dep">Morning Departure</label>
                <textarea class="form-control" id="morning_dep" rows="3" name="morning_dep"></textarea>
            </div>
            <div class="form-group">
                <label for="afternoon_dep">Afternoon Departure</label>
                <textarea class="form-control" id="afternoon_dep" rows="3" name="afternoon_dep"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Add</button>
        </form>
       
    </div>
</div>