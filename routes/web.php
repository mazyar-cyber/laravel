<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
//Route::get('/contact', function () {
//    return "مخاطبین";
//});
//Route::get("/about us", function () {
//    return 'به صفحه ی درباره ما  خوش آمدید';
//});
//Route::get("/post/{idwdwedwe}/{name}", function ($id, $name) {
//    echo "name= " . $name . '<br>';
//    return "id= " . $id;
//});
//Route::get('admin/post/example', function () {
//    $url = route('post');
//    return "صفحه ی ادمین" . $url;
//})->name('post');
//Route::get('/news', function () {
//    return 'به صفحه ی اخبار خوش آمدید';
//});
//Route::redirect('/n', '/news');
//Route::get('/mazyar', function () {
//    return view('mazyar');
//});
//Route::prefix('user')->group(function () {
//    Route::get('/login', function () {
//        return "صفحه لاگین";
//    });
//    Route::get('/sign up', function () {
//        return 'sign up page';
//    });
//});
//Route::get('/nova', function () {
//    return "nova page";
//})->name("nova");
//Route::get('/post','PostController@index');
//Route::get('/post/{id?}', 'PostController@create');
//Route::get('/show-view/{id?}/{name?}', 'PostController@showMyView');
//Route::get('/sum/{a}/{b}', 'PostController@Plus')->name('plus');
//Route::get('/plus/{x}/{y}', "Sumulation@Sum");
//Route::get('/cross/{x}/{y}', "CrossController@Cross");
//Route::get('/contact', 'PostController@ShowContact');
//Route::get('/register/{name}', 'PostController@Register');
//
//Route::get('/insert', 'PostController@insert');
//Route::get('/select', 'PostController@select');
//Route::get('/update/{id}', 'PostController@updatee');
//Route::get('/delete/{id}', 'PostController@delete');
//Route::get('/editdata/{id}', "PostController@editData")->name('editdata');
//
//Route::get('/get-post', "PostController@getAllPost");
//Route::get('/get-post/{id}', "PostController@getPost");
//Route::get('/get-post-a', "PostController@getPostA");
//Route::get('/get-user', "PostController@getAllUsers");
//Route::get('/get-basket', "BasketController@getBasket");
//
//Route::get('/save-post/{text}/{email}', "BasketController@insertData");
//Route::get('/update-basket', "BasketController@updateData");
//Route::get('/update-selected-basket/{id}', "BasketController@updateSelectData");
//Route::get('/delete-basket/{id}', "BasketController@deleteBasket");
//Route::get('/data-trash', "BasketController@workWithTrash");
//Route::get('/data-restore/{id}', "BasketController@DataRestore");
//Route::get('/force-delete-basket/{id}', "BasketController@forceDelete");
//
//Route::get('/get-user', "UserController@getUsers");
//Route::get('/create-user', "UserController@create");
//Route::get('/update-user/{id}', "UserController@updater");
//Route::get('/delete-user/{id}', "UserController@delete");
//Route::get('/restore-user/{id}', "UserController@restore");
//Route::get('/forceDelete-user/{id}', "UserController@forceDelete");
//Route::get('/trash-user', "UserController@trash");
//
//Route::get("/insert-contact", "ContactController@insert");
//Route::get('/get-contact', "ContactController@getContact");
//Route::get('/update-contact/{id}', "ContactController@updateContact");
//Route::get('/delete-contact/{id}', "ContactController@deleteContact");
//Route::get('/forceDelete-contact/{id}', "ContactController@forceDelete");
//Route::get('/restore-contact/{id}', "ContactController@restore");
//
////eloquent relationship
////one to one
//
//Route::get('/user/{id}/post', function ($id) {
//    $res = \App\User::find($id)->post->lastname;
//    return $res;
//});
////reverse
//Route::get('/post/{id}/user', function ($id) {
//    $res = \App\Post::find($id)->user->email;
//    return $res;
//});
//
////another example
//Route::get('/product/{id}/user', function ($id) {
//    $res = \App\Product::find($id)->user;
//    return $res;
//});
//Route::get('/user/{id}/product', function ($id) {
//    $product = \App\User::find($id)->product;
//    return $product;
//});
//
//
////one to many relationship
//Route::get('/user/{id}/products', function ($id) {
//    $products = \App\User::find($id)->products;
//    foreach ($products as $pro):
//        echo $pro->title;
//        echo "</br>";
//    endforeach;
//});
////many to many relationship
//Route::get('/user/{id}/roles', function ($id) {
//    $roles = \App\User::find($id)->roles;
//    foreach ($roles as $role) {
//        echo $role->name . "<br>";
//    }
//});
//Route::get('/role/{id}/users', function ($id) {
//    $users = \App\Role::find($id)->users;
//    foreach ($users as $user) {
//        echo $user->name . "<br>";
//    }
//});
//Route::get('/user/pivot', function () {
//    $user = \App\User::find(1);
//    foreach ($user->roles as $u) {
//        echo $u->pivot->created_at . "<br>";
//        echo $u->pivot->updated_at . "<br>";
//    }
//});
//Route::get('/user/{id}/work', function ($id) {
//    $work = \App\User::find($id);
//    echo $work->name . " دارای این شغل ها است:<br>" . "<br>";
//    foreach ($work->work as $w) {
//        echo $w->name . "<br>";
//    }
//});
//Route::get('/work/{id}/user', function ($id) {
//    $user = \App\Work::find($id)->user;
//    echo \App\Work::find($id)->name;
//    echo " ";
//    echo "شغل این افراد است:<br>";
//    foreach ($user as $u) {
//        echo $u->name . "<br>";
//    }
//});
//
//
////has many through:
//Route::get('/country/{id}/post', function ($id) {
//    $posts = \App\Country::find($id)->post;
//    echo "از کشور " . \App\Country::find($id)->name;
//    echo " این پست ها رو داریم: <br> ";
//    foreach ($posts as $p) {
//        echo $p->name, "<br>";
//    }
//});
////another examples:
//
//Route::get('/city/{id}/post', function ($id) {
//    $post = \App\City::find($id)->post;
//    echo "از شهر" . \App\City::find($id)->name . "این پست ها رو داریم:<br>";
//    foreach ($post as $p) {
//        echo $p->name . "<br>";
//    }
//});
//Route::get('/user/{id}/city', function ($id) {
//    $city = \App\User::find($id)->city;
//    return $city;
//});
//
//Route::get('/city/{id}/user', function ($id) {
//    $city = \App\City::find($id)->user;
//    echo "<p dir='rtl'>";
//    echo "از شهر ";
//    echo \App\City::find($id)->name . " این افراد را داریم:";
//    echo "<br>";
//    foreach ($city as $c => $key) {
//        $c = $c + 1;
//        echo "$c" . $key->name . "<br>";
//    }
//    echo "</p>";
//});
//Route::get('/country/{id}/user', function ($id) {
//    $user = \App\Country::find($id)->user;
//    echo " کشور " . \App\Country::find($id)->name;
//    echo " این کاربران را دارد" . "<br>";
//    foreach ($user as $u) {
//        echo $u->name . "<br>";
//    }
//});
//
//
////morph one to many relationship:
//Route::get('/user/{id}/photo', function ($id) {
//    $photos = \App\User::find($id)->photo;
//    return $photos;
//});
//
//Route::get('/post/{id}/photo', function ($id) {
//    $photos = \App\Post::find($id)->photo;
//    return $photos;
//});
//Route::get('/photo/{id}/user', function ($id) {
//    $user = \App\Photo::find($id);
//    return $user->imageable_type::find($user->imageable_id);
//});
//
//
////morph many to many
//Route::get('/post/{id}/tag', function ($id) {
//    $tags = \App\Post::find($id)->tags;
//    return $tags;
//});
//Route::get('/video/{id}/tag', function ($id) {
//    $tags = \App\Video::find($id)->tags;
//    return $tags;
//});
//Route::get('/giff/{id}/tag', function ($id) {
//    $tags = \App\Giff::find($id)->tags;
//    return $tags;
//});
////reverse:
//Route::get('/tag/{id}/post', function ($id) {
//    $posts = \App\Tag::find($id)->post;
//    return $posts;
//});
//Route::get('/tag/{id}/video', function ($id) {
//    $videos = \App\Tag::find($id)->videos;
//    return $videos;
//});
//
//
////CRUD one to many relationship:
////create:
//Route::get('/create/{id}', function ($id) {
//    $user = \App\User::find($id);
//    $post = new \App\Post();
//    $post->name = "post21";
//    $post->lastname = "post21";
//    $user->post()->save($post);
//});
////read:
//Route::get('/read/{id}', function ($id) {
//    $user = \App\User::find($id);
//    foreach ($user->post as $post) {
//        echo $post->name . '<br>';
//    }
//});
////update::
//Route::get('/update/{id1}/{id2}', function ($id1, $id2) {
//    $user = \App\User::find($id1);
//    $user->post()->where("id", $id2)->update(['name' => 'name by crud', "lastname" => 'update with CRUD']);
//});
////delete:
//Route::get('/delete/{id1}/{id2}', function ($id1, $id2) {
//    $user = \App\User::find($id1);
//    $user->post()->whereId($id2)->delete();
//});
//
//
////CRUD many to many relationship
////create:
//Route::get('/create-role/{id}', function ($id) {
//    $user = \App\User::find($id);
//    $role = new \App\Role();
//    $role->name = "مدیر";
//    $user->roles()->save($role);
//});
////read:
//Route::get('/read-user-role/{id}', function ($id) {
//    $user = \App\User::find($id);
//    foreach ($user->roles as $role) {
//        echo $role->name . "<br>";
//    }
//});
//Route::get('/update-user-role/{id}', function ($id) {
//    $user = \App\User::find($id);
//    if ($user->has("roles")) {
//        foreach ($user->roles as $role) {
//            if ($role->name == "مدیر") {
//                $role->name = "manager";
//                $role->save();
//            }
//        }
//    }
//});
////delete
//Route::get('/delete-user-role/{id}', function ($id) {
//    $user = \App\User::find($id);
//    if ($user->has("roles")) {
//        foreach ($user->roles as $role) {
//            if ($role->name == "author") {
//                $role->delete();
//                $role->detach($role->id);
//            }
//        }
//    }
//});
//Route::get('/datach-user-role/{id}', function ($id) {
//    $user = \App\User::find($id);
//    $user->roles()->detach(3);
//});
//Route::get('/attach/{id}', function ($id) {
//    $user = \App\User::find($id);
//    $user->roles()->attach(2);
//});
//Route::get('/sync/{id}', function ($id) {
//    $user = \App\User::find($id);
//    $user->roles()->sync([1, 2, 3]);
//});
//
//
////Polymorphic CRUD operation
//Route::get('/create-tag/{id}', function ($id) {
//    $video = \App\Video::find($id);
//    $video->tags()->create(["name" => 'morph video']);
//});
////Route::get('/attach-tag-to-giff/{id}/{id2}', function ($id, $id2) {
////    $giff = \App\Giff::find($id);
//////    $tag = \App\Tag::find($id2);
////    $giff->tags()->attach($id2);
////});
////read:
//Route::get('/read-tag-of-video/{id}', function ($id) {
//    $video = \App\Video::find($id);
//    foreach ($video->tags as $tag) {
//        echo $tag->name . "<br>";
//    }
//});
//
////update:
//Route::get('/update-tag-of-video/{id}', function ($id) {
//    $video = \App\Video::find($id);
//    foreach ($video->tags as $tag) {
//        if ($tag->name == "morph tag") {
//            $tag->name = 'مورف تگ';
//            $tag->save();
//        }
//    }
//});
//Route::get('/update-tag-of-giff/{id}', function ($id) {
//    $giff = \App\Giff::find($id);
//    foreach ($giff->tags as $tag) {
//        if ($tag->name == "It's for morph giff") {
//            $tag->name = "update with CRUD";
//            $tag->save();
//        }
//    }
//});
//
////delete:
//Route::get('/delete-tag/{id}', function ($id) {
//    $video = \App\Video::find($id);
//    $tag = $video->tags;
//    $deleteTag = $tag->where('id', 2)->first();
//    $deleteTag->delete();
//    //detaching:
//    $video->tags()->detach(2);
//});
////attach:
//Route::get('/attach-tag-from-video/{id}', function ($id) {
//    $video = \App\Video::find($id);
//    $video->tags()->attach(2);
//});
////sync:
//Route::get('/sync-tag-for-video/{id}', function ($id) {
//    $video= \App\Video::find($id);
//    $video->tags()->sync([1,2,3]);
//});


