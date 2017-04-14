<div class="container-fluid" id="header">
	<div class="row">
		<nav class="navbar">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">
						<img src="<?php echo $baseUrl; ?>images/logo.jpg" class="img-responsive" alt="">
					</a>
				</div>

				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="http://huluanpao.com" target="_blank">品牌官网</a></li>
						<li class=""><a href="<?php echo $baseUrl; ?>">首页</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
								赛事专题<span class="caret"></span></a>
							<ul class="dropdown-menu">
								<!--								<li><a href="#">有关赛事</a></li>-->
								<li><a href="<?php echo $baseUrl; ?>race/rule.html">竞赛规程</a></li>
								<li><a href="<?php echo $baseUrl; ?>race/map.html">赛事线路图</a></li>
								<li><a href="<?php echo $baseUrl; ?>race/accommodation.html">交通和酒店</a></li>
								<li><a href="https://weidian.com/?userid=1141077221&wfr=c" target="_blank">官方微店</a></li>
								<li><a href="<?php echo $baseUrl; ?>race/faq.html">常见问题</a></li>
							</ul>
						</li>
						<li>
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
								赛事报名<span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="<?php echo $baseUrl; ?>signup/guidelines.html">报名须知</a></li>
								<li><a href="<?php echo $baseUrl; ?>signup.html">立即报名</a></li>
								<li><a href="<?php echo $baseUrl; ?>signup/query.html">报名查询</a></li>
							</ul>
						</li>
						<li>
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
								成绩与照片<span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="<?php echo $baseUrl; ?>result.html">成绩查询</a></li>
								<li><a href="<?php echo $baseUrl; ?>photos.html">照片下载</a></li>
							</ul>
						<li><a href="#">赛事赞助</a></li>
						<li class="last flag">
							<a href="#" class="pull-left active"><img src="<?php echo $baseUrl; ?>images/flag1.jpg" alt=""></a>
							<a href="<?php echo $baseUrl; ?>en" class="pull-left"><img src="<?php echo $baseUrl; ?>images/flag2.jpg" alt=""></a>
						</li>
					</ul>
				</div><!-- /.navbar-collapse -->
			</div><!-- /.container-fluid -->
		</nav>
	</div>
</div>
