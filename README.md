系統擷取畫面
====
首頁
-------
* 提供

![image](https://i.imgur.com/aKammqa.png)
![image](https://i.imgur.com/DgjUNxM.png)
![image](https://i.imgur.com/2Uuywlu.png)
![image](https://i.imgur.com/CZenvw5.png)
![image](https://i.imgur.com/5rWWFE2.png)


會員登入後頁面
-------
會員留言頁面
-------
後台首頁
-------
後台管理會員
-------
後台管理留言
-------
後台管理預約參訪
-------
後台寄送預約參訪mail
-------

系統的名稱及作用
====
台灣美術館導覽預約參訪系統

* 為台灣美術館做一個整體的導覽
* 將美術館附近的熱門景點做簡單的介紹
* 會員提前預約參訪讓館方可以派專人將館內介紹的更詳細

系統的主要功能
====
前台
-------
* 首頁 [3A732005李亞宣](https://github.com/3a73205)
    * Route::get('/',[\App\Http\Controllers\HomeController::class,'index'])->name('home.index');

* 登入後頁面 [3A732005李亞宣](https://github.com/3a73205)
    * Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function (){return view('dashboard');})->name('dashboard');'

* 美術館歷史 [3A732005李亞宣](https://github.com/3a73205)
    * Route::get('/history',[\App\Http\Controllers\HistoryController::class,'index'])->name('history.index');

* 美術館內部樓層 [3A732005李亞宣](https://github.com/3a73205)
    * Route::get('/internal',[\App\Http\Controllers\InternalController::class,'index'])->name('internal.index');

* 周遭景點 [3A732005李亞宣](https://github.com/3a73205)
    * Route::get('/external',[\App\Http\Controllers\ExternalController::class,'index'])->name('external.index');

* 參訪路線 [3A732005李亞宣](https://github.com/3a73205)
    * Route::get('/ways',[\App\Http\Controllers\WaysController::class,'index'])->name('ways.index');
    * Route::get('/way1',[\App\Http\Controllers\Way1Controller::class,'index'])->name('way1.index');
    * Route::get('/way2',[\App\Http\Controllers\Way2Controller::class,'index'])->name('way2.index');
    * Route::get('/way3',[\App\Http\Controllers\Way3Controller::class,'index'])->name('way3.index');
    
* 預約參訪 [3A732005李亞宣](https://github.com/3a73205)
    * Route::middleware(['auth:sanctum', 'verified'])->get('/visits',[\App\Http\Controllers\VisitsController::class,'index'])->name('visits.index');//預約參訪
    * Route::post('/visit',[\App\Http\Controllers\VisitsController::class,'store'])->name('visit.store');//儲存預約參訪
    
* 留言板  [3A732009張庭瑜](https://github.com/3a732009)
    * Route::middleware(['auth:sanctum', 'verified'])->get('/messages', [MessageController::class,'index'])->name('messages.index');
    * Route::post('/message', [MessageController::class,'store'])->name('message.store');
    * Route::delete('/message/{message}', [MessageController::class,'destroy']);

後台
-------
* 管理員頁面 [3A732009張庭瑜](https://github.com/3a732009)
    * $router->get('/', 'HomeController@index')->name('home');
    
* 管理會員 [3A732009張庭瑜](https://github.com/3a732009)
    * Route::resource('users', '\App\Admin\Controllers\UserController');
    
* 管理留言 [3A732009張庭瑜](https://github.com/3a732009)
    * Route::resource('messages','\App\Admin\Controllers\MessageController');
    
* 管理預約參訪 [3A732009張庭瑜](https://github.com/3a732009)
    * Route::resource('visits','\App\Admin\Controllers\VisitsController');
    
* 寄送email [3A732009張庭瑜](https://github.com/3a732009)
    * Route::resource('sendmail','\App\Admin\Controllers\MailController');
    
ERD
-------

![image](https://i.imgur.com/5RXs89s.png)

關聯式綱要圖
-------

![image](https://i.imgur.com/JG4SJtL.png)

資料表欄位設計
-------
* 使用者

![image](https://i.imgur.com/AnTTGfZ.jpeg)

* 管理員

![image](https://i.imgur.com/mCC4aNe.jpeg)

* 預約參訪

![image](https://i.imgur.com/E60I15N.jpg)

* 路線

![image](https://i.imgur.com/GQW2Kr9.jpeg)

* 會員留言板

![image](https://i.imgur.com/2m6sQSX.jpg)

* 美術館歷史

![image](https://i.imgur.com/5ZMUKhz.jpeg)

* 內部樓層

![image](https://i.imgur.com/9YpN7iu.jpg)

* 周遭景點

![image](https://i.imgur.com/HN129VV.jpeg)

初始專案與DB負責的同學
====
* 初始專案 [3A732005李亞宣](https://github.com/3a73205)
* 資料庫及資料表建立、資料表關連 [3A732005李亞宣](https://github.com/3a73205) [3A732009張庭瑜](https://github.com/3a732009)

額外使用的套件或樣板
====
* 前台樣板 [Hielo](https://templated.co/hielo)

採用選單、首頁格式

* 後台  [Laravel-admin](https://laravel-admin.org)

採用其版面和功能

系統使用者測試帳號
====
前台-會員
-------
* 帳號:ab53014698@gmail.com
* 密碼:a123456789
* 帳號:tingyuchang595@gmail.com
* 密碼:a123456789

後台-管理者
-------
* 帳號:admin
* 密碼:admin

測試檔案存放位置
-------
* storage下->sql->final06.sql

系統開發人員與工作分配
====
[3A732005李亞宣](https://github.com/3a73205)
-------
* 查看網站首頁(會員登入前頁面)
* 查看會員頁面(會員登入後頁面)
* 美術館歷史介紹頁面
* 美術館內部樓層介紹
* 周遭景點介紹
* 參訪路線介紹
* 會員預約參訪頁面(會員登入後)
* 系統測試

[3A732009張庭瑜](https://github.com/3a732009)
-------
* 會員留言板(會員登入後)
* 管理員新增會員
* 管理員刪除會員
* 管理員新增留言
* 管理員修改留言
* 管理員刪除留言
* 管理員新增預約參訪
* 管理員修改預約參訪
* 管理員刪除預約參訪
* 管理員寄送email給預約參訪的會員
* 系統測試
* readme編寫和排版

