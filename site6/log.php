<?php
include_once('functions.php');

//echo($_POST['form_input']);

$db_data = file_get_contents('data.json');
$db_array = json_decode($db_data, 1); // 1 for ASSOC = TRUE
krsort($db_array); // reverse key sort lib function

if (isset($_POST['form_input'])) {
    $time = time();
    $db_array[$time]['id'] = $time;
    $db_array[$time]['task'] = $_POST['form_input'];
	$db_array[$time]['date_start'] = $time;
	$db_array[$time]['date_entered'] = $time;
    $db_array[$time]['date_end'] = $time;
    $db_array[$time]['status'] = 1;
    save($db_array);
}

foreach($db_array as $item) { ?>
    <tr>
    <td><?php echo($item['task']); ?></td>
    <td><?php echo(date_disp($item['date_start'])); ?></td>
    <td><?php echo(date_disp($item['date_end'])); ?></td>
    <td><?php echo(date_disp($item['date_entered'])); ?></td>
    <td><button class="btn btn-primary">Stop</button></td>
    <td><button class="btn btn-danger">X</button></td>
    </tr>
<?php } ?>

<?php
/*
include('functions.php');

# -------------------------------
# Intital Setup
# -------------------------------

$log = 'data.json'; // Path to log
$json = file_get_contents($log); // Load log contents
$data = json_decode($json, true); // Convert JSON to array
if(is_array($data)){
	krsort($data); // Sort by ID;
}

# -------------------------------
# Modes
# -------------------------------

# If mode has been set:
if(isset($_GET['mode'])){
  
  # Handle each mode type:
  switch($_GET['mode']){
   
    # Output data array for debugging:
    case 'debug':
      echo '<pre>';
      print_r($data);
      echo '</pre>';     
    break;
    
    # Build a new task record:
    case 'new':
      $id = time();
      $data[$id]['id'] = $id;
      $data[$id]['task'] = $_GET['task'];
      $data[$id]['date_start'] = $id;
      $data[$id]['date_end'] = '';
      $data[$id]['date_entered'] = $id;
      $data[$id]['status'] = 1;
      save($data); // Save changes
    break;
    
    # Restore task record by setting it to active:
    case 'status':  
      $id = $_GET['id']; // Record ID
      $data[$id]['status'] = 1; // Set the status to active
      save($data); // Save changes
    break; 
    
    # Delete task record by setting it to inactive:
    case 'delete':  
      $id = $_GET['id']; // Record ID
      $data[$id]['status'] = 3; // Set the status to inactive
      save($data); // Save changes
    break; 
    
    # Stop task timer:
    case 'stop':
      $id = $_GET['id'];
      $data[$id]['date_end'] = time();
      save($data); // Save changes
    break; 
    
    # Build the task log table:   
    case 'build':
   
      # If there is any data:	
   		if(is_array($data)){
      	
      	# Run through each record:
	      foreach($data as $task){
	        
	        # Ignore inactive records:
	        if($task['status'] == 1){
	        	if($task['date_start'] != '' && $task['date_end'] != ''){
	        		$seconds = $task['date_end'] - $task['date_start']; 	        		
						}else{
							$seconds = time() - $task['date_start'];
						}
	        	?>
	          
	          <tr>
	            <td><?php echo $task['task']?></td>
	            <td><?php echo date_nice($task['date_start']); ?></td>
	            <td><?php echo ($task['date_end'] != '') ? date_nice($task['date_end']) : ''; ?></td>
	            <td data-seconds="<?php echo $seconds; ?>"><?php time_nice($seconds); ?></td>
	            <td class="btn-cell">
	              <button data-id="<?php echo $task['id']; ?>" class="btn btn-block btn-primary btn-stop"  <?php echo ($task['date_end'] != '') ? 'disabled' : ''; ?>><?php echo i('stop'); ?></button>
	            </td>
	            <td class="btn-cell">
	              <button data-id="<?php echo $task['id']; ?>" class="btn btn-block btn-danger btn-delete"><?php echo i('times'); ?></button>
	            </td>
	          </tr> 
      
    	<?php }}} // END if, foreach, if is_array
 
    break;  
    
    # Restore records table:   
    case 'restore':
		
			# If there is any data:	
	   	if(is_array($data)){
	      
	      # Run through each record:
	      foreach($data as $task){
	        
	        # Ignore inactive records:
	        if($task['status'] != 1){ ?>
	          
	          <tr>
	            <td><?php echo $task['task']; ?></td>
	            <td><?php echo date_nice($task['date_start']); ?></td>
	            <td><?php echo ($task['date_end'] != '') ? date_nice($task['date_end']) : ''?></td>
	            <td>
	             <?php if($task['date_start'] != '' && $task['date_end'] != ''){
	                time_nice($task['date_end'] - $task['date_start']);
	              }else{
	                echo  0;
	              }; ?>
	            </td>
	            <td class="btn-cell">
	              <?php if($task['date_end'] == ''){?>
	                <button data-id="<?php echo $task['id']; ?>" class="btn btn-block btn-primary btn-stop"><?php echo i('stop'); ?></button>
	              <?}?>
	            </td>
	            <td class="btn-cell">
	              <button data-id="<?php echo $task['id']; ?>" class="btn btn-block btn-primary btn-restore"><?php echo i('refresh'); ?></button>
	            </td>
	          </tr> 
	      
	    <?php }}} // END if, foreach, if is_array

    break;  
		
		# Tally results:      
    case 'tally':
   
      $count = 0; // Initial value for tally
      
      # If there is any data:	
   		if(is_array($data)){
   			  
	      # Run through each record:  
	      foreach($data as $task){
	        
	        # Ignore inactive records:
	        if($task['status'] == 1){
	          
	          # If task has not stopped yet
	          if($task['date_end'] == ''){
	            $task['date_end'] = time(); // Set the end date to now
	          } // END if
	          
	          $current = $task['date_end'] - $task['date_start']; // Number of seconds for task
	          $count = $count + $current; // Add to tally
	        
	        } // END if
	      } // END foreach 
			} // END if is_array
			
      time_nice($count); // Return the time.
   
    break;    
   
 } // END switch
  
}; 
*/
?>
<!--
<pre>
<?php// print_r($db_array); ?>
</pre>
-->