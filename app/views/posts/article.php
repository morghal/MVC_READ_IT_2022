<div class="col-lg-8 ftco-animate">
          	<p class="mb-5">
              <img src="../public/assets/images/<?php echo $post['image'] ?>" alt="" class="img-fluid">
            </p>

            <h1 class="mb-3 h1"><?php echo $post['title'] ?></h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis, eius mollitia suscipit, quisquam doloremque distinctio perferendis et doloribus unde architecto optio laboriosam porro adipisci sapiente officiis nemo accusamus ad praesentium? Esse minima nisi et. Dolore perferendis, enim praesentium omnis, iste doloremque quia officia optio deserunt molestiae voluptates soluta architecto tempora.</p>
            <p>Molestiae cupiditate inventore animi, maxime sapiente optio, illo est nemo veritatis repellat sunt doloribus nesciunt! Minima laborum magni reiciendis qui voluptate quisquam voluptatem soluta illo eum ullam incidunt rem assumenda eveniet eaque sequi deleniti tenetur dolore amet fugit perspiciatis ipsa, odit. Nesciunt dolor minima esse vero ut ea, repudiandae suscipit!</p>

            <!--TAG LIST-->
            <?php include_once '../app/controllers/tagsController.php';
              indexByPostIdAction($connexion, $post['id']);
          ?>

            <!--AUTHOR INFO-->
            <?php include '../app/views/authors/show.php'; ?>

            <!--COMMENTS -->
            <?php include '../app/controllers/commentsController.php'; 
            commentAction($connexion, $post['id']);
            ?>
          </div>