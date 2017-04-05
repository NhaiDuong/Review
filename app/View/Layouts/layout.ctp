 <?php
    echo $this->element('header');
    echo $this->fetch('content', array(), array('cache' => false));
    echo $this->element('footer');
 ?>
