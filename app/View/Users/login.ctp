<!-- START PAGE SOURCE -->
        <div id="content">
            <div class="notification">
                <h2><?php echo $this->Session->flash('loginError');?></h2>
            </div>
            <div class="login-form">
                <h3 id="respond"><?php echo __('LOGIN');?></h3>
                <?php echo $this->Session->flash('auth');?>
                <?php echo $this->Form->create('User', array('id' => 'comment-form')); ?>
                <?php echo $this->Form->input('username',array('placeholder' => 'Username', 'id' => 'comment-name', 'class' => 'formid', 'label' => '')); ?>
                <?php echo $this->Form->input('password', array('placeholder' => 'Password', 'label' => '')); ?>
                <div>
                    <p><?php echo __("You haven't had any account");?></p>
                    <p><?php echo $this->Html->link(__('Register here.'), array('controller'=>'users', 'action'=>'add'));?></p>
                </div>
                <?php echo $this->Form->button(__('Login', array('class' => 'button'))); ?>
            </div>
            <div class="clear"></div>

        </div>
</div>
