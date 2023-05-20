<?php $this->need('public/secheader.php'); 
if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<div id="main-container" class="animate__animated animate__fadeIn">

	<div id="post-container" role="main">
		<div id="post-data">
			<h2><?php $this->title() ?></h2>
			<div id="post-data-detail">
				<span class="category"><?php $this->category(','); ?></span><br></br>
				<span class="tags"><?php $this->tags(',', true, ''); ?></span>
				<span class="date"><?php $this->date('Y/m/d'); ?></span>
			</div>
		</div>
		<div id="post-content" class="typo">
		  <p><?php $this->content(); ?></p>
		</div>
	</div>

	      <script>
      //手机端导航栏控制函数
      $("#m-nav-switch").click(function(){
        if($("#header-nav-m").css("display")=='none'){
      		 $("#header-nav-m").slideDown();
           $(this).animate(
           　　{opacity:'toggle'},
           　　200,
           　　null,
           　　function(){
           　　　　$("#m-nav-switch").attr("src","<?php $this->options->siteUrl(); ?>/usr/themes/nosky/assets/img/x.svg");
           　　　　$("#m-nav-switch").animate({opacity:'toggle'},200);
           　　}
           );
      	}else{
      		 $("#header-nav-m").slideUp();
           $(this).animate(
           　　{opacity:'toggle'},
           　　200,
           　　null,
           　　function(){
           　　　　$("#m-nav-switch").attr("src","<?php $this->options->siteUrl(); ?>/usr/themes/nosky/assets/img/menu.svg");
           　　　　$("#m-nav-switch").animate({opacity:'toggle'},200);
           　　}
           );
      	 }
      });
      </script>
</div>
</body>