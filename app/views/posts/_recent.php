<?php foreach($recentPosts as $recentPost) { ?>
    <div class="block-21 mb-4 d-flex">
            <a class="blog-img mr-4" style="background-image: url(assets/images/<?php echo $recentPost['image'];?>"></a>
            <div class="text">
                <h3 class="heading"><a href="#"><?php echo $recentPost['title']; ?></a></h3>
                <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> <?php echo getFormatedDate($recentPost['created_at'], "y-m-d") ?></a></div>
                    <div><a href="#"><span class="icon-person"></span> <?php echo $recentPost['firstname'] ?></a></div>
                    <div><a href="#"><span class="icon-chat"></span> <?php echo $recentPost['nbrComments'] ?></a></div>
                </div>
            </div>
        </div>
<?php }?>