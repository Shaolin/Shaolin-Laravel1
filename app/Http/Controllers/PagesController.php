<?php




namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
 use Illuminate\Support\Facades\DB;

class PagesController extends Controller
{
    public function index(){
        // $title = 'Welcome to laravel';
      $posts =  Post::get()->count();
      dd($posts);
        

    


        
          return view('pages.index');
    }
    public function about(){
        return view('pages.about');
    }
    public function contact(){
        $data = array(
            'title' => 'Services',
            'services' => ['Web design', 'Programming', 'SEO']
        );
        return view('pages.contact')->with($data);
    }
}
