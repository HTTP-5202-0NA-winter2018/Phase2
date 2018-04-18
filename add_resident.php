<?php include 'header.php';
  require 'database.php';
  require_once 'resident.php';

if (isset($_POST['add'])) {
    $first_name = $_POST['first_name'];
    $middle_name = $_POST['middle_name'];
    $last_name = $_POST['last_name'];
    $date_of_birth = $_POST['date_of_birth'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $occupancy_date = $_POST['occupancy_date'];
    $locker_number = $_POST['locker_number'];
    $parking_spot_number = $_POST['parking_spot_number'];
    $number_of_people = $_POST['number_of_people'];

    $r = new Resident();
    $db = Database::getDb();
    $count = $r->addResident($db, $first_name, $middle_name, $last_name, $date_of_birth, $phone, $email, $occupancy_date, $locker_number, $parking_spot_number, $number_of_people);
    header("Location: list_residents.php");

}
?>
    <div class="page-wrapper">
    <div class="container">

    <h1>Add a resident</h1>
    <p class="instruction">Fill in the fields with appropriate information. All fields are required.</p>

    <form action="add_resident.php" method="post" id="content">
        <?php $error; ?>

        <fieldset>
            <legend>Add Resident Information</legend>

            <div>
                <label id="first_name">First Name</label>
                <input type="text" name = "first_name" />
            </div>
            <div>
                <label id="middle_name">Middle Name</label>
                <input type="text" name = "middle_name" />
            </div>
            <div>
                <label id="last_name">Last Name</label>
                <input type="text" name = "last_name" />
            </div>
            <div>
                <label id="date_of_birth">Date of Birth</label>
                <input type="date" name = "date_of_birth" />
            </div>
            <div>
                <label id="phone">Phone</label>
                <input type="number" name = "phone" />
            </div>
            <div>
                <label id="email">Email</label>
                <input type="text" name = "email" />
            </div>
            <div>
                <label id="occupancy_date">Occupancy Date</label>
                <input type="date" name = "occupancy_date" />
            </div>
            <div>
                <label id="locker_number">Locker Number</label>
                <input type="number" name = "locker_number" />
            </div>
            <div>
                <label id="parking_spot_number">Parking Spot Number</label>
                <input type="number" name = "parking_spot_number" />
            </div>
            <div>
                <label id="number_of_people">Number of People</label>
                <input type="number" name = "number_of_people" />
            </div>

            <br /><button type="submit" name="add" value="submit">Add</button>

        </fieldset>

    </form>

<?php include 'footer.php'; ?>