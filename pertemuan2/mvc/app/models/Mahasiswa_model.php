<?php

class Mahasiswa_model{
   private $table = 'mahasiswa';
    private $db; // database handler
    
    public function __construct(){
        $this->db = new Database;
    }


    public function getAllMahasiswa(){
          
        $this->db->query('SELECT * FROM '.$this->table);
        return $this->db->resultSet();}

     public function getMahasiswaByid($id){
        $this->db->query('SELECT * FROM '.$this->table.' WHERE id=:id');
        $this->db->bind('id',$id);
        return $this->db->single();
    }   

public function tambahDataMahasiswa($data){
    $query = "INSERT INTO mahasiswa (nama, nrp, jurusan)
              VALUES (:nama, :nrp, :jurusan)";

    $this->db->query($query);
    $this->db->bind('nama', $data['nama']);
    $this->db->bind('nrp', $data['nrp']);
    $this->db->bind('jurusan', $data['jurusan']);

    $this->db->execute();

    return $this->db->rowCount();
}


    public function hapusDataMahasiswa($id){
        $query = "DELETE FROM mahasiswa WHERE id = :id";
        
        $this->db->query($query);
        $this->db->bind('id', $id);
        
        $this->db->execute();
        
        return $this->db->rowCount();
    }

    
public function ubahDataMahasiswa($data){
    $query = "UPDATE mahasiswa SET
              nama = :nama,
              nrp = :nrp,
              jurusan = :jurusan
              WHERE id = :id";

    $this->db->query($query);
    $this->db->bind('nama', $data['nama']);
    $this->db->bind('nrp', $data['nrp']);
    $this->db->bind('jurusan', $data['jurusan']);

    $this->db->execute();

    return $this->db->rowCount();
}

            
}
