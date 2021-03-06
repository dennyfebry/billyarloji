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
        $this->load->model('m_footer', 'foo');
    }

    public function index()
    {
    }

    public function product($category_id, $brand_id)
    {
        // $categoryID             = decrypt_url($category_id);
        // $brandID                = decrypt_url($brand_id);
        $category               = $this->ctg->getById($category_id);
        $brand                  = $this->brn->getById($brand_id);
        $data['product']        = $this->prd->getProduct($category_id, $brand_id);
        $data['category']       = $category->category;
        $data['brandName']      = explode(" ", $brand->brand);
        $data['titlepage']      = "Product - " . $brand->brand;
        $data['page']           = "product";
        $this->load->view('user/template', $data);
    }

    public function productMenu($category_id)
    {
        // $categoryID              = decrypt_url($category_id);
        $category               = $this->ctg->getById($category_id);
        $data['product']        = $this->prd->getProductMenu($category_id);
        $data['category']       = $category->category;
        $data['titlepage']      = "Product - " . $category->category;
        $data['page']           = "product";
        $this->load->view('user/template', $data);
    }

    public function search($searchValue)
    {
        $data['product']        = $this->prd->searchProduct(urldecode($searchValue));
        $data['searchValue']    = urldecode($searchValue);
        $data['titlepage']      = "Search for product";
        $data['page']           = "product";
        $this->load->view('user/template', $data);
    }
}
