    <div class="col-md-8 offset-md-3"></div>
    <div class="col-md-8 offset-md-3">
    <span class="badge badge-danger"><?= __('Users') ?></span>
    <div class="card border-info">
        <div class="card-header">Login Here...<?php 
                    echo $this->Html->link(
                    "< Back",
                    "users/index",
                    [
                    "class"=>"btn btn-info float-right",
                    "style"=>"margin-top:-6px;"
                    ]
                );?> 
        </div>
        

<div class="users form">
<?= $this->Flash->render('auth') ?>
    <?= $this->Form->create() ?>
   
        <div class="form-group">   
            <div class="col-sm-10">
        <?= $this->Form->control('emailaddress',['class'=>'form-control', 'required']) ?>
    		</div>
		</div>
		<div class="form-group">   
           <div class="col-sm-10">
        <?= $this->Form->control('password',['class'=>'form-control', 'required']) ?>
   		   </div>
   		</div>
	    <div class="form-group">   
           <div class="col-sm-10">   
         <?php echo "<br>";
        echo $this->Form->submit('Submit', ['class' => 'btn btn-danger']);  ?>
		   </div>
		</div>
    <?= $this->Form->end() ?>
</div>
</div>
<span class="badge badge-pill badge-info"> <marquee>Note:-Admin can Add new Users.</marquee></span>
</div>
