<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class LatihanController extends Controller
{
public function index()
{
return "Oke ini Latihan Controller";
}
public function beranda()
{
$data = array('nama' => 'Fahrul adalah murid saitama');
return view('beranda', $data);
}
}
