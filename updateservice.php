<?php
require_once 'database.php';
require_once 'services.php';
include_once 'header.php';

$db = Database::getDb();
$myservice = new Services();
if(isset($_POST['update'])) {
    $id = $_POST['id'];
    $u = $myservice->getServicesById($db, $id);

}
if(isset($_POST['supdate'])) {
    $id = $_POST['sid'];
    $service_request_date = $_POST['service_request_date'];
    $service_detail = $_POST['service_detail'];
    $attended_by = $_POST['attended_by'];
    $resident_id = $_POST['resident_id'];
    $count = $myservice->updateservices($db, $id, $service_request_date, $service_detail, $attended_by, $resident_id);
    var_dump($count);
    if($count) {
        header("Location: list_services.php");
    } else {
        echo "A problem occured while updating" . $id;
    }
}

    ?>
<div class="page-wrapper">
    <div class="container">
        <h1>Update Service</h1>
        <form action="updateservice.php" method="post">
            <input type="hidden" value="<?= $u->id; ?>" name="sid" />
            <div>
                <label for="service_request_date">Service Request Date:</label>
                <input id="service_request_date" type="date" name="service_request_date" value="<?= $u->service_request_date; ?>" />
            </div>
            <div>
                <label for="service_detail">Service Detail:</label>
                <input id="service_detail" type="text" name="service_detail" value="<?= $u->service_detail; ?> "/>
            </div>
            <div>
                <label for="attended_by">Attended By:</label>
                <input id="attended_by" type="text" name="attended_by" value="<?= $u->attended_by; ?> "/>
            </div>
            <div>
                <label for="resident_id">Resident ID:</label>
                <input id="resident_id" type="number" name="resident_id" value="<?= $u->resident_id; ?>" />
            </div>
            <input type="submit" class="btn btn-primary submit" name="supdate" value="Update Service" />
        </form>
    </div>
</div>

<?php
include_once 'footer.php';
?>