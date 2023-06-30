<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use GuzzleHttp\Client;
use Illuminate\Support\Facades\Storage;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
class admin extends Controller
{


    public function adminlogin(Request $req)
    {
        $name = $req->UserName;
        $pass = $req->password;
        if ($name == "Jamil Zilani") {
            if ($pass == "1234") {
                return redirect("adminhome");
            } else {
                return redirect("adminlogin");
            }
        } else {
            return redirect("adminlogin");
        }
    }
    public function adminevent(){

        $data = DB::select("SELECT * FROM `events` ORDER BY (id) DESC");
        return view('adminevent', ['data' => $data]);
    }

    public function admineventadd(Request $req){

        $file = $req->file;
        $img_name = $_FILES['file']['name'];
        $img_size = $_FILES['file']['size'];
        $tmp_name = $_FILES['file']['tmp_name'];

        $error = $_FILES['file']['error'];
        if ($error === 0) {
            $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
            $img_ex_lc = strtolower($img_ex);

            $allowed_exs = array("jpg", "jpeg", "png", "pdf", "doc", "ppt");
            if (in_array($img_ex_lc, $allowed_exs)) {
                $new_img_name = uniqid($req->name, true) . '.' . $img_ex_lc;
                $img_upload_path = 'upload/' . $new_img_name;
                move_uploaded_file($tmp_name, $img_upload_path);

                // Insert into Database
                $data = array('name' => $req->name, "description" => $req->dis, "image" => $new_img_name);
                DB::table('events')->insert($data);


                return redirect("adminevent");
            }
        }

    }

    public function removeevent($id) {

        DB::delete('DELETE FROM `events` WHERE id = ?', [$id]);

        return redirect("adminevent");
    }
    public function adminriderasp(){
        $data = DB::select("SELECT * FROM `rider`");
        return view('adminriderasp', ['data' => $data]);

    }
    public function adminreqasp($id,$email,$name) {
        $pass=md5("1234");
           DB::update("UPDATE `rider` SET `status`='Accept',`password`='$pass' WHERE id= ?", [$id]);

           try {
            $mail = new PHPMailer(true);
            //Server settings
            $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'patronwelfare@gmail.com';                     //SMTP username
            $mail->Password   = 'wyyvmgzsbhiybgxr';                               //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            //Recipients
            $mail->setFrom('patronwelfare@gmail.com', 'Patron Administrator (via Patron)');
            $mail->addAddress($email, $name);     //Add a recipient




            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'Patron: New user account';
            $mail->Body    = "Hi ".$name . "<br>

            A new account has been created for you at <b>'Patron'</b>
            and you have been issued with a new temporary password.<br>

            Your current login information is now:<br>
            username:" . $email . "<br>
            password: 1234<br>
            (you will have to change your password
            when you login for the first time)

            To start using 'Patron’,login at
            http://localhost:8000/riderlogin

            <br> In most mail programs, this should appear as a blue link
            which you can just click on. If that doesn't work,
            then cut and paste the address into the address
            line at the top of your web browser window.<br>

            Cheers from the 'Patron’ administrator,

            <br>Patron Administrator
            <br> patronwelfare@gmail.com";


            $mail->send();
            echo 'Message has been sent';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }

        return redirect("adminriderasp");
    }
    public function admindonateinfo(){

        $data = DB::select("SELECT * FROM `donate` ORDER BY(id) DESC");
        return view('admindonateinfo', ['data' => $data]);

    }
    public function admindonateinfoapply(Request $req){
        
        $data = array('name' => $req->Name, "email" => $req->Email, "phone" => $req->Phone);
        DB::table('donate')->insert($data);
        return redirect('/');
    }
    public function volunteerapply(Request $req){

        $file = $req->file;
        $img_name = $_FILES['file']['name'];
        $img_size = $_FILES['file']['size'];
        $tmp_name = $_FILES['file']['tmp_name'];
        $error = $_FILES['file']['error'];
        if ($error === 0) {
            $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
            $img_ex_lc = strtolower($img_ex);

            $allowed_exs = array("jpg", "jpeg", "png", "pdf", "doc", "ppt");
            if (in_array($img_ex_lc, $allowed_exs)) {
                $new_img_name = uniqid($req->name, true) . '.' . $img_ex_lc;
                $img_upload_path = 'upload/' . $new_img_name;
                move_uploaded_file($tmp_name, $img_upload_path);

                // Insert into Database
                $data = array('name' => $req->name, "email" => $req->email, "password" => "", "phone" => $req->phone, "address" => $req->address, "nid" => $req->nid, "status" => "Pandding", "image" => "", "cv" => $new_img_name);
                DB::table('volunteer')->insert($data);


                return redirect("userlogin");
            }
        }
    }
    public function adminvolunteerasp(){
        $data = DB::select("SELECT * FROM volunteer");
        return view('adminvolunteerasp', ['data' => $data]);

    }
    public function adminvreqasp($id,$email,$name){
        $pass=md5("1234");
           DB::update("UPDATE `volunteer` SET `status`='Accept',`password`='$pass' WHERE id= ?", [$id]);

           try {
            $mail = new PHPMailer(true);
            //Server settings
            $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'patronwelfare@gmail.com';                     //SMTP username
            $mail->Password   = 'wyyvmgzsbhiybgxr';                               //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            //Recipients
            $mail->setFrom('patronwelfare@gmail.com', 'Patron Administrator (via Patron)');
            $mail->addAddress($email, $name);     //Add a recipient




            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'Patron: Congratulations! selected as a volunteer';
            $mail->Body    = "Hi ".$name . "<br>

            Congratulations on being selected as a volunteer! Your commitment to making a difference is commendable. As a volunteer, you have the opportunity to contribute to various mission causes and create a positive impact. Whether you choose to work in humanitarian relief, environmental conservation, social justice, or any other field, your dedication and efforts will be invaluable in bringing about change and helping those in need. Remember to stay focused, motivated, and open-minded throughout your volunteer journey. Your contribution, no matter how small, can make a significant difference in someone's life. Thank you for your commitment to making the world a better place.
          

            Cheers from the 'Patron’ administrator,

            <br>Patron Administrator
            <br> patronwelfare@gmail.com";


            $mail->send();
            
        } catch (Exception $e) {
            
        }

      
        return redirect("adminvolunteerasp");
    }
    public function adminhome(){
      
        $data = DB::select("SELECT * FROM `food` ORDER BY(id) DESC");
        return view('adminhome', ['data' => $data]);

    }
    public function riderlist($id){






        
        
        $data = DB::select("SELECT * FROM `pick` WHERE fid='$id' ORDER BY(status)");
        return view('riderlist', ['data' => $data]);

    }
public function riderasp($id,$fid){
   
    DB::update("UPDATE `pick` SET `status`='accept' WHERE id='$id'");



    
    return redirect("riderlist/$fid");
}
    
}
