<?php

class Home_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function get_top_anime()
    {
        $query = $this->db->get('entries', 10);
        return $query->result();
    }
}
