<?php
 include_once("top.php");
?>
<div class="container"><script> 
      $(document).ready(function(){ 
      $('#circleContent').carousel({interval:5000});//每隔5秒自动轮播 
      }); 
     </script> 
    
     <div id="circleContent" class="carousel slide"> 
      <ol class="carousel-indicators"> 
      <li data-target="#circleContent" data-slide-to="0" class="active"></li> 
      <li data-target="#circleContent" data-slide-to="1"></li> 
      <li data-target="#circleContent" data-slide-to="2"></li> 
      </ol> 
      <div class="carousel-inner"> 
      <div class="item active"> 
       <img src="images/1.jpg"> 
      </div> 
      <div class="item"> 
       <img src="images/3.jpg">
      </div> 
      <div class="item">
       <img src="images/2.jpg">
      </div>
      </div>
      <a class="carousel-control left" href="#circleContent" data-slide="prevent">‹</a> 
      <a class="carousel-control right" href="#circleContent" data-slide="next">›</a> 
     </div></div>
<link href="css/center.css" rel='stylesheet' type='text/css' />
<div class="main-content">
	<div class="container">
		<h3 class="tittle bottom"><i class="glyphicon glyphicon-globe"></i>推荐产品<a href="shops.php" class="text-muted pull-right">More &gt;&gt;</a></h3>
		<div class="grid">
			<?php
				$sql=mysql_query("select * from shangpin where tuijian=1 order by id desc limit 0,3",$conn);
				while($row=mysql_fetch_array($sql))
				{
			?>
			<div class="col-md-4 m-b">
				<a href="shopshow.php?id=<?php echo $row['id'];?>">
                	<figure class="effect-layla">
						<img src="<?php echo __BASE__;?>/upimages/<?php echo $row["tupian"];?>" />
						<figcaption><h4>会员价：<?php echo $row['huiyuanjia'];?><span style="text-decoration:line-through">市场价：<?php echo $row['shichangjia'];?></span></h4></figcaption>
					</figure>
				</a>
				<div class="m-b-text">
					<a href="shopshow.php?id=<?php echo $row['id'];?>&typeid=<?php echo $row['typeid'];?>" class="wd"><?php echo $row['mingcheng'];?></a>
					<a class="read" href="shopshow.php?id=<?php echo $row['id'];?>&typeid=<?php echo $row['typeid'];?>">查看详细</a> <a class="order" href="addgouwuche.php?id=<?php echo $row['id'];?>">加入购物车</a>
				</div>
			</div>
            <?php
                }
			?>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<div class="main-content margin-2">
	<div class="container">
		<h3 class="tittle bottom"><i class="glyphicon glyphicon-globe"></i>最新产品<a href="shops.php" class="text-muted pull-right">More &gt;&gt;</a></h3>
		<div class="grid">
			<?php
				$sql=mysql_query("select * from shangpin order by addtime desc limit 0,6",$conn);
				while($row=mysql_fetch_array($sql))
				{
			?>
			<div class="col-md-4 m-b">
				<a href="shopshow.php?id=<?php echo $row['id'];?>">
                	<figure class="effect-layla">
						<img src="<?php echo __BASE__;?>/upimages/<?php echo $row["tupian"];?>" />
						<figcaption><h4>会员价：<?php echo $row['huiyuanjia'];?><span style="text-decoration:line-through">市场价：<?php echo $row['shichangjia'];?></span></h4></figcaption>
					</figure>
				</a>
				<div class="m-b-text">
					<a href="shopshow.php?id=<?php echo $row['id'];?>" class="wd"><?php echo $row['mingcheng'];?></a>
					 <a class="read" href="shopshow.php?id=<?php echo $row['id'];?>&typeid=<?php echo $row['typeid'];?>">查看详细</a> <a class="order" href="addgouwuche.php?id=<?php echo $row['id'];?>">加入购物车</a>
				</div>
			</div>
            <?php
                }
			?>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<?php
 include_once("foot.php");
?>