////form CRUD resources:
//Route::resource('/posts', "PostController")->middleware('auth','verified');
//Route::resource('/basket', "BasketController");
//Route::resource('/contact', "ContactController");
//Route::resource('/product', "ProductController");
//
//use Illuminate\Support\Facades\Storage;
//
//Route::get('/file', function () {
//    return Storage::disk('file')->download('XZOeQ0ulzXJBU6XzmgilRpOlLpzeAk4JlcYWJ9RI.jpeg');
//});
//Route::get('/pro', function () {
//    return Storage::disk('product')->download('UG0pJDyM2R2lKQksuJmMGYeZDVk2FtieWs9IXdCI.png');
//});


Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->middleware(['auth', 'verified'])->name('home');
Route::get('/', function () {
//    $user=Auth::user();
//    return $user;
//    $email='m@m.com';
//    $user=\App\User::findOrFail(10);
//    $auth=Auth::attempt(['email'=>$email,'password'=>'UrKXrRLxAG5AwT7']);
////    dd($auth);
//    Auth::logout();
////    $auth1=Auth::login($user);
////    dd($auth1);
});
Route::get('/authorize/{id}', function ($id) {
    $user = \App\User::find($id);
    dd(($user->isAdmin()));
})->middleware(['isAdmin']);

Route::get('/logout', function () {
    Auth::logout();
});

