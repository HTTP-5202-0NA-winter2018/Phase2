<?php include 'header.php'; ?>
<?php

$id = $_POST['id'];
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

function validate_input()
{
    $id= $_POST['id'];
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

    if ($id == '') {
        header("Location: resident.php?error=please enter id=" . $id);
    }

    if ($first_name == '') {
        header("Location: resident.php?error=please enter first name=" . $first_name);
    }

    if ($middle_name == '') {
        header("Location: resident.php?error=please enter middle name=" . $middle_name);
    }
    if ($last_name == '') {
        header("Location: resident.php?error=please enter last name=" . $last_name);
    }
    if ($date_of_birth == '') {
        header("Location: resident.php?error=please enter date of birth=" . $date_of_birth);
    }
    if ($phone == '') {
        header("Location: resident.php?error=please enter phone=" . $phone);
    }
    if ($email == '') {
        header("Location: resident.php?error=please enter email=" . $email);
    }
    if ($occupancy_date == '') {
        header("Location: resident.php?error=please enter occupancy date=" . $occupancy_date);
    }
    if ($locker_number == '') {
        header("Location: resident.php?error=please enter locker number=" . $locker_number);
    }
    if ($parking_spot_number == '') {
        header("Location: resident.php?error=please enter parking spot number=" . $parking_spot_number);
    }
    if ($number_of_people == '') {
        header("Location: resident.php?error=please enter number of people=" . $number_of_people);
    }
}
if(!isset($_POST['submit'])){
    header("Location: resident.php");
}
else{
    validate_input();
}
?>
<?php

if (isset($_POST['submit'])){
    $id = filter_input(INPUT_POST, 'id', FILTER_VALIDATE_INT);
    if($id == NULL || $id == FALSE){
        $error = "Invalid Resident Data.Check all fields and try again";
        include (database_error.php);
    }
    else{
        require_once ('database.php');
    }
    $query = 'INSERT INTO resident_info(id, first_name, middle_name, last_name, date_of_birth, phone, email, occupancy_date, locker_number, parking_spot_number, number_of_people)
                       VALUES (:id, :first_name, :middle_name, :last_name, :date_of_birth, :phone, :email, :occupancy_date, :locker_number, :parking_spot_number, :number_of_people)';
    $statement = $db->prepare($query);
    $statement->bindValue(':id', $id);
    $statement->bindValue(':first_name', $first_name);
    $statement->bindValue(':middle_name', $middle_name);
    $statement->bindValue(':last_name', $last_name);
    $statement->bindValue(':date_of_birth', $date_of_birth);
    $statement->bindValue(':phone', $phone);
    $statement->bindValue(':email', $email);
    $statement->bindValue(':occupancy_date', $occupancy_date);
    $statement->bindValue(':locker_number', $locker_number);
    $statement->bindValue(':parking_spot_number', $parking_spot_number);
    $statement->bindValue(':number_of_people', $number_of_people);
    $statement->execute();
    $residents = $statement->fetchAll();
    $statement->closeCursor();

    include ('resident.php');
}
?>
<?php include 'footer.php'; ?>
