<?php 

use source\libs\Resource;
use source\models\Menu;
use source\LuLu;


?>

            </div>
        </div>
        <!-- .site-main -->
</div>
    <footer class="site-footer" role="contentinfo">
        <div class="clearfix container">
            <div class="foot_menu">
                <div class="menu-%e9%a1%b5%e8%84%9a-container">
                    <ul id="menu-%e9%a1%b5%e8%84%9a" class="menu">
                        <?php $this->renderMenu('footer');?>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="clear"></div>
                <div class="col-sm-6 site-info" style="padding-top: 15px;">
                   
                    
                   
                </div>
            </div>
        </div>
        <!-- .site-footer -->
    </footer>
<div id="full"></div>
<script src="<?php echo $this->getThemeUrl()?>/js/news_top.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo $this->getThemeUrl()?>/js/scrolltop.js"></script>
<script type='text/javascript' src='<?php echo $this->getThemeUrl()?>/js/scripts.js?ver=1419744126'></script>

<?php echo $this->getConfigValue('sys_stat');?>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>