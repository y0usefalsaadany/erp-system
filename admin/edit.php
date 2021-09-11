<?php
require "header.php";

if(isset($_POST['send'])){
	$id = $_POST['id'];
	$name = $_POST['name'];
	$job = $_POST['job'];
	$time = $_POST['time'];
	$data = file_get_contents('json.json');
	$json_arr = json_decode($data, true);
	foreach ($json_arr as $key => $value) {
    if ($value['id'] == $id) {
        $json_arr[$key]['name'] = $name;
        $json_arr[$key]['job'] = $job;
        $json_arr[$key]['time'] = $time;
        file_put_contents('json.json', json_encode($json_arr,JSON_PRETTY_PRINT));
        echo "<div class='alert alert-success text-center'>updated</div>";
    }
}

	}
?>
    <h1 class="text-center col-12 bg-info py-3 text-white my-2">update User</h1>
    <div class="col-md-6 offset-md-3">
        <form class="my-2 p-3 border" method="POST" action="edit.php">
        	<div class="form-group">
                <label for="exampleInputName1">Id</label>
                <input type="text" value="<?php echo $_GET['id'];?>" name="id" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
            </div>
            <div class="form-group">
                <label for="exampleInputName1">Name</label>
                <input type="text" value="<?php echo $users['name'];?>" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
            </div>
            <div class="form-group">
                <label for="exampleInputName1">Job</label>
                <input type="text" value="<?php echo $users['job'];?>" name="job" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
            </div>
            <div class="form-group">
                <label for="exampleInputName1">Time</label>
                <input type="text" value="<?php echo $usera['age'];?>" name="time" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
            </div>
         
            <button type="submit" class="btn btn-primary" name="send">Submit</button>
        </form>
    </div>
   
<?php  require 'footer.php'; ?>
