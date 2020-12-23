@if (count($errors) > 0)
    <!-- 表單錯誤清單 -->
    <div class="alert alert-danger">
        <strong>請重新輸入</strong>

        <br><br>

        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
