<?php
class Query extends Conexion
{
    private $pdo, $con, $sql, $arrValues;

    public function __construct()
    {
        $this->pdo = new Conexion();
        $this->con = $this->pdo->conect();
    }

    public function select(string $sql)
    {
        $this->sql = $sql;

        $result = $this->con->prepare($this->sql);
        $result->execute();

        $data = $result->fetchAll(PDO::FETCH_ASSOC);

        return $data;
    }

    public function selectAll(string $sql)
    {
        $this->sql = $sql;

        $result = $this->con->prepare($this->sql);
        $result->execute();

        $data = $result->fetchAll(PDO::FETCH_ASSOC);

        return $data;
    }

    public function insert(string $sql, array $arrValues)
    {
        $this->sql = $sql;
        $this->arrValues = $arrValues;

        $insert = $this->con->prepare($this->sql);
        $resInsert = $insert->execute($this->arrValues);

        if ($resInsert) {
            $lastInsert = $this->con->lastInsertId();
        } else {
            $lastInsert = 0;
        }
        return $lastInsert;
    }

    public function update(string $sql, array $arrValues)
    {
        $this->sql = $sql;
        $this->arrValues = $arrValues;
        $update = $this->con->prepare($this->sql);
        $resExecute = $update->execute($this->arrValues);
        return $resExecute;
    }

    public function delete(string $sql)
    {
        $this->sql = $sql;
        $result = $this->con->prepare($this->sql);
        $result->execute();
        return $result;
    }
}
