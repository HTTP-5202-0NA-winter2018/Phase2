<?php
require_once 'database.php';
require_once 'resident.php';
include_once 'header.php';
$r = new Resident();
$residents = $r->getResidents(Database::getDb());
?>
    <div class="page-wrapper">
        <div class="container">
            <h1>List of Residents</h1>
            <div id="addresident"><a href="add_resident.php" class="btn btn-info">Add a resident</a></div>

            <table class="table table-bordered"><tr><th>First Name</th><th>Middle Name</th><th>Last Name</th><th>Date of Birth</th><th>Phone</th><th>Email</th><th>Occupancy Date</th><th>Locker Number</th><th>Parking Spot Number</th><th>Number of People</th></tr>
                <?php foreach($residents as $r) {
                    echo "<tr><td>" . $r->first_name." </td><td>". $r->middle_name . "</td><td>" . $r->last_name . "</td><td>" . $r->date_of_birth . "</td><td>" . $r->phone . "</td><td>" . $r->email . "</td><td>" . $r->occupancy_date . "</td><td>" . $r->locker_number . "</td><td>" . $r->parking_spot_number . "</td><td>" . $r->number_of_people . "</td></tr>
            <td><form action='deleteresident.php' method='post'>
                        <input type='hidden' name='id' value='$r->id' />
                        <input id='deletebtn' type='submit' name='delete' class='btn btn-outline-danger' value='Delete'>
                        </form><form action='updateresident.php' method='post'>
                        <input type='hidden' name='id' value='$r->id' />
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