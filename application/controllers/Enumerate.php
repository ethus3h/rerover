<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Enumerate extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index() {
        //$this->load->view('welcome_message');
        $this->r_view("14816716305193269493092739739619");
    }

    public function r_view($key = "14816716305193269493092739739619") {
        $opts = array(
            'http' => array(
                'method' => "GET",
                'header' => "Cookie: ukey=" . $key . "\r\n"
            )
        );
        $context = stream_context_create($opts);

        echo "Started.\r\n";
        $int1 = $int2 = $int3 = $int4 = $int5 = $int6 = $int7 = $int8 = 0;
        for ($int8 = 0; $int8 < 10; $int8++) {
            for ($int7 = 0; $int7 < 10; $int7++) {
                for ($int6 = 0; $int6 < 10; $int6++) {
                    for ($int5 = 0; $int5 < 10; $int5++) {
                        for ($int4 = 0; $int4 < 10; $int4++) {
                            for ($int3 = 0; $int3 < 10; $int3++) {
                                for ($int2 = 0; $int2 < 10; $int2++) {
                                    for ($int1 = 0; $int1 < 10; $int1++) {
                                        echo $int1 . $int2 . $int3 . $int4 . $int5 . $int6 . $int7 . $int8 . "\n";
                                        $xmlstr = file_get_contents("http://rover.info/r_view/" . $int1 . $int2 . $int3 . $int4 . $int5 . $int6 . $int7 . $int8, false, $context);
                                        $xml = new SimpleXMLElement($xmlstr);
                                        //$xml = (Array) $xml;
                                        print_r($xml);
                                        if (xml_attribute($xml, 'exist') == 1) {
                                            file_put_contents("r_view-" . $int1 . $int2 . $int3 . $int4 . $int5 . $int6 . $int7 . $int8 . ".xml", $xmlstr);
                                            echo "Saved: r_view-" . $int1 . $int2 . $int3 . $int4 . $int5 . $int6 . $int7 . $int8 . ".xml\n";
                                        }
                                        echo $int8 . $int7 . $int6 . $int5 . $int4 . $int3 . $int2 . $int1 . "\n";
                                        $xmlstr = file_get_contents("http://rover.info/r_view/" . $int8 . $int7 . $int6 . $int5 . $int4 . $int3 . $int2 . $int1, false, $context);
                                        $xml = new SimpleXMLElement($xmlstr);
                                        //$xml = (Array) $xml;
                                        print_r($xml);
                                        if (xml_attribute($xml, 'exist') == 1) {
                                            file_put_contents("r_view-" . $int8 . $int7 . $int6 . $int5 . $int4 . $int3 . $int2 . $int1 . ".xml", $xmlstr);
                                            echo "Saved: r_view-" . $int8 . $int7 . $int6 . $int5 . $int4 . $int3 . $int2 . $int1 . ".xml\n";
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
    }

}
