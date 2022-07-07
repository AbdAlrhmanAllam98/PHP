<?php include 'inc/header.php'; ?>
<h2>Past Feedback</h2>
<?php
$sql = 'SELECT * FROM comment';
// $result = mysqli_query($conn, $sql);
// $feedback = mysqli_fetch_all($result, MYSQLI_ASSOC);  view using foreach
$result=$conn->query($sql);
if($result->num_rows >0):
    while($row=mysqli_fetch_assoc($result)):
?> 
    <div class="card my-3 w-75">
        <div class="card-body text-center">
            <?php echo $row['body']; ?>
            <div class="text-secondary mt-2">
                By <?php echo $row['name']; ?>
            </div>
        </div>
   </div>
<?php
endwhile;
else:?>
<p class="lead mt-3 text-danger">There is no feedback</p>
<?php
endif;
?>
<?php include 'inc/footer.php'; ?>