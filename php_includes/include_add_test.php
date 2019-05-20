<aside class="right-side">

        <ul class="breadcrumb">
<li class="active">Home</li>
</ul>
    <!-- Main content -->
    <section class="content">s
        <div class="add-category">
            <h3>Add category</h3>
            <form action="insert_category.php" method="post">
            <div class="form-group">
                <label for="name_cat">Name of category:</label>
                <input type="text" class="form-control" id="name_cat" name="name_cat">
            </div>
            <div class="form-group">
                <label for="image_cat">Image:</label>
                <input type="text"class="form-control" id="image_cat" name="image_cat">
            </div>
            <button type="submit" class="btn btn-default">Add the category</button>
            </form>
        </div>

        <div class="add-category">
            <h3>Add new test</h3    >
            <form action="insert_test.php" method="post">
            <div class="form-group">
                <label for="name_test">Name of test:</label>
                <input type="text" class="form-control" id="name_test" name="name_test">
            </div>
            <div class="form-group">
                <label for="description_test">Description of test:</label>
                <textarea class="form-control" id="description_test" name="description_test"></textarea>
            </div>
            <div class="form-group">
            <label for="category">Select the category of test:</label>
                <select name="category" class="form-control">
                    <option disabled>Select the category of test:</option>
                    <?php
                    include_once("php_includes/db_conx.php");
                    $userData = mysqli_query($db_conx,"select * from category_test");
                    while($row = mysqli_fetch_assoc($userData)){
                        echo "<option value='".$row['category_id']."'>".$row['category_name']."</option>";
                    }
                    ?>
                </select>
            </div>
            <button type="submit" class="btn btn-default">Add new test</button>
            </form>
        </div>

    </section>
</aside>
</div>