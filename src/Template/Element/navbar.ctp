<div class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
      <div class="container">
        <a href="/users/index" class="navbar-brand">Cakephp Security</a>
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
         <ul class="navbar-nav ml-auto">
           <?php $loginUser = $this->request->getSession()->read('Auth.User') ?>
             <?php if($loginUser) { ?>
              <button type="button" class="blinker"><?php $loggedUser =$this->request->getSession()->read('Auth.User.emailaddress');
                echo $loggedUser; ?></button>
               
           <li class="nav-item">
            <?php echo $this->Html->link('<i class="fa fa-sign-in" aria-hidden="true"></i> Log Out',"/users/logout",["class"=>"nav-link","escape"=>false]);  ?>
            </li>
              <?php }else {  ?>
            
            <li class="nav-item">
              <?php echo $this->Html->link('<i class="fa fa-sign-out" aria-hidden="true"></i>Log In',"/users/login",["class"=>"nav-link","escape"=>false]); ?>
            </li>
              <?php } ?>
         </ul>
        </div>
      </div>
    </div>
