<?php
Class Services
{
    public function getServices($db){
        $query = "SELECT * FROM services_info";
        $pdostm = $db->prepare($query);
        $pdostm->setFetchMode(PDO::FETCH_ASSOC);
        $pdostm->execute();
        $results = $pdostm->fetchAll(PDO::FETCH_OBJ);
        return $results;
    }

    public function addServices($db, $service_request_date, $service_detail, $attended_by, $resident_id){
        $query = 'INSERT INTO services_info(service_request_date, service_detail, attended_by, resident_id)
                 VALUES(:service_request_date, :service_detail, :attended_by, :resident_id)';
        $statement = $db->prepare($query);
        $statement->bindValue('service_request_date', $service_request_date);
        $statement->bindValue('service_detail', $service_detail);
        $statement->bindValue('attended_by', $attended_by);
        $statement->bindValue('resident_id', $resident_id);
        $statement->execute();
        return $statement;
    }

    public function deleteservices($db,$id){
        $query = "DELETE FROM services_info WHERE id = :id";
        $pdostm = $db->prepare($query);
        $pdostm->bindValue(':id', $id);
        $results = $pdostm->execute();
        return $results;
    }

    public function updateservices($db, $id, $service_request_date, $service_detail, $attended_by, $resident_id){

        $query = "UPDATE services_info SET
                service_request_date = :service_request_date,
                service_detail = :service_detail,
                attended_by = :attended_by,
                resident_id = :resident_id
                WHERE id = :id";
        $pdostm = $db->prepare($query);
        $pdostm->bindValue(':id', $id);
        $pdostm->bindValue(':service_request_date', $service_request_date);
        $pdostm->bindValue(':service_detail', $service_detail);
        $pdostm->bindValue(':attended_by', $attended_by);
        $pdostm->bindValue(':resident_id', $resident_id);
        $count = $pdostm->execute();
        return $count;
    }

    public function getServicesById($db, $id){
        $query = "SELECT * FROM services_info WHERE id = :id";
        $pdostm = $db->prepare($query);
        $pdostm->bindValue(':id', $id);
        $pdostm->execute();
        $s = $pdostm->fetch(PDO::FETCH_OBJ);
        return $s;
    }

}
?>