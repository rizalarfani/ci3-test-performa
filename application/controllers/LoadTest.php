<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LoadTest extends CI_Controller
{
    public function index()
    {
        $data = [
            'status' => true,
            'message' => 'CI3 Load Test Endpoint OK',
            'timestamp' => date('Y-m-d H:i:s')
        ];

        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($data));
    }
}
/* End of file LoadTest.php */
