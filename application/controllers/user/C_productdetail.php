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
        $this->load->model('m_footer', 'foo');
    }

    public function index()
    {
        $data['titlepage'] = "Product Detail";
        $data['page'] = "product-detail";
        $this->load->view('user/template', $data);
    }

    public function detail($product_id)
    {
        // $productID = decrypt_url($product_id);
        $product = $this->prd->getById($product_id);
        $category = $this->ctg->getById($product->category_id);
        $brand = $this->brn->getById($product->brand_id);

        $data['product'] = $product;
        $data['category'] = $category->category;
        $data['brandname'] = $brand->brand;
        $data['titlepage'] = "Product Detail - " . $brand->brand;
        $data['page'] = "product-detail";
        $this->load->view('user/template', $data);
    }
}
