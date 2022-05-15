
<div class="row d-flex">
	<?php foreach($posts as $post): ?>
                <div class="col-md-6 d-flex ftco-animate">
                	<div class="blog-entry justify-content-end">
                    <a href="article.html" class="block-20" style="background-image: url('assets/images/<?php echo $post['image'] ?>');">
                    </a>
                    <div class="text p-4 float-right d-block">
                    	<div class="topper d-flex align-items-center">
                    		<div class="one py-2 pl-3 pr-1 align-self-stretch">
                    			<span class="day"><?php echo getFormatedDate($post['created_at'],'d') ?></span>
                    		</div>
                    		<div class="two pl-0 pr-3 py-2 align-self-stretch">
                          <span><?php echo getFormatedDate($post['created_at'],'m/y'); ?></span>
                    		</div>
                    	</div>
                    	<h3 class="heading mb-3"><a href="#"><?php echo $post['title']; ?></a></h3>
                      <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                      <p><a href="article.html" class="btn-custom"><span class="ion-ios-arrow-round-forward mr-3"></span>Read more</a></p>
                    </div>
                  </div>
                </div>
                <?php endforeach; ?>
                
              
              <div class="row mt-5">
                <div class="col text-center">
                  <div class="block-27">
                    <ul>
                      <li><a href="#">+</a></li>
                    </ul>
                  </div>
                </div>
              </div>
</div>