
    <div class="col-md-8 offset-md-3"></div>
    <div class="col-md-8 offset-md-3">
    <span class="badge badge-danger"><?= __('Users') ?></span>
    <div class="card border-info">
        <div class="card-header">ADD User <?php 
                    echo $this->Html->link(
                    "< Back",
                    "users/index",
                    [
                    "class"=>"btn btn-info float-right",
                    "style"=>"margin-top:-6px;"
                    ]
                );?> 
        </div>
        


    <?= $this->Form->create($user); ?>
   
         <div class="form-group">   
            <div class="col-sm-10">
                <?php
            echo $this->Form->control('emailaddress',['class'=>'form-control', 'required']); 
                ?>
            </div>
        </div>
        <div class="form-group">   
            <div class="col-sm-10">
        <?php echo $this->Form->control('password',['class'=>'form-control']); ?>
            </div>
        </div>
         <div class="form-group">   
            <div class="col-sm-10">
        <?php echo $this->Form->control('role',['class'=>'form-control', 'required']); ?>
    </div>
</div>
        
    <div class="form-group">   
      <div class="col-sm-10">
        <?php echo "<br>";
        echo $this->Form->submit('Submit', ['class' => 'btn btn-success']);  ?>
      </div>
    </div>
    <?= $this->Form->end() ?>
 </div>
</div>

 
