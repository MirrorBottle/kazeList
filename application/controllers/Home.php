<?php

use function GuzzleHttp\json_decode;

defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('home_model', 'home');
    }

    public function index()
    {
        $query = ['q' => 'attack on titan', 'limit' => 8];
        $data['background'] = 'home-bg.png';
        $data['aot'] = json_decode($this->get_guzzle('https://api.jikan.moe/v3/search/anime/', $query));
        $data['title'] = 'KazeList | Welcome to Anime Site!';
        $this->load_view($data, 'home/index');
    }
}
