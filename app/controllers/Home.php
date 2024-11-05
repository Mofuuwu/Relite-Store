    <?php
    class Home extends Controller
    
    {
        public function index(){ 
            

            if(isset($_SESSION['nama'])) {
                $_SESSION['logged_in'] = true;
            } else {
                $_SESSION['logged_in'] = false;
            }

            $data['judul'] = "Home";
            $data['game'] = $this->model('Game_model')->getAllGame();
            $data['komentar'] = $this->model('Komentar_model')->getAllComment();
            // var_dump($data['komentar']);
            if(isset($_POST['submit'])) {
                if ($_SESSION['logged_in'] === false) {
                    $_SESSION['warning_message'] = 'Silahkan Login Terlebih Dahulu';
                    header('Location: ' . BASE_URL . 'home');
                    exit; 
                }
                $result = $this->model('Komentar_model')->tambahKomentar($_POST, $_SESSION['nama']);
                if($result == 1) {
                    header("Refresh:0");
                    $_SESSION['warning_message'] = 'Komentar Telah Berhasil Ditambahkan';
                }
            }
            $data['item'] = $this->model('Item_model')->getAllItem();
            $this->view('templates/header', $data);
            $this->view('home/index', $data);
            $this->view('templates/footer', $data);
            
        }
        
        public function dashboard() {
            $data['judul'] = "Dashboard";
            $this->view('templates/header', $data);
            $this->view("home/dashboard");
            $this->view('templates/footer', $data);
        }
        public function allgame() {
            $data['judul'] = "All Game";
            $this->view('templates/headerAllGame', $data);
            $this->view("home/allgame");
            $this->view('templates/footer', $data);
        }
        public function about() {
            $data['judul'] = "About";
            $this->view('templates/header', $data);
            $this->view("home/about");
            $this->view('templates/footer', $data);
        }
        public function ctr()
        {
            // var_dump($_GET);
            $data['judul'] = "Cek Transaksi";
            $this->view('templates/header3', $data);
            $this->view('home/ctr');
            $this->view('templates/footer', $data);
        }
        public function pelanggansetia()
        {
            // var_dump($_GET);
            $data['judul'] = "Pelanggan Setia";
            $this->view('templates/header', $data);
            $this->view('home/pelanggansetia');
            $this->view('templates/footer', $data);
        }
        public function login() {
            if(isset($_POST['submit'])) {
                $user_info = $this->model('User_model')->login($_POST);
                if ($user_info) { // Periksa apakah hasil login tidak kosong
                    $_SESSION['logged_in'] = true;
                    $_SESSION['nama'] = $user_info['nama'];
                    $_SESSION['username'] = $user_info['username'];
                    $_SESSION['saldo_akun'] = $user_info['saldo_akun'];
                    $_SESSION['member'] = $user_info['member'];
                    $_SESSION['total_order'] = $user_info['total_order'];

                    echo "<script>alert('Login Berhasil')</script>";
                } else {
                    echo "<script>alert('Login Gagal')</script>";
                }
            }
        
            if($_SESSION['logged_in'] === false ) {
                $data['judul'] = "Login";
                $this->view('templates/headerlogin', $data);
                $this->view('home/login', $data);
                $this->view('templates/footerlogin', $data);
            } else if ($_SESSION['logged_in'] === true) {
                $data['judul'] = $_SESSION['nama'];
                $this->view('templates/headerlogin', $data);
                $this->view('home/profile', $data);
                $this->view('templates/footerlogin', $data);
            }
        }
        public function regist() 
        {
            if(isset($_POST['submit'])) {
                $result = $this->model('User_Model')->Regist($_POST); 
                if (is_string($result)) {
                    echo "<script>alert('$result')</script>";
                } else {
                    echo "<script>alert('Registrasi berhasil')</script>";
                }
            }
            $data['judul'] = "Register";
            $this->view('templates/headerlogin', $data);
            $this->view('home/regist', $data);
            $this->view('templates/footerlogin', $data);
        }
        public function profile() {
            $data['judul'] = 'Profile';
            $this->view('templates/headerlogin');
            $this->view('home/profile');
            $this->view('templates/footerlogin');
        }
        public function logout() {
            $_SESSION['logged_in'] = false;
            unset($_SESSION['nama']);
            unset($_SESSION['username']);
            header('Location: ' . BASE_URL . 'home');
            exit();
        }
    }
