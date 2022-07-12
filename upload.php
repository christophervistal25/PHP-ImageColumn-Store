    $data = file_get_contents(public_path('/assets/4994.jpg'));
    $db = DB::connection("sqlsrv")->getPdo();
    $statement = $db->prepare("UPDATE Employees SET ImagePhoto = :ImagePhoto WHERE Employee_id = :Employee_id");
    $statement->bindValue(':Employee_id', '4994');
    $statement->bindParam(':ImagePhoto', $data, PDO::PARAM_LOB, 0, PDO::SQLSRV_ENCODING_BINARY);
    $statement->execute();