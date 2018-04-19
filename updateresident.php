<?php
require_once 'database.php';
require_once 'resident.php';
include_once 'header.php';
$db = Database::getDb();
$myupdate = new Resident();
if(isset($_POST['update'])) {
    $id = $_POST['id'];
    $u = $myupdate->getResidentById($db, $id);

}
if (isset($_POST['updater'])) {
    $id = $_POST['uid'];
    $rfname = $_POST['rfname'];
    $rmname = $_POST['rmname'];
    $rlname = $_POST['rlname'];
    $date_of_birth = $_POST['date_of_birth'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $occupancy_date = $_POST['occupancy_date'];
    $locker_number = $_POST['locker_number'];
    $parking_spot_number = $_POST['parking_spot_number'];
    $number_of_people = $_POST['number_of_people'];
    $count = $myupdate->updateresident($db, $id, $rfname, $rmname, $rlname, $date_of_birth, $phone, $email, $occupancy_date, $locker_number, $parking_spot_number, $number_of_people);
    if($count) {
        header("Location: list_residents.php");
    } else {
        echo "A problem occured while updating" . $rfname . " " . $rlname;
    }
}
?>
    <div class="page-wrapper">
        <div class="container">
            <h1>Update Resident</h1>
            <form action="updateresident.php" method="post">
                <input type="hidden" value="<?= $u->id; ?>" name="uid" />
                <div>
                    <label for="first_name">First Name:</label>
                    <input id="first_name" type="text" name="rfname" value="<?= $u->first_name; ?> "/>
                </div>
                <div>
                    <label for="middle_name">Middle Name:</label>
                    <input id="middle_name" type="text" name="rmname" value="<?= $u->middle_name; ?> "/>
                </div>
                <div>
                    <label for="last_name">Last Name:</label>
                    <input id="last_name" type="text" name="rlname" value="<?= $u->last_name; ?>" />
                </div>
                <div>
                    <label for="date_of_birth">Date of Birth:</label>
                    <input id="date_of_birth" type="text" name="date_of_birth" value="<?= $u->date_of_birth; ?>" />
                </div>
                <div>
                    <label for="phone">Phone:</label>
                    <input id="phone" type="text" name="phone" value="<?= $u->phone; ?>" />
                </div>
                <div>
                    <label for="email">Email:</label>
                    <input id="email" type="text" name="email" value="<?= $u->email; ?>" />
                </div>
                <div>
                    <label for="occupancy_date">Occupancy Date:</label>
                    <input id="occupancy_date" type="text" name="occupancy_date" value="<?= $u->occupancy_date; ?>" />
                </div>
                <div>
                    <label for="locker_number">Locker Number:</label>
                    <input id="locker_number" type="text" name="locker_number" value="<?= $u->locker_number; ?>" />
                </div>
                <div>
                    <label for="parking_spot_number">Parking Spot Number:</label>
                    <input id="parking_spot_number" type="text" name="parking_spot_number" value="<?= $u->parking_spot_number; ?>" />
                </div>
                <div>
                    <label for="number_of_people">Number of People:</label>
                    <input id="number_of_people" type="text" name="number_of_people" value="<?= $u->number_of_people; ?>" />
                </div>
                <input type="submit" class="btn btn-primary submit" name="updater" value="Update Resident" />
            </form>
        </div>
    </div>

<?php
include_once 'footer.php';
?>