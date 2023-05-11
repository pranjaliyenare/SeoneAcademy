<?php

namespace App\Controllers;
use App\Models\brochureModel;
use App\Models\registrationModel;
use App\Models\adminLoginModel;

class Home extends BaseController
{
    public function login()
     {
         return view('login');
     }

    public function adminLogin()
    {
        echo "abc";
        $session = session();
        $validation = \Config\Services::validation();
        $db = \Config\Database::connect();

        $input = $this->validate([
            'username' => 'required|valid_email',            
            'password' => 'required',
        ]);

        if (!$input) {
            echo view('login', ['validation' => $this->validator]);
        }
        else {            
            $adminLoginModel = new adminLoginModel();
            $email = $this->request->getVar('username');
            $password = $this->request->getVar('password');
            $query = $db->query("SELECT * FROM `seone_academy_admin_login` WHERE `admin_username` = '".$email."' AND `status` != 2");
            $results = $query->getResult();

            if($results) {
                foreach ($results as $row) {                    
                    echo $user = $row->admin_username;                 
                    echo $pass =$row->admin_pwd;
                        if($password == $pass) {                            
                                $_SESSION['ID'  ] = $row->id;  
                                return redirect()->to('register_details');               
                        } else{
                            $session->setFlashdata('msg', 'Password is Incorrect.');
                           // return redirect()->to('login');
                        }
                }
            } else{
                $session->setFlashdata('msg', 'Email does not exist.');
                //return redirect()->to('login');
            }
        }

    }

    public function index()
    {
        $data['page']='index';
        echo view('default/header', $data);
        echo view('default/navbar');
        echo view('pages/index');
        echo view('default/footer');
    }

    public function about()
    {
        $data['page']='about';
        echo view('default/header', $data);
        echo view('default/navbar');
        echo view('pages/about');
        echo view('default/footer');
    }

    public function courses()
    {
        $data['page']='courses';
        echo view('default/header', $data);
        echo view('default/navbar');
        echo view('pages/courses');
        echo view('default/footer');
    }

    public function blogs()
    {
        $data['page']='blogs';
        echo view('default/header', $data);
        echo view('default/navbar');
        echo view('pages/blog/blogs');
        echo view('default/footer');
    }

    public function contact()
    {
        $data['page']='contact';
        echo view('default/header', $data);
        echo view('default/navbar');
        echo view('pages/contact');
        echo view('default/footer');
    }

    //Blogs

    //forexTrader
    public function forexTrader()
    {
        $data['page']='forexTrader';
        echo view('default/header', $data);
        echo view('default/navbar');
        echo view('pages/blog/forexTrader');
        echo view('default/footer');
    }

    //trading
    public function trading()
    {
        $data['page']='trading';
        echo view('default/header', $data);
        echo view('default/navbar');
        echo view('pages/blog/trading');
        echo view('default/footer');
    }

    //ImpTradingSystem
    public function impTradingSystem()
    {
        $data['page']='impTradingSystem';
        echo view('default/header', $data);
        echo view('default/navbar');
        echo view('pages/blog/impTradingSystem');
        echo view('default/footer');
    }

    //successfulTrader
    public function successfulTrader()
    {
        $data['page']='successfulTrader';
        echo view('default/header', $data);
        echo view('default/navbar');
        echo view('pages/blog/successfulTrader');
        echo view('default/footer');
    }

    //riskMangTrading
    public function riskMangTrading()
    {
        $data['page']='riskMangTrading';
        echo view('default/header', $data);
        echo view('default/navbar');
        echo view('pages/blog/riskMangTrading');
        echo view('default/footer');
    }

    //tradingPsychology
    public function tradingPsychology()
    {
        $data['page']='tradingPsychology';
        echo view('default/header', $data);
        echo view('default/navbar');
        echo view('pages/blog/tradingPsychology');
        echo view('default/footer');
    }

    //form
    public function form()
    {
        $data['page']='form';
        // echo view('default/header', $data);
        // echo view('default/navbar');
        echo view('pages/form');
        // echo view('default/footer');
    }

    //demo
    public function demo()
    {
        $data['page']='demo';
        echo view('default/header',$data);
        echo view('default/navbar');
        echo view('pages/demo');
        echo view('default/footer');
    }

   

   //register_details
   public function register_details()
   {
    $registrationModel = new registrationModel();
    if($registrationModel->countAllResults()>0)
    {
        $data['user'] = $registrationModel->get_all_data();
    }
    else
    {
        $data['user']= "";
    }
    echo view('default/header');
    echo view('default/navbar');
    echo view('register_details',$data);
    echo view('default/footer');
    }

    //download_brocture
    public function download_brochure()
    {   
        $session = session();
        $validation =  \Config\Services::validation();
            $input = $this->validate([
                'name' => 'required',
                'addr' => 'required',
                'phone' => 'required',
                'email' => 'required'
                ]);
                if (!$input) {
                session()->setFlashdata('message', 'Please fill all data!');
                session()->setFlashdata('alert-class', 'alert-danger');
                return $this->response->redirect(site_url('index'));
             }
            else{
                $brochureModel = new brochureModel();
                // Add operation
                $brochure_id = $brochureModel->insert_data(array(
                "name" =>  $this->request->getVar('name'),
                "address" =>  $this->request->getVar('addr'),
                "phone" =>  $this->request->getVar('phone'),
                "email" => $this->request->getVar('email'),
                ));
                //Download PDF
                 return $this->response->download('public/assets/img/course/SEONE_brocture.pdf', null);

                if(!empty($brochure_id) || $brochure_id != '' || $brochure_id != 0) {
                session()->setFlashdata('message', 'Register Successfully!');
                    session()->setFlashdata('alert-class', 'alert-success');
                    return $this->response->redirect(site_url());
                } else {
                    session()->setFlashdata('message', 'Do not Register!');
                    session()->setFlashdata('alert-class', 'alert-danger');
                    return $this->response->redirect(site_url());
                }
            }
               
    }

