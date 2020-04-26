<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_productdetail extends CI_Controller
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
        $data['titlepage'] = "Product Detail";
        $data['page'] = "product-detail";
        $this->load->view('user/template', $data);
    }

    public function detail($category_id, $brand_id,$product_id)
    {
        $category = $this->ctg->getById($category_id);
        $brand = $this->brn->getById($brand_id);
        $data['product'] = $this->prd->getById($product_id);

        $data['category'] = $category->category;
        $data['brandname'] = $brand->brand;
        $data['titlepage'] = "Product Detail - " . $brand->brand;
        $data['page'] = "product-detail";
        $this->load->view('user/template', $data);
    }
}