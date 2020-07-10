<?php 
//action.php
if(isset($_POST["action"]))
{
	include('./includes/conn1.php');
	if($_POST["action"]=='fetch')
	{
		$output ='';
		$query = "SELECT * FROM  booking WHERE status = 'pending' ORDER BY tdate DESC;";
		$statement = $connect->prepare($query);
		$statement->execute();
		$result = $statement->fetchAll();
		$output .='
         <table class="table table-bordered table-striped">
         <tr>
            <td>Scrap Buyer No.</td>
            <td>Scrap Buyer Name</td>
            <td>Contact</td>
            <td>Scrap Services Cost</td>
            <td>Item Description</td>
            <td>Date</td>
            <td>Time</td>
            <td>Status</td>
           <td>Action</td> 
         </tr>
        
		';
		foreach ($result as $row) 
		{
		  $status = '';
		  if($row["status"] == 'accept')
		  {
             $status = '<span class="label label-success">accept</span>';
		  }	
		  else
		  {
               $status = '<span class="label label-danger">pending</span>';
		  }
		  $output .='
             <tr>
                <td>'.$row["jk_no"].'</td>
                <td>'.$row['firstname']." ".$row['lastname'].'</td>
                <td>'.$row["contact"].'</td>
                <td>'.$row["servtype"].'</td>
                 <td><img src="../uploads/'. $row['image'] .'" width="100px" height="100px" style="border:1px solid #333333;" alt="" class="img-responsive" ></td>
                <td>'.$row["tdate"].'</td>
                <td>'.$row["dtime"].'</td> 
                <td>'.$status.'</td>
                <td>
                    <button type="button" name="action" class="btn btn-info btn-xs action" data-jk_no="'.$row["jk_no"].'" data-status="'.$row["status"].'">Accept</button>
                </td>
            </tr>
		  ';
		}
		$output .= '</table>';
		echo $output;
	}
	
	if ($_POST["action"] == 'change_status') {
		$status = '';
		if($_POST['status'] == 'accept') {
             $status = 'pending;';
		} else {
             $status = 'accept';
		}
		
		$query =  'UPDATE booking  SET status = :status WHERE jk_no = :jk_no';
		$statement = $connect->prepare($query);
		$statement->execute(

			array(
				':status'=> $status,
				':jk_no'=> $_POST['jk_no']

			)
		); 
		$result = $statement->fetchAll();
		if(isset($result))
		{
			echo '<div class="alert alert-success">Appointment status has been set to be <strong>'.$status.'</strong></div>';
		}
	}
}	

?>