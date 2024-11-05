<?php 
class Order extends Controller {
    public function game($id) {
        $data['judul'] = $this->model('Game_model')->getGameName();
        $data['games'] = $this->model('Game_model')->getGameById($id);
        $data['id'] = $id;
        $data['membership'] = $this->model('Item_model')->getMembershipItems($id);
        $data['diamond'] = $this->model('Item_model')->getDiamondItems($id);

        $other = $this->model('Item_model')->getOtherItems($id);
        $data['other'] = $other['other'];
        $data['other_validation'] = $other['rowcount'];
        
        $data['e-wallet'] = $this->model('Payment_model')->getEwalletPayments();
        $data['bank'] = $this->model('Payment_model')->getBankPayments();
        // $data['game'] = $this->model('Game_model')->getAllGame();
        // $data['item'] = $this->model('Item_model')->getAllItem();
        $data['data_login'] = $this->model('Data_Login_model')->getDataLoginById($id);
        $this->view('templates/header2', $data);
        $this->view('order/game', $data);
        $this->view('templates/footer', $data); 

        
    }
    public function ordered() {
        // var_dump($_POST);
        $this->view('order/ordered');
        if(isset($_POST['order'])) {
            $this->model('Game_model')->makeOrder($_POST);
            
        }
    }
    
}