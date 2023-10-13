<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class product_Details extends CI_Controller {

	public function index()
	{
		$ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://dummyjson.com/products");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $data = curl_exec($ch);
        
        $obj = json_decode($data);
        /*echo "<pre>";
        print_r($obj);
        die;*/
        for($i=0;$i<=29;$i++)
        {
        $Arr = array(
            "id" => $obj->products[$i]->id,
            "title" => $obj->products[$i]->title,
            "description" => $obj->products[$i]->description,
            "price" => $obj->products[$i]->price,
            "discountPercentage" => $obj->products[$i]->discountPercentage,
            "rating" => $obj->products[$i]->rating,
            "stock" => $obj->products[$i]->stock,
            "brand" => $obj->products[$i]->brand,
            "category" => $obj->products[$i]->category,
            "thumbnail" => $obj->products[$i]->thumbnail,
            "image1" => $obj->products[$i]->images[0],
            "image2" => $obj->products[$i]->images[1],
            "image3" => $obj->products[$i]->images[2]
        );
            $this->load->database();
            $query = $this->db->insert('product', $Arr);
            

        }
        
        
	}

    public function catagary(){
        
    }

    


}