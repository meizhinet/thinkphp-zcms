<?php if (!defined('THINK_PATH')) exit(); if(is_array($category)): $i = 0; $__LIST__ = $category;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cate): $mod = ($i % 2 );++$i; if(($current) == $cate['id']): ?><li class="current">
			<a href="<?php echo ($cate["url"]); ?>">
				<?php echo ($cate["title"]); ?>
			</a>
		</li>
	<?php else: ?>
		<li>
			<a href="<?php echo ($cate["url"]); ?>">
				<?php echo ($cate["title"]); ?>
			</a>
		</li><?php endif; endforeach; endif; else: echo "" ;endif; ?>