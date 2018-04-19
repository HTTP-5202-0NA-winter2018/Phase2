<?php include 'header.php';
require 'database.php';
require_once 'services.php';

if (isset($_POST['add'])) {
    $service_request_date = $_POST['service_request_date'];
    $service_detail = $_POST['service_detail'];
    $attended_by = $_POST['attended_by'];
    $resident_id = $_POST['resident_id'];

    $s = new Services();
    $db = Database::getDb();
    $count = $s->addServices($db, $service_request_date, $service_detail, $attended_by, $resident_id);
    header("Location: list_services.php");

}
?>
    <div class="page-wrapper">
    <div class="container">

    <h1>Add a service</h1>
    <p class="instruction">Fill in the fields with appropriate information. All fields are required.</p>

    <form action="add_service.php" method="post" id="content">
        <?php $error; ?>

        <fieldset>
            <legend>Add Services</legend>

            <div>
                <label id="service_request_date">Service Request Date</label>
                <input type="date" name = "service_request_date" />
            </div>

            <div>
                <label id="service_detail">Service Detail</label>
                <input type="text" name = "service_detail" />
            </div>

            <div>
                <label id="attended_by">Attended By</label>
                <input type="text" name = "attended_by" />
            </div>

            <div>
                <label id="resident_id">Resident ID</label>
                <input type="number" name = "resident_id" />
            </div>

            <br /><button type="submit" name="add" value="submit">Add</button>

        </fieldset>

    </form>

<?php include 'footer.php'; ?>