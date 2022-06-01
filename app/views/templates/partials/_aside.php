<div class="col-lg-4 sidebar pl-lg-5 ftco-animate">
    <div class="sidebar-box">
        <form action="#" class="search-form">
            <div class="form-group">
                <span class="icon icon-search"></span>
                <input type="text" class="form-control" placeholder="Type a keyword and hit enter">
            </div>
        </form>
    </div>
    <div class="sidebar-box ftco-animate">
        <?php include '../app/modeles/categoriesmodel.php'; 
        $categories = findCat($connexion);

        include '../app/views/categories/index.php';
        ?>
    
    </div>

    <div class="sidebar-box ftco-animate">
        <h3>Recent Blog</h3>
        <?php
        $recentPosts = findRecent($connexion);

        include '../app/views/posts/_recent.php';
        ?>
    </div>

    <div class="sidebar-box ftco-animate">
        <h3>Tag Cloud</h3>
        <div class="tagcloud">
            <a href="#" class="tag-cloud-link">cat</a>
            <a href="#" class="tag-cloud-link">abstract</a>
            <a href="#" class="tag-cloud-link">people</a>
            <a href="#" class="tag-cloud-link">person</a>
            <a href="#" class="tag-cloud-link">model</a>
            <a href="#" class="tag-cloud-link">delicious</a>
            <a href="#" class="tag-cloud-link">desserts</a>
            <a href="#" class="tag-cloud-link">drinks</a>
        </div>
    </div>

</div>