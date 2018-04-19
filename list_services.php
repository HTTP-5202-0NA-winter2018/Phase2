<?php
require_once 'database.php';
require_once 'services.php';
include_once 'header.php';
$s = new Services();
$service = $s->getServices(Database::getDb());
?>
    <div class="page-wrapper">
        <div class="container">
            <h1>List of Services</h1>
            <div id="addservices"><a href="add_service.php" class="btn btn-info">Add a service</a></div>

            <table class="table table-bordered"><tr><th>Service Request Date</th><th>Service Detail</th><th>Attended By</th><th>Resident ID</th></tr>
                <?php foreach($service as $services) {
                    echo "<tr><td>" . $services->service_request_date." </td><td>". $services->service_detail . "</td><td>" . $services->attended_by . "</td><td>" . $services->resident_id . "</td></tr>
            <td><form action='deleteservice.php' method='post'>
                        <input type='hidden' name='id' value='$services->id' />
                        <input id='deletebtn' type='submit' name='delete' class='btn btn-outline-danger' value='Delete'>
                        </form><form action='updateservice.php' method='post'>
                        <input type='hidden' name='id' value='$services->id' />
                        <input id='updatebtn' type='submit' name='update' class='btn btn-outline-info' value='Update'>
                        </form>
                        
                        </td></tr>";
                } ?>
            </table>
        </div>
    </div>

<?php
include_once 'footer.php';
?>