<?php

class Admin extends Controller {
    public function index()
    {
        $_SESSION['login_admin'] === false;
        
        if ($_SESSION['login_admin'] !== true) {
            header('Location: ' . BASE_URL . 'admin/login');
            exit;
        } else {
            
        }
        
    }
    public function login()
    {
        $this->view('admin/login');

        if(isset($_POST['submit'])) {

            $info_login = $this->model('Admin_model')->login($_POST);

            if ($info_login) {
                
                $_SESSION['login_admin'] = true; 
                header('Location: ' . BASE_URL . 'admin/dashboard');
                
                exit; 
            } else {
                echo "<script>alert('Login Gagal')</script>";
            }
        }
    }
    public function logout() {
        $_SESSION['login_admin'] = false; 
        header('Location: ' . BASE_URL . 'home');
        exit();
        
    }
    public function dashboard() {
        $_SESSION['login_admin'] === false;
        
        if ($_SESSION['login_admin'] !== true) {
            header('Location: ' . BASE_URL . 'admin/login');
            exit;
        } else {
            
        }
        

        $data['orderCount'] = $this->model('Admin_model')->getAllOrderCount();
        $data['userCount'] = $this->model('Admin_model')->getAllUserCount();
        $data['total_pendapatan'] = $this->model('Admin_model')->getTotalPendapatan();
        $data['transaksi'] = $this->model('Admin_model')->getAllHistoriTransaksi();

        $this->view('admin/dashboard', $data);
    }
    public function produk() {
        $data['game'] = $this->model('Game_model')->getAllGame();
        $data['judul'] = 'Halaman Admin';
        $data['item'] = $this->model('item_model')->getAllItem();
        $this->view('templates/hdbootstrap', $data);
        $this->view('admin/produk', $data);
        $this->view('templates/footerbootstrap');
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail Item';
        $data['item'] = $this->model('Item_model')->getItemById($id);
        $this->view('templates/hdbootstrap', $data);
        $this->view('admin/detail', $data);
        $this->view('templates/footerbootstrap');
    }

    public function tambah()
    {
        $data['game'] = $this->model('Game_model')->getAllGame();
        if( $this->model('Item_model')->tambahItem($_POST) > 0 ) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASE_URL . 'admin');
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASE_URL . 'admin');
            exit;
        }
    }

    public function hapus($id)
    {
        if( $this->model('Item_model')->hapusItem($id) > 0 ) {
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASE_URL . 'admin');
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('Location: ' . BASE_URL . 'admin');
            exit;
        }
    }

    public function getubah()
    {
        echo json_encode($this->model('Item_model')->getItemById($_POST['id_item']));
    }

    public function ubah()
    {
        if( $this->model('Item_model')->ubahItem($_POST) > 0 ) {
            Flasher::setFlash('berhasil', 'diubah', 'success');
            header('Location: ' . BASE_URL . 'admin');
            exit;
        } else {
            Flasher::setFlash('gagal', 'diubah', 'danger');
            header('Location: ' . BASE_URL . 'admin');
            exit;
        } 
    }

    public function cari()
    {
        $data['judul'] = 'Daftar Item';
        $data['item'] = $this->model('Item_model')->cariItem();
        $this->view('templates/hdbootstrap', $data);
        $this->view('admin/index', $data);
        $this->view('templates/footerbootstrap');
    }
}