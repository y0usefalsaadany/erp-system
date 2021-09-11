<?php
require "header.main.php";

?>
<h1 class="text-center col-12 bg-primary py-3 text-white my-2">Home Page</h1>
    <div class="row">
        <div class="col-sm-12">
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Job</th>
                    <th scope="col">Time</th>
                    </tr>
                </thead>
                <tbody>
                
                    <?php foreach( $users as $user): ?> 
                    <tr>
                        <th><?php echo $user['id'];?></th>
                        <td><?php echo $user['name'];?></td>
                        <td><?php echo $user['job'];?></td>
                        <td><?php echo $user['time'];?></td>
                    </tr>
                    <?php endforeach;?>
               
                
                </tbody>
            </table>
        </div>
    </div>

<?php include "footer.main.php";?>

	
	