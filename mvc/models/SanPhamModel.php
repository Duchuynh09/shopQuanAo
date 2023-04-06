<?php
// Truy van lai csdl
class SanPhamModel extends db_sanPham
{
    public function GetAoThun()
    {
        $query = "SELECT * FROM sanPham where loaisp = 'ao_thun'";
        return mysqli_query($this->conn, $query);
    }
    public function GetAll()
    {
        $query = "SELECT * FROM sanPham ";
        return mysqli_query($this->conn, $query);
    }

    public function deleteByID($id){
        $query = "DELETE FROM sanPham where id = $id  ";
        return mysqli_query($this->conn, $query);
    }

    
}
