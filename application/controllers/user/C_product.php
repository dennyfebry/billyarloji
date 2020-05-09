<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_product extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('m_category', 'ctg');
        $this->load->model('m_brand', 'brn');
        $this->load->model('m_product', 'prd');
    }

    public function index()
    {
    }

    public function product($category_id, $brand_id)
    {
        $categoryID = $category_id;
        $brandID = $brand_id;
        $category = $this->ctg->getById($categoryID);
        $brand = $this->brn->getById($brandID);
        $data['product'] = $this->prd->getProduct($categoryID, $brandID);
        $data['category'] = $category->category;
        $data['brandName'] = explode(" ", $brand->brand);
        $data['titlepage'] = "Product - " . $brand->brand;
        $data['page'] = "product";

        $this->load->view('user/template', $data);
    }

    public function search($searchValue)
    {
        $data['product'] = $this->prd->searchProduct(urldecode($searchValue));
        $data['searchValue'] = urldecode($searchValue);
        $data['titlepage'] = "Search for product";
        $data['page'] = "product";

        $this->load->view('user/template', $data);
    }
}
