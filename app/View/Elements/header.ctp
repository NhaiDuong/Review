<!DOCTYPE html>
<html>
<head>
    <?php echo $this->Html->charset(); ?>
    <title>
        <?php echo $this->fetch('title'); ?>
    </title>
    <?php
    echo $this->Html->meta('icon');
    echo $this->Html->css(array('main'));
    echo $this->Html->script(array('myScript'));
    echo $this->fetch('meta');
    echo $this->fetch('css');
    echo $this->fetch('script');
    ?>
</head>

<div id="wrap">
    <div id="wrap-container">
        <div id="topnav">
            <h1 id="sitename">Blog</h1>
            <ul id="nav">
                <li><?php echo $this->Html->link(__('Home'),'/posts/index',array());?></a></li>
<!--                <li>--><?php //echo $this->Html->link(__('Contact'),'/posts/index',array());?><!--</a></li>-->
<!--                <li>--><?php //echo $this->Html->link(__('About us'),'/posts/index',array());?><!--</a></li>-->
                <!--nocache-->
                <!--                    <li>-->
                <?php
                if ($this->Session->read('Auth.User')){
                    echo '<li>';
                    echo $this->Html->link(__('Logout'), array('action'=>'logout', 'controller'=>'users'));
                    echo '</li>';
                }
                else{
                    echo '<li>';
                    echo $this->Html->link(__('Login'),array('action'=>'login', 'controller'=>'users'));
                    echo '</li>';
                }

                ?>
                <!--                    </li>-->
            </ul>
            <ul id="lang">
                <li>
                    <?php
                    //                        if (isset($user)) {
                    echo $this->Html->link(__('Eng'), array('language' => 'eng'));
                    echo "|";
                    echo $this->Html->link(__('Vie'), array('language' => 'vie'));
                    //                        }
                    //                        ?>
                </li>
            </ul>
            <!--/nocache-->
        </div>
        <div id="header">
            <div id="featuredpost">
                <div id="featuredthumb">
                    <?php echo $this->Html->image('/img/featuredimage.jpg',
                        array(
                            'alt' => 'featuredimage',
                            'class' => 'shadow',
                            'width' => '200',
                            'height' => '135'
                        ));
                    ?>
                </div>
                <div id="featuredcontent">
                    <h2><span>Hello World</span></h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam blandit facilisis viverra. Nullam id tristique arcu.
                        Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla vehicula eros commodo est vestibulum cursus..
                        <span class="readmore">
                  <?php echo $this->Html->link(__('read more'), array('controller'=>'posts', 'action'=>'view', 'slug'=>'hello-world'));?>
              </span>
                    </p>
                </div>
                <div class="clear"></div>
            </div>
        </div>