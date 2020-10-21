<?php
include('dbconnect.php');
class productCRUD
{
    private $msg = "";
    public function getMes()
    {
        return $this->msg;
    }
    public function readProduct()
    {
        $data = array();
        try {
            global $connString;
            $conn = pg_connect($connString);
            if ($conn === false) {
                $this->msg = "Fail";
                return $data;
            }
            $query = 'SELECT code, name, price, image, details
	                        FROM public.products;';
            $result = pg_query($conn, $query);
            while ($row = pg_fetch_row($result)) {
                array_push($data, array("code" => $row[0], "name" => $row[1], "price" => $row[2], "image" => $row[3], "details" => $row[4]));
            }
            pg_close($conn);
        } catch (Exception $e) {
            $this->msg = $e->getMessage();
            echo $this->msg;
        }
        return $data;
    }
    
    public function createProduct($code, $name, $price, $image, $details)
    {
        $data = array();
        $success = -1;
        try {
            global $connString;
            $conn = pg_connect($connString);
            if ($conn === false) {
                $this->msg = "Fail";
                return $data;
            }
            $query = 'INSERT INTO public.products (code, name, price, image, details) VALUES ($1, $2, $3, $4, $5) returning code ';
            $params = array(&$code, &$name, &$price, &$image, &$details);
            $res = pg_query_params($conn, $query, $params);
            $row =  pg_fetch_row($res);
            $success = $row[0];
            
            pg_close($conn);
        } catch (Exception $e) {
            $this->msg = $e->getMessage();
            $success = -1;
        }
    }
    public function deleteProduct($code){
        $success = -1;
        try {
            global $connString;
            $conn = pg_connect($connString);
            if ($conn === false) {
                $this->msg = "Fail";
                return $success;
            }
            $query = "DELETE FROM products WHERE code=1";
            $params = array(&$code);
            $res = pg_query_params($conn, $query, $params);
            if ($res === false) {
                $this->msg = "Error query";
                return $success;
            }
            $row =  pg_affected_rows($res);
            $success = $row;
            $this->msg = "";
            pg_close($conn);
        } catch (Exception $e) {
            $this->msg = $e->getMessage();
            $success =-1;
        }
    }
}



