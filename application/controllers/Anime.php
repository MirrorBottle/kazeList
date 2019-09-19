<?php

use function GuzzleHttp\json_decode;

defined('BASEPATH') or exit('No direct script access allowed');

class Anime extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('home_model', 'home');
    }

    public function details($id = '16498')
    {
        $query = [];
        $data['details'] = json_decode($this->get_guzzle('https://api.jikan.moe/v3/anime/' . $id, $query), true);
        $data['background'] = 'bg-2.png';
        $data['title'] = $data['details']['title_english'];
        $this->load_view($data, 'anime/details');
    }

    public function others($id = '16498')
    {
        $query = [];
        $data['details'] = json_decode($this->get_guzzle('https://api.jikan.moe/v3/anime/' . $id, $query), true);
        $wallpaper_query = [
            'auth' => '6d02af8f58dac5e870b70164f7d072b7',
            'method' => 'search',
            'term' => $data['details']['title_english']
        ];
        $data['pictures'] = json_decode($this->get_guzzle('https://wall.alphacoders.com/api2.0/get.php', $wallpaper_query), true);
        $data['recommends'] = json_decode($this->get_guzzle('https://api.jikan.moe/v3/anime/' . $id . '/recommendations', $query), true)['recommendations'];
        $data['background'] = 'bg-2.png';
        $data['title'] = $data['details']['title_english'];
        $this->load_view($data, 'anime/others');
    }

    public function index()
    {
        $query = ['q' => 'attack on titan', 'limit' => 8];
        $data['aot'] = json_decode($this->get_guzzle('https://api.jikan.moe/v3/search/anime/', $query));
        $data['title'] = 'KazeList | Welcome to Anime Site!';
        $this->load_view($data, 'home/index');
    }
}
