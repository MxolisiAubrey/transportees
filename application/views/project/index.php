<br/>
<h2 class="text-center mt-2 mb-6"><?php echo $title; ?></h2>
<div class="card">
    <div class="card-header">
        <a class="btn btn-primary" href="<?php echo base_url('project/create/');?>"> 
            New Transportee
        </a>
    </div>
    <div class="card-body">
        <?php if ($this->session->flashdata('success')) {?>
            <div class="alert alert-success">
                <?php echo $this->session->flashdata('success'); ?>
            </div>
        <?php } ?>
 
        <table class="table">
            <tr>
                <th>Full Name</th>
                <th>Details</th>
                <th>Morning Departure</th>
                <th>Afternoon Departure</th>
                <th width="240px">Action</th>
            </tr>
 
            <?php foreach ($projects as $project) { ?>      
            <tr>
                <td><?php echo $project->name; ?></td>
                <td><?php echo $project->description; ?></td> 
                <td><?php echo $project->morning_dep; ?></td>
                <td><?php echo $project->afternoon_dep; ?></td>          
                <td>
                    <a
                        class="btn btn-info "
                        href="<?php echo base_url('project/show/'. $project->id) ?>"> 
                        View
                    </a>
                    <a
                        class="btn btn-success"
                        href="<?php echo base_url('project/edit/'.$project->id) ?>"> 
                        Update
                    </a>
            <hr/>
                    <a
                        class="btn btn-danger"
                        href="<?php echo base_url('project/delete/'.$project->id) ?>"> 
                        Remove
                    </a>
                </td>     
            </tr>
            <?php } ?>
        </table>
    </div>