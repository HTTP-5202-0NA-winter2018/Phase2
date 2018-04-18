<?php
Class Resident
{
    function getResidents($db)
    {

        $query = "SELECT * FROM resident_info";
        $pdostm = $db->prepare($query);
        $pdostm->setFetchMode(PDO::FETCH_ASSOC);
        $pdostm->execute();
        $results = $pdostm->fetchAll(PDO::FETCH_OBJ);
        return $results;
    }



    function addResident($db, $first_name, $middle_name, $last_name, $date_of_birth, $phone, $email, $occupancy_date, $locker_number, $parking_spot_number, $number_of_people)
    {
        $query = 'INSERT INTO resident_info(first_name, middle_name, last_name, date_of_birth, phone, email, occupancy_date, locker_number, parking_spot_number, number_of_people)
        VALUES (:first_name, :middle_name, :last_name, :date_of_birth, :phone, :email, :occupancy_date, :locker_number, :parking_spot_number, :number_of_people)';

        $statement = $db->prepare($query);
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

        return $statement;
    }

    function deleteresident($db,$id){
        $query = "DELETE FROM resident_info WHERE id = :id";
        $pdostm = $db->prepare($query);
        $pdostm->bindValue(':id', $id);
        $results = $pdostm->execute();
        return $results;

    }

    public function updateresident($db, $id, $first_name, $middle_name, $last_name, $date_of_birth, $phone, $email, $occupancy_date, $locker_number, $parking_spot_number, $number_of_people) {
        $query = "UPDATE resident_info SET 
                first_name = :first_name,
                middle_name = :middle_name,
                last_name = :last_name,
                date_of_birth = :date_of_birth, 
                phone = :phone,  
                email = :email, 
                occupancy_date = :occupancy_date, 
                locker_number = :locker_number,
                parking_spot_number = :parking_spot_number,
                number_of_people = :number_of_people 
                WHERE id = :id";
        $pdostm = $db->prepare($query);
        $pdostm->bindValue(':id', $id);
        $pdostm->bindValue(':first_name', $first_name);
        $pdostm->bindValue(':middle_name', $middle_name);
        $pdostm->bindValue(':last_name', $last_name);
        $pdostm->bindValue(':date_of_birth', $date_of_birth);
        $pdostm->bindValue(':phone', $phone);
        $pdostm->bindValue(':email', $email);
        $pdostm->bindValue(':occupancy_date', $occupancy_date);
        $pdostm->bindValue(':locker_number', $locker_number);
        $pdostm->bindValue(':parking_spot_number', $parking_spot_number);
        $pdostm->bindValue(':number_of_people', $number_of_people);
        $count = $pdostm->execute();
        return $count;
    }

    public function getResidentById($db, $id){
        $query = "SELECT * FROM resident_info WHERE id = :id";
        $pdostm = $db->prepare($query);
        $pdostm->bindValue(':id', $id);
        $pdostm->execute();
        $r = $pdostm->fetch(PDO::FETCH_OBJ);
        return $r;
    }
}
?>

