<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth_m extends CI_Model
{
    public function login($user, $pass)
    {
        $this->db->select('*');
        $this->db->from('admin');
        $this->db->where('username', $user);
        $this->db->where(
            'password',
            md5($pass)
        );

        $data = $this->db->get();

        if ($data->num_rows() == 1) {
            return $data->row();
        } else {
            return false;
        }
    }
    function add($username, $nama, $password, $role)
    {
        $hasil = $this->db->query("INSERT INTO admin(username, password, nama, role) 
        VALUES ('$username','$password','$nama','$role')");
        return $hasil;
    }
    function delAdmin($id)
    {
        $sql = "DELETE FROM admin WHERE id = $id";
        return $this->db->query($sql);
    }
}

/* End of file M_auth.php */
/* Location: ./application/models/M_auth.php */