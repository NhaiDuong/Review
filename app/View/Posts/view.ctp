<!-- START PAGE SOURCE -->
        <div id="content">
            <div id="left">
                <div class="post">
                    <div class="postleft">
                        <div class="postdate">
                            <span class="day">
                                <?php echo date('d', strtotime($post['Post']['created'])); ?>
                            </span>
                            <span class="month">
                                <?php echo date('M', strtotime($post['Post']['created']));?>
                            </span>
                        </div>
                        <div class="comments">
                            <span class="count"><a href="#">0</a></span>
                            <p>
                                <?php echo $this->Html->image('/img/view.png', array('alt' => 'view', 'width' => '25', 'height' => '25'));?>
                                <a href="#" class="view">
                                    <?php echo $post['Post']['viewCount'];?>
                                </a>
                            </p>
                        </div>
                    </div>
                    <div class="postcontent">
                        <div class="postheader">
                            <h2>
                                <?php echo h($post['Post']['title']);?>
                                <?php
                                    echo $this->Html->image("/img/edit.png", array(
                                        'alt' => 'edit',
                                        'width' => '15px',
                                        'height' => '15px',
                                        'title' => 'Edit',
                                        'url' => array('controller' => 'posts', 'action' => 'edit', $post['Post']['id'])
                                    ));
                                ?>
                                <?php
                                echo $this->Html->image("/img/delete.png", array(
                                    'alt' => 'delete',
                                    'width' => '15px',
                                    'height' => '15px',
                                    'title' => 'Delete',
                                    'url' => array('controller' => 'posts', 'action' => 'delete', $post['Post']['id'])
                                ));
                                ?>

                            </h2>
                            <span class="postmeta"><?php echo __('By ').($post['User']['username']); ?></span>
                        </div>
                            <p><?php echo h($post['Post']['body']); ?></p>
                        <div id="comments" class="comments-list">
                            <h2>2 Responses to &quot;Story of Lorem Ipsum&quot;</h2>
                            <div class="entry  alt">
                                <p class="avt">
                                    <?php echo $this->Html->image('/img/avatar.jpg', array('alt' => 'avatar', 'width' => '45', 'height' => '45'));?>
                                </p>
                                <p class="name">Roshan</p>
                                <p class="date"><a href="#">July 12th, 2009 at 10:25 am</a> </p>
                                <div class="con">
                                    <p>Mea eu volumus offendit, pro ei ferri ipsum saperet. Ea vocent splendide mea, minim doctus et has. Mel duis epicuri omnesque at, mea cu ferri scripta. Causae facilisi tincidunt eu eam, munere atomorum repudiandae at eum.</p>
                                    <p>Mel duis epicuri omnesque at, mea cu ferri scripta. Causae facilisi tincidunt eu eam, munere atomorum repudiandae at eum.</p>
                                </div>
                            </div>
                            <div class="entry " id="comment-4">
                                <p class="avt">
                                    <?php echo $this->Html->image('/img/avatar.jpg', array('alt' => 'avatar', 'width' => '45', 'height' => '45'));?>
                                </p>
                                <p class="name">admin</p>
                                <p class="date"><a href="#">July 19th, 2007 at 10:32 am</a> </p>
                                <div class="con">
                                    <p>Mei in saepe persius feugiat, postulant honestatis cu his, duo ea indoctum moderatius. Ut duo modo definiebas posidonium. Causae mentitum percipitur cum eu, usu dolor regione oporteat no. At iusto dolores electram eos, everti intellegat consectetuer eos id. Eum ut vero veniam verterem.</p>
                                </div>
                            </div>
                        </div>
                        <div class="comments-form">
                            <h3 id="respond">Add A Comment</h3>
                            <?php echo $this->Form->create('Comment', array('id'=>'comment-form')); ?>
                                <p>
                                    <?php  echo $this->Form->input('content', array('type'=>'textarea', 'label'=>'', 'cols'=>'50', 'rows'=>'8'));?>
                                </p>
                                <p>
                                    <?php echo $this->Form->end(__('Submit')); ?>
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <?php echo $this->element('sidebar');?>
