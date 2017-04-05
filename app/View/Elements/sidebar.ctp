<div id="sidebar">
<!--    --><?php //echo $this->element('search');?>
    <div id="sb_container">
        <?php
        if ($this->Session->read('Auth.User')){
//                        echo "náhdf";die;
            ?>
            <h2>
                        <span class="list_user">
                              <?php
                              echo $this->Html->link(__('Add new post'), array('controller' => 'posts','action' => 'add'));
                              ?>
                        </span>
            </h2>
        <?php } ?>
        <h2>
                          <span class="list_user">
                              <?php echo $this->Html->link(__('List users'), array('controller' => 'users','action' => 'index'));?>
                          </span>
        </h2>
        <h2><span class="list_user">
                            <?php echo $this->html->link(__('Older Posts'), '#', array('onclick'=>'return false;')); ?>
                        </span></h2>
        <div class="posts">
            <ul>
                <?php if (Cache::read('modified')){
                    $modified = Cache::read('modified');
                    foreach ($modified as $modified){ ?>
                        <li><?php echo $this->Html->link(__($modified['Post']['title']), array('controller' => 'posts', 'action' => 'view', 'slug' => $modified['Post']['slug']));?></a></li>
                    <?php        }}?>
            </ul>
        </div>
        <h2>
                        <span class="list_user">
                            <?php echo $this->html->link(__('Latest Posts'), '#', array('onclick'=>'return false;')); ?>
                        </span>
        </h2>
        <!--nocache-->
        <div class="posts" id="latest">
            <ul>
                <?php if (isset($latest)){
                    foreach ($latest as $latest){ ?>
                        <li><?php echo $this->Html->link(__($latest['Post']['title']), array('controller' => 'posts', 'action' => 'view', 'slug' => $latest['Post']['slug']));?></a></li>
                    <?php        }}?>
            </ul>
        </div>
        <!--/nocache-->
    </div>
</div>
<div class="clear"></div>
</div>
</div>