Route::get('/test', function () {
    echo "<center>";
    echo 'Sorry  you are not admin!' . "<br>";
    $route = route('home');
    echo "<a href='$route'>" . 'click here to go your dashboard page' . "</a>";
    echo "<center>";
});
//practice for middleware:

//Route::get('/admin', function () {
//    echo "Hello admin";
//})->middleware('isAdmin:مدیر');
//Route::get('/director/{id}', function ($id) {
//    $user = \App\User::find($id);
//    dd($user->isDirector());
//});
//Route::get('/poya', function () {
//    echo "hello poya to your page";
//})->middleware('isDirector');
//
//Route::get('/specialPage', function () {
//    echo "welcome to your private page!";
//})->middleware('defineAge');
//Route::get('/age', function () {
//    echo "<center>";
//    echo "You're are less than 18!";
//    echo "</center>";
//});


//ACL
Route::resource('/posts', "PostController")->middleware('auth', 'verified');
Route::resource('/contact', "ContactController")->middleware('auth', 'verified');
Route::resource('/product', "ProductController")->middleware('auth', 'verified');

//session:
Route::get('/session', function (Request $request) {
//    $request->session()->put('username', 'mazyar');
//    session(['email' => 'mazyarmg7731@gmail.com']);
//    $request->session()->forget('username');
    //$request->session()->flash('message','welcome to your page');
    //$request->flush();
    $request->session()->keep('message');
    return $request->session()->all();
});
//I have change something
