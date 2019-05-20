<aside class="right-side">

        <ul class="breadcrumb">
<li class="active">Home</li>
</ul>
    <!-- Main content -->
    <section class="content">
        <div class="add-category">
            <h3>Add question</h3>
            <form action="insert_question.php" method="post">
            <div class="form-group">
                <label for="name_q">Question:</label>
                <input type="text" class="form-control" id="name_q" name="name_q">
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
            <div class="form-group">
            <label for="test">Select the test:</label>
                <select name="test" class="form-control">
                    <option disabled>Select the test:</option>
                    <?php
                    include_once("php_includes/db_conx.php");
                    $userData = mysqli_query($db_conx,"select * from tests");
                    while($row = mysqli_fetch_assoc($userData)){
                        echo "<option value='".$row['test_id']."'>".$row['test_name']."</option>";
                    }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label for="right_answer">Right answer:</label>
                <input type="text" class="form-control" id="right_answer" name="right_answer">
            </div>
            <div class="form-group">
                <label for="other_answer1">Other answer:</label>
                <input type="text" class="form-control" id="other_answer1" name="other_answer1">
            </div>
            <div class="form-group">
                <label for="other_answer2">Other answer:</label>
                <input type="text" class="form-control" id="other_answer2" name="other_answer2">
            </div>
            <button type="submit" class="btn btn-default">Add the category</button>
            </form>
        </div>
    </section>
</aside>
</div>