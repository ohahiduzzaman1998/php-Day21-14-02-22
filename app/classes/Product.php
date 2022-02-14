<?php
namespace App\classes;
class Product
{
    protected $products = [];
    protected $id;
    protected $product;
    protected $result = [];


    public function __construct($data=null)
    {
        if (isset($data['search']))
        {
            $this->id = $data['search'];
        }
    }

    public function getAllProduct()
    {
        return[
            0=>[
                'id' => '1',
                'name' => 'Electronic',
                'category' => 'remot',
                'brand' => 'Yellow',
                'price' => '3500',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab ad animi aut dicta doloribus exercitationem expedita impedit in iusto minus, mollitia nisi officia omnis optio perspiciatis quo ratione reiciendis, rerum!',
                'image' => 'x1.jpg',
            ],
            1=>[
                'id' => '2',
                'name' => 'Electronic',
                'category' => 'remot',
                'brand' => 'Yellow',
                'price' => '3500',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab ad animi aut dicta doloribus exercitationem expedita impedit in iusto minus, mollitia nisi officia omnis optio perspiciatis quo ratione reiciendis, rerum!',
                'image' => 'x4.jpg',
            ],
            2=>[
                'id' => '3',
                'name' => 'Electronic',
                'category' => 'remot',
                'brand' => 'Yellow',
                'price' => '3500',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab ad animi aut dicta doloribus exercitationem expedita impedit in iusto minus, mollitia nisi officia omnis optio perspiciatis quo ratione reiciendis, rerum!',
                'image' => 'x1.jpg',
            ],
            3=>[
                'id' => '4',
                'name' => 'Electronic',
                'category' => 'remot',
                'brand' => 'Yellow',
                'price' => '3500',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab ad animi aut dicta doloribus exercitationem expedita impedit in iusto minus, mollitia nisi officia omnis optio perspiciatis quo ratione reiciendis, rerum!',
                'image' => 'x2.jpg',
            ],
            4=>[
                'id' => '5',
                'name' => 'Electronic',
                'category' => 'remot',
                'brand' => 'Yellow',
                'price' => '3500',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab ad animi aut dicta doloribus exercitationem expedita impedit in iusto minus, mollitia nisi officia omnis optio perspiciatis quo ratione reiciendis, rerum!',
                'image' => 'x3.jpg',
            ],
            5=>[
                'id' => '6',
                'name' => 'Electronic',
                'category' => 'remot',
                'brand' => 'Yellow',
                'price' => '3500',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab ad animi aut dicta doloribus exercitationem expedita impedit in iusto minus, mollitia nisi officia omnis optio perspiciatis quo ratione reiciendis, rerum!',
                'image' => 'x4.jpg',
            ],
        ];
    }
    public function getAllProductById($id)
    {
        $this->products = $this->getAllProduct();
        foreach ($this->products as $product)
        {
            if ($product['id'] == $id)
            {
                return $product;
            }
        }
    }
    public function getProductBySearchId()
    {
        $this->products = $this->getAllProduct();
        foreach ($this->products as $product)
        {
            if ($this->id == $product['id'])
            {
                $this->result = $product;
                break;
            }
        }
        return $this->result;
    }
}