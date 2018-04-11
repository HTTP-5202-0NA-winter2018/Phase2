<?php include 'header.php'; ?>
<form action="process.php" method="post" id="content">
    <?php $error; ?>
    <fieldset>
        <legend>Resident Information</legend>
        <div>
            <label id="id">ID</label>
            <input type="text" name = "id" />
        </div>
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

        <br /><button type="submit" name="submit" id="submit">Submit</button>

    </fieldset>

</form>


<?php include 'footer.php'; ?>
