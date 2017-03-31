<!-- START PAGE SOURCE -->
        <div id="content">
            <div class="notification">
                <h2><?php echo $this->Session->flash('noResult');?></h2>
                <h2><?php echo $this->Session->flash('loginError');?></h2>
                <h2><?php echo $this->Session->flash('deletePostSuccess');?></h2>
                <h2><?php echo $this->Session->flash('login');?></h2>
                <h2><?php echo $this->Session->flash('addPostSuccess');?></h2>
                <h2><?php echo $this->Session->flash('editPostError');?></h2>
                <h2><?php echo $this->Session->flash('deletePostError');?></h2>
            </div>
            <div class="login-form" id="addPost">
                <h3 id="respond"><?php echo __('NEW POST');?></h3>
                <?php echo $this->Form->create('Post', array('id' => 'comment-form')); ?>
                <?php echo $this->Form->input('title',array('placeholder' => 'Title', 'id' => 'comment-name', 'class' => 'formid', 'label' => '')); ?>
                <?php echo $this->Form->input('body', array('placeholder' => 'Body', 'label' => '', 'type' => 'textarea')); ?>
                <?php echo $this->Form->button(__('Save', array('class' => 'button'))); ?>
            </div>
<!-- END PAGE SOURCE -->


