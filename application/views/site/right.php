		                  <!-- The Support -->
	     <div class="box-right">
                <div class="title tittle-box-right">
			        <h2> Hỗ trợ trực tuyến </h2>
			    </div>
			    <div class="content-box">
			         <!-- goi ra phuong thuc hien thi danh sach ho tro -->
			         <div class='support'>
                    <strong>Phạm Thành Nam </strong>				
          <a rel="nofollow" href="ymsgr:sendIM?tuyenht90">
		    <img  src="">
	      </a>
	      
	      <p>
	         <img style="margin-bottom:-3px" src="<?= public_url() ?>site/images/phone.png"> 0326 887 204	      </p>
	      
		  <p>
			<a rel="nofollow" href="mailto:hoangvantuyencnt@gmail.com">
			    <img style="margin-bottom:-3px" src="<?= public_url() ?>site/images/email.png"> Email: phamnamint
		    </a>
		  </p>
		  <p>
			<a rel="nofollow" href="skype:tuyencnt90">
			     <img style="margin-bottom:-3px" src="<?= public_url() ?>site/images/skype.png"> Skype: 00xx0			</a>
		</p>	
		</div>			        </div>
          </div>
       <!-- End Support -->
       
         <!-- The news -->
	          <div class="box-right">
                <div class="title tittle-box-right">
			        <h2> Bài viết mới </h2>
			    </div>
			    <div class="content-box">
			        <ul class='news'>
			            <?php foreach ($news_list as $news): ?>
			            <li>
			                <a href="news/view/4.html" title="<?= $news->title ?>">
			                <img src="<?= public_url() ?>site/images/li.png">
			                <?= $news->title ?>
			            	</a>
	                    </li>
	                <?php endforeach; ?>
	                    			          
	                </ul>
	    </div>
   </div>		<!-- End news -->
		
        <!-- The Ads -->
	       <div class="box-right">
                <div class="title tittle-box-right">
			        <h2> Quảng cáo </h2>
			    </div>
			    <div class="content-box">
			        <a href="">
					     <img  src="<?= public_url() ?>site/images/ads.png">
					</a>
			    </div>
		   </div>
		<!-- End Ads -->
		
		 <!-- The Fanpage -->
	       <div class="box-right">
                <div class="title tittle-box-right">
			        <h2> Fanpage </h2>
			    </div>
			    <div class="content-box">
			          
			        
	               
			    </div>
		   </div>
		<!-- End Fanpage -->
		
		 <!-- The Fanpage -->
	       <div class="box-right">
                <div class="title tittle-box-right">
			        <h2> Thống kê truy cập </h2>
			    </div>
			    <div class="content-box">
			        <center>
			        <!-- Histats.com  START  (standard)-->
					<script type="text/javascript">document.write(unescape("%3Cscript src=%27http://s10.histats.com/js15.js%27 type=%27text/javascript%27%3E%3C/script%3E"));</script>
					<a href="http://www.histats.com" target="_blank" title="hit counter" ><script  type="text/javascript" >
					try {Histats.start(1,2138481,4,401,118,80,"00011111");
					Histats.track_hits();} catch(err){};
					</script></a>
					<noscript><a href="http://www.histats.com" target="_blank"><img  src="http://sstatic1.histats.com/0.gif?2138481&101" alt="hit counter" border="0"></a></noscript>
				    <!-- Histats.com  END  -->
					</center>                
			    </div>
		   </div>
		<!-- End Fanpage -->