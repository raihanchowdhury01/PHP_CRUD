<div>
    <div>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
            <label for="category_name">Category Name</label><br>
            <input type="text" name="category_name" id=""><br><br>
            <label for="date">Category Date</label><br><br>
            <input type="date" name="date" id=""><br><br><br>
            <input type="submit" value="Submit" name="btn">
        </form>
    </div>
    <div>
        <a href="read.php">View Data</a>
    </div>
</div>