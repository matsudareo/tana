<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Contact;

class CafeController extends Controller
{
    public function index() {
        return view('index');
       }
      
       public function contact_page() {
            $contacts = Contact::all();
           return view('contact.contact',compact('contacts'));
       }
   
       public function postParam(Request $request) {
           $submit = $request->get('submit');
           if ($submit == '送信') {
               $name       = $request->get('name');
               $kana       = $request->get('kana');
               $tel        = $request->get('tel');
               $email      = $request->get('email');
               $message    = $request->get('message');
               return view('contact.contact', compact('submit','name','kana','tel','email','message'));
            }  elseif ($submit == '編集') {
                $id         = $request->get('id');
                $contacts   = Contact::all();
                return view('contact.contact', compact('submit','id','contacts'));
            
            } elseif ($submit == '削除') {
                $id     = $request->get('id');
                $sql    = 'DELETE FROM contacts WHERE id = :id ';
                $bind   = ['id' => $id];
                DB::delete($sql, $bind);
                $contacts = Contact::all();
                return view('contact.contact', compact('submit','id','contacts'));
            
           }  elseif ($submit == '戻る') {
               $contacts = Contact::all();
               return view('contact.contact', compact('submit','contacts'));
           }else {
               $contacts = Contact::all();
               return view('contact.contact', compact('contacts'));
           }
       }
   
       public function confirm_page() {
           return view('contact.confirm');
       }
   
       public function complete_page() {
           return view('contact.complete');
       }

       public function postParamInsert(Request $request) {
           $submit = $request->get('submit');
           if ($submit == '送信') {
            if (!function_exists('e')) {
                function e($value) {
                    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
                }
            }
         
            //    require_once(ROOT_PATH.'resources/views/layouts/value_assign.blade.php');
            $id = isset($_SESSION['id']) ? $_SESSION['id'] : '';
            if(!isset($_SESSION)) session_start();
// 変数へ代入
            $name = isset($_SESSION['name']) ? $_SESSION['name'] : '';
            $kana = isset($_SESSION['kana']) ? $_SESSION['kana'] : '';
            $tel = isset($_SESSION['tel']) ? $_SESSION['tel'] : '';
            $email = isset($_SESSION['email']) ? $_SESSION['email'] : '';
            $message = isset($_SESSION['message']) ? $_SESSION['message'] : '';
               $sql =  'INSERT INTO contacts (name, kana, tel, email, body) VALUES (:name, :kana, :tel, :email, :message)';
               $bind = ['name' => $name, 'kana' => $kana, 'tel' => $tel, 'email' => $email, 'message' => $message];
               DB::insert($sql, $bind);
               return view('contact.complete', compact('submit','name','kana','tel','email','message'));
               exit;
           }
           return view('contact.complete');
       }

       public function delete_page() {
        return view('contact.delete');
    }

       public function edit_page() {
        if(!isset($_SESSION)) session_start();
        $id     = $_SESSION['id'];
        $sql    = "SELECT * FROM contacts WHERE id = :id";
        $bind   = ['id' => $id];
        $stmt   = DB::select($sql, $bind);
        return view('edit.edit', compact('stmt','id'));
    }

    
    public function edit_postParam(Request $request) {
        $submit = $request->get('submit');
        if ($submit == '送信') {
            $id         = $request->get('id');
            $name       = $request->get('name');
            $kana       = $request->get('kana');
            $tel        = $request->get('tel');
            $email      = $request->get('email');
            $message    = $request->get('message');
            return view('edit.edit', compact('submit','id','name','kana','tel','email','message'));
        } elseif ($submit == '戻  る') {
            return view('edit.edit', compact('submit'));
        }else {
            return view('edit.edit');
        }
    }

    public function edit_confirm_page() {
        return view('edit.edit_confirm');
    }

    public function edit_complete_page() {
        return view('edit.edit_complete');
    }
    public function postParamUpdate(Request $request) {
        $submit = $request->get('submit');
        if(!isset($_SESSION)) session_start();
        $id     = $_SESSION['id'];
        $name   = $_SESSION['name'];
        $kana   = $_SESSION['kana'];
        $tel    = $_SESSION['tel'];
        $email  = $_SESSION['email'];
        $message    = $_SESSION['message'];
        if ($submit == '送信') {
            if ($submit == '送信') {
                if (!function_exists('e')) {
                    function e($value) {
                        return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
                    }
                }

            $id = isset($_SESSION['id']) ? $_SESSION['id'] : '';
            if(!isset($_SESSION)) session_start();
// 変数へ代入
            $name = isset($_SESSION['name']) ? $_SESSION['name'] : '';
            $kana = isset($_SESSION['kana']) ? $_SESSION['kana'] : '';
            $tel = isset($_SESSION['tel']) ? $_SESSION['tel'] : '';
            $email = isset($_SESSION['email']) ? $_SESSION['email'] : '';
            $message = isset($_SESSION['message']) ? $_SESSION['message'] : '';
            $sql = 
                "UPDATE contacts
                SET
                    name = :name,
                    kana = :kana,
                    tel = :tel,
                    email = :email,
                    body = :message
                WHERE id = :id
                ";
            $bind = ['id'=>$id,'name'=>$name,'kana'=>$kana,'tel'=>$tel,'email'=>$email,'message'=>$message];
            DB::update($sql, $bind);
            return view('edit.edit_complete', compact('submit'));
        } else {
            return view('edit.edit_complete');
        }
    }

    
    }
}

