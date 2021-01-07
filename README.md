系統擷取畫面
====
首頁
-------
* 提供

![image](https://i.imgur.com/aKammqa.png)

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
額外使用的樣板
====
系統使用者測試帳號
====
前台-會員
-------
後台-管理者
-------
* 帳號:admin
* 密碼:admin

測試檔案存放位置
-------
系統開發人員與工作分配
====
[3A732005李亞宣](https://github.com/3a73205)
-------
[3A732009張庭瑜](https://github.com/3a732009)
-------
