<?php 
    $title = 'View Records';
    require_once 'includes/header.php'; 
    require_once 'db/conn.php'; 

    // Get all Data from attendees table
    $results = $crud->getAttendees();
?>
   
   <table class="table">
    <tr>
        <th>#</th>
        <th>Firt Name</th>
        <th>Last Name</th>
        <th>Specialty</th>
        <th>Actions</th>
    </tr>
 
    <?php while($r = $results->fetch(PDO::FETCH_ASSOC)){ ?>
        <tr>
        <td><?php echo $r['attendee_id']; ?></td>
        <td><?php echo $r['firstname']; ?></td>
        <td><?php echo $r['lastname']; ?></td>
        <td><?php echo $r['specialty']; ?></td>
        <td>
        <a href="view.php?id=<?php echo $r['attendee_id']; ?>" class="btn btn-primary">View</a>
        <a href="edit.php?id=<?php echo $r['attendee_id']; ?>" class="btn btn-warning">Edit</a>
        <a onclick="return confirm('Are you sure you wan tot delete this record?'); " 
        href="delete.php?id=<?php echo $r['attendee_id']; ?>" class="btn btn-danger">Delete</a>
        </td>
        </tr>
    <?php } ?>
   </table>


   <?php require_once 'includes/footer.php'; ?>