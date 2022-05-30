<div class="pt-5 mt-5">
              <h3 class="mb-5">3 Comments</h3>
              <ul class="comment-list">
              <?php foreach($comments as $comment) { ?>
                <li class="comment">
                  <div class="comment-body">
                    <h3><?php echo $comment['pseudo'] ?></h3>
                    <div class="meta mb-3"><?php echo getFormatedDate($comment['created_at'],'y-m-d h:m') ?></div>
                    <p><?php echo $comment['content']?></p>
                  </div>
                </li>
                <?php }?>
              </ul>
            </div>