<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_product extends CI_Model
{
    private $table = "tb_product";

    public $id;
    public $category_id;
    public $brand_id;
    public $name;
    public $model;
    public $type;
    public $diameter;
    public $movement;
    public $material;
    public $condition_product;
    public $completeness;
    public $description;
    public $price;
    public $discount;
    public $images;
    public $images_front;
    public $images_side;
    public $images_top;
    public $images_detail;
    public $url;
    public $created_date;
    public $created_by;
    public $updated_date;
    public $updated_by;
    public $status;

    public function rules()
    {
        return [
            [
                'field' => 'name',
                'label' => 'Name',
                'rules' => 'required'
            ]

            // [
            //     'field' => 'diameter',
            //     'label' => 'Diameter',
            //     'rules' => 'required'
            // ],

            // [
            //     'field' => 'movement',
            //     'label' => 'Movement',
            //     'rules' => 'required'
            // ],

            // [
            //     'field' => 'material',
            //     'label' => 'Material',
            //     'rules' => 'required'
            // ],

            // [
            //     'field' => 'condition_product',
            //     'label' => 'Condition',
            //     'rules' => 'required'
            // ],

            // [
            //     'field' => 'completeness',
            //     'label' => 'Completeness',
            //     'rules' => 'required'
            // ],

            // [
            //     'field' => 'images',
            //     'label' => 'Images',
            //     'rules' => 'required'
            // ],

            // [
            //     'field' => 'price',
            //     'label' => 'Price',
            //     'rules' => 'required'
            // ],

            // [
            //     'field' => 'discount',
            //     'label' => 'Discount',
            //     'rules' => 'required'
            // ],

            // [
            //     'field' => 'status',
            //     'label' => 'Status',
            //     'rules' => 'required'
            // ]
        ];
    }

    public function getAll()
    {
        $this->db->select($this->table . '.*, tb_category.category, tb_brand.brand, tb_admin.name AS name_admin');
        $this->db->from($this->table);
        $this->db->join('tb_admin', $this->table . '.updated_by = tb_admin.id', 'left');
        $this->db->join('tb_category', $this->table . '.category_id = tb_category.id', 'left');
        $this->db->join('tb_brand', $this->table . '.brand_id = tb_brand.id', 'left');
        return $this->db->get()->result();
    }

    public function getAllactive()
    {
        $this->db->select($this->table . '.*, tb_category.category, tb_brand.brand');
        $this->db->from($this->table);
        $this->db->join('tb_brand', $this->table . '.brand_id = tb_brand.id', 'left');
        $this->db->join('tb_category', $this->table . '.category_id = tb_category.id', 'left');
        $this->db->where($this->table . '.status', 1);
        return $this->db->get()->result();
    }

    public function count()
    {
        $this->db->select('*');
        $this->db->from($this->table);
        return $this->db->get()->num_rows();
    }

    public function getCategory()
    {
        $this->db->select('*');
        $this->db->from('tb_category');
        return $this->db->get()->result();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->created_date = $post["created_date"];
        $this->created_by = $post["created_by"];
        $this->updated_date = $post["updated_date"];
        $this->updated_by = $post["updated_by"];
        $this->category_id = $post["category_id"];
        $this->brand_id = $post["brand_id"];
        $this->name = $post["name"];
        $this->model = $post["model"];
        $this->type = $post["type"];
        $this->diameter = $post["diameter"];
        $this->movement = $post["movement"];
        $this->material = $post["material"];
        $this->condition_product = $post["condition_product"];
        $this->completeness = $post["completeness"];
        $this->description = $post["description"];
        $this->url = $post["url"];
        $this->price = $post["price"];
        $this->discount = $post["discount"];
        $this->images = $this->_uploadImage();
        // var_dump($this->images);
        // die();
        $this->images_front = $this->_uploadImage_front();
        $this->images_side = $this->_uploadImage_side();
        $this->images_top = $this->_uploadImage_top();
        $this->images_detail = $this->_uploadImage_detail();
        $this->status = $post["status"];
        return $this->db->insert($this->table, $this);
    }

    public function getById($id)
    {
        return $this->db->get_where($this->table, ["id" => $id])->row();
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id = $post["id"];
        $this->created_date = $post["created_date"];
        $this->created_by = $post["created_by"];
        $this->updated_date = $post["updated_date"];
        $this->updated_by = $post["updated_by"];
        $this->category_id = $post["category_id"];
        $this->brand_id = $post["brand_id"];
        $this->name = $post["name"];
        $this->model = $post["model"];
        $this->type = $post["type"];
        $this->diameter = $post["diameter"];
        $this->movement = $post["movement"];
        $this->material = $post["material"];
        $this->condition_product = $post["condition_product"];
        $this->completeness = $post["completeness"];
        $this->description = $post["description"];
        $this->url = $post["url"];
        $this->price = $post["price"];
        $this->discount = $post["discount"];
        if (!empty($_FILES["images"]["name"])) {
            $this->images = $this->_uploadImage();
        } else {
            $this->images = $post["old_images"];
        }
        if (!empty($_FILES["images_front"]["name"])) {
            $this->images_front = $this->_uploadImage_front();
        } else {
            $this->images_front = $post["old_images_front"];
        }
        if (!empty($_FILES["images_side"]["name"])) {
            $this->images_side = $this->_uploadImage_side();
        } else {
            $this->images_side = $post["old_images_side"];
        }
        if (!empty($_FILES["images_top"]["name"])) {
            $this->images_top = $this->_uploadImage_top();
        } else {
            $this->images_top = $post["old_images_top"];
        }
        if (!empty($_FILES["images_detail"]["name"])) {
            $this->images_detail = $this->_uploadImage_detail();
        } else {
            $this->images_detail = $post["old_images_detail"];
        }
        $this->status = $post["status"];
        return $this->db->update($this->table, $this, array('id' => $post['id']));
    }

    public function delete($id)
    {
        $this->_deleteImage($id);
        return $this->db->delete($this->table, array("id" => $id));
    }

    private function _uploadImage()
    {
        $config['upload_path']          = './upload/product/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['file_name']            = $this->name . ' ' . $this->type;
        $config['max_size']             = 2048; // 2MB
        // $config['max_width']            = 200;
        // $config['max_height']           = 200;

        $this->load->library('upload', $config);
        if ($this->upload->do_upload('images')) {
            return $this->upload->data('file_name');
        }

        // print_r($this->upload->display_errors());
        return "default.jpg";
    }

    private function _uploadImage_front()
    {
        $config['upload_path']          = './upload/product/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['file_name']            = $this->name . ' ' . $this->type . '_front';
        $config['max_size']             = 2048; // 2MB

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('images_front')) {
            return $this->upload->data("file_name");
        }
        return "default.jpg";
    }

    private function _uploadImage_side()
    {
        $config['upload_path']          = './upload/product/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['file_name']            = $this->name . ' ' . $this->type . '_side';
        $config['max_size']             = 2048; // 2MB

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('images_side')) {
            return $this->upload->data("file_name");
        }
        return "default.jpg";
    }

    private function _uploadImage_top()
    {
        $config['upload_path']          = './upload/product/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['file_name']            = $this->name . ' ' . $this->type . '_top';
        $config['max_size']             = 2048; // 2MB

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('images_top')) {
            return $this->upload->data("file_name");
        }
        return "default.jpg";
    }

    private function _uploadImage_detail()
    {
        $config['upload_path']          = './upload/product/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['file_name']            = $this->name . ' ' . $this->type . '_detail';
        $config['max_size']             = 2048; // 2MB

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('images_detail')) {
            return $this->upload->data("file_name");
        }
        return "default.jpg";
    }

    private function _deleteImage($id)
    {
        $product = $this->getById($id);
        if ($product->images != "default.jpg") {
            $filename = explode(".", $product->images)[0];
            return array_map('unlink', glob(FCPATH . "upload/product/$filename.*"));
        }
    }

    function getBrand($name_category)
    {
        $sql = "SELECT br.id, cg.category, br.brand FROM tb_brand AS br LEFT JOIN tb_category AS cg ON br.category_id = cg.id  WHERE category = '$name_category' ";
        $query = $this->db->query($sql);
        return $query;
    }

    public function getProduct($category_id, $brand_id)
    {
        $this->db->select('*');
        $this->db->from($this->table);
        $this->db->where('category_id', $category_id);
        $this->db->where('brand_id', $brand_id);
        $this->db->where('status', 1);
        return $this->db->get()->result();
    }

    public function getProductMenu($category_id)
    {
        $this->db->select('*');
        $this->db->from($this->table);
        $this->db->where('category_id', $category_id);
        $this->db->where('status', 1);
        return $this->db->get()->result();
    }

    public function getProductAutoComplete()
    {
        $this->db->select("DISTINCT CONCAT(tb_brand.brand,' ', " . $this->table . ".name, CASE WHEN " . $this->table . ".type = '-' THEN '' ELSE CONCAT(' '," . $this->table . ".type) END) as searchProduct");
        $this->db->from($this->table);
        $this->db->join('tb_brand', $this->table . '.brand_id = tb_brand.id');
        $this->db->where('status', 1);
        return $this->db->get()->result();
    }

    public function searchProduct($searchValue)
    {
        $this->db->select($this->table . ".*");
        $this->db->from($this->table);
        $this->db->join('tb_brand', $this->table . '.brand_id = tb_brand.id');
        $this->db->where("CONCAT(LOWER(tb_brand.brand),' ',LOWER(" . $this->table . ".name), CASE WHEN " . $this->table . ".type = '-' THEN '' ELSE CONCAT(' ',LOWER(" . $this->table . ".type)) END) LIKE LOWER('%" . $searchValue . "%')");
        $this->db->where('status', 1);
        return $this->db->get()->result();
    }
}
