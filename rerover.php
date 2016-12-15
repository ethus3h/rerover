<?php

class rerover extends Thread {

    public function __construct($i = 0) {
        $this->i = $i;
    }

    public function run() {
        //$this->load->view('welcome_message');
        $this->r_view("14816716305193269493092739739619", $this->i);
    }

    public function r_view($key = "14816716305193269493092739739619", $i = 0) {
        $opts = array(
            'http' => array(
                'method' => "GET",
                'header' => "Cookie: ukey=" . $key . "\r\n"
            )
        );
        $context = stream_context_create($opts);

        echo "Started.\r\n";
        $int8 = $i;
        for ($int7 = 0; $int7 < 10; $int7++) {
            for ($int6 = 0; $int6 < 10; $int6++) {
                for ($int5 = 0; $int5 < 10; $int5++) {
                    for ($int4 = 0; $int4 < 10; $int4++) {
                        for ($int3 = 0; $int3 < 10; $int3++) {
                            for ($int2 = 0; $int2 < 10; $int2++) {
                                for ($int1 = 0; $int1 < 10; $int1++) {
                                    $xmlstr = file_get_contents("http://rover.info/r_view/" . $int8 . $int7 . $int6 . $int5 . $int4 . $int3 . $int2 . $int1, false, $context);

                                    try {
                                        $xml = new SimpleXMLElement($xmlstr);
                                    } catch (Exception $ex) {
                                        
                                    }
                                    //$xml = (Array) $xml;
                                    //print_r($xml);
                                    if ($this->xml_attribute($xml, 'exist')) {
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

    function xml_attribute($object, $attribute) {
        if (isset($object[$attribute]))
            return (string) $object[$attribute];
    }

}

for ($i = 0; $i < 10; $i++) {
    $workers[$i] = new rerover($i);
    $workers[$i]->start();
}