    public function download_pdf($path)
    {
        return $this->response->download($path, null);
    }
    

    //registration_form
    public function registration()
    {
        $session = session();
    
            if($this->request->getVar('full_name')) 
            {
                $validation =  \Config\Services::validation();
                $input = $this->validate([
                'full_name' => 'required',
                'addr' => 'required',
                'email' => 'required',
                'phone' => 'required'
                ]);
                if (!$input) {
                session()->setFlashdata('message', 'Please fill all data!');
                session()->setFlashdata('alert-class', 'alert-danger');
               // return $this->response->redirect(site_url('form'));
                }
                else{
                $registrationModel = new registrationModel();
                // Add operation
                $register_id = $registrationModel->insert_data(array(
                "fullName" =>   $this->request->getVar('full_name'),
                "address" =>     $this->request->getVar('addr'),
                "email" =>      $this->request->getVar('email'),
                "phone" =>      $this->request->getVar('phone'),
                ));
                if(!empty($register_id) || $register_id != '' || $register_id != 0) {
                session()->setFlashdata('message', 'Register Successfully!');
                session()->setFlashdata('alert-class', 'alert-success');
                return $this->response->redirect(site_url('form'));
                } else {
                session()->setFlashdata('message', 'Do not Add!');
                session()->setFlashdata('alert-class', 'alert-danger');
                return $this->response->redirect(site_url('form'));
                }
                }
            } else {
                return redirect()->to('form');
            }    
    }


   //contact mail
    public function contact_datails()
    {
    $session = session();
    $email = \Config\Services::email();
    $from = $this->request->getVar('email');
    $name = $this->request->getVar('name');
    $subject = $this->request->getVar('subject');
    $to = 'info@seoneacademy.com';
    $message = $this->request->getVar('message');
    
     //send message
     $email->setFrom($from, $name);
     $email->setTo($to);
     $email->setSubject($subject);
     $email->setMessage(
        '<table style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot; font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-style: initial; text-decoration-color: initial;"
     width="100%" cellspacing="0" cellpadding="0" border="0" bgcolor="#ffffff">
        <tbody>
            <tr>
                <td valign="top" align="center">
                    <table class="mobile-shell" width="650" cellspacing="0" cellpadding="0" border="0">
                        <tbody>
                            <tr>
                                <td class="td container" style="width: 650px; min-width: 650px; font-size: 0pt; line-height: 0pt; margin: 0px; font-weight: normal; padding: 55px 0px;">
                                    <div style="text-align: center;"><img src="./public/assets/img/mail_logo.png" style="margin-bottom: 20px;"></div>
                                    <table style="width: 650px; margin: 0px auto;" cellspacing="0" cellpadding="0" border="0">
                                        <tbody>
                                            <tr>
                                                <td style="padding-bottom: 10px;">
                                                    <table width="100%" cellspacing="0" cellpadding="0" border="0" >
                                                        <tbody>
                                                            <tr>
                                                                <td class="tbrr p30-15" style="padding-left: 50px;    background-color: #000;" >
                                                                    <table width="100%" cellspacing="0" cellpadding="0" border="0" style="text-align;margin-top: 50px;padding-bottom: 30px;">
                                                                        <tbody>
                                                                            <tr><td  style="color: rgb(255, 255, 255); font-family: Muli, Arial, sans-serif; font-size: 20px; line-height: 46px; padding-bottom: 25px; font-weight: bold;">Hi '.$name.'</td></tr>
                                                                            <tr style="color: rgb(255, 255, 255); font-family: Muli, Arial, sans-serif; font-size: 20px; line-height: 30px; padding-bottom: 25px;"><td style="width: 10PX;"><b> Email </b></td><td>:</td><td>'.$from.'</td></tr>
                                                                            <tr style="color: rgb(255, 255, 255); font-family: Muli, Arial, sans-serif; font-size: 20px; line-height: 30px; padding-bottom: 25px;"><td style="width: 10PX;"><b> Subject </b></td><td>:</td><td>'.$subject.'</td></tr>
                                                                            <tr style="color: rgb(255, 255, 255); font-family: Muli, Arial, sans-serif; font-size: 20px; line-height: 30px; padding-bottom: 25px;"><td style="width: 10PX;"><b> Message </b></td><td>:</td><td>'.$message.'</td></tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                            </tr>
                                                            <br/><br/>
                                                        </tbody>
                                                        
                                                    </table>
                                                    <tr><td style="color: rgb(64 37 0); font-family: Muli, Arial, sans-serif; font-size: 18px; line-height: 30px; text-align: center; padding-bottom: 10px;">All Rights Reserved. © Seone Academy | Stocks | Forex | Commodities</td></tr>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>

                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
        </tbody>
    </table>'
);
    //   print_r($email);

      if($email->send())
      {
        echo $action="success";
           session()->setFlashdata('message', 'Message Send Successfully!');
           session()->setFlashdata('alert-class', 'alert-success');
      }
      else
      {
        
         echo $action="failed";
          session()->setFlashdata('message', 'Message Not Send, Please Check Your Email Id...!!!');
          session()->setFlashdata('alert-class', 'alert-danger');
      }

          return $this->response->redirect(site_url("contact"));

    }

   

}
