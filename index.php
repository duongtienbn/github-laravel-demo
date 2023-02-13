<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" class="css">
    <title>ĐĂNG KÍ TÀI KHOẢN VỚI BOOTSTRAP</title>
</head>
<body>
    <div id="wrapper">
        <div class="container">
            <div class="row justify-content-around">
                <form action=" " class="col-md-6 
                bg-light p-3 my-3"> 
                    <h1 class="text-center 
                    text-uppercase h3 py-3">学生を登録して下さい。</h1>
                    <div class="form-group">
                        <label for="student_number">学生番号</label>
                        <input type="number" name="student_number" id="student_number" class="form-control" placeholder="例：2180005" required >
                    </div>

                    <div class="form-group">
                        <label for="fullname">名前</label>
                        <input type="text" name="fullname" id="fullname" class="form-control" required >
                    </div>
  
                    <div class="form-group">
                        <label for="birthday">生年月日</label>
                        <input type="date" name="birthday" id="birthday" class="form-control" required >
                    </div>

                    <div class="form-group">
                        <label for="dender">性別</label>
                        <div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="gender" id="male"
                                value="male" class="form-check-input" checked>
                                <label for="male"
                                class="form-check-label">男</label>
                            </div>

                            <div class="form-check form-check-inline">
                                <input type="radio" name="gender" id="female" 
                                value="female" class="from-check-input">
                                <label for="female"
                                class="form-check-label">女</label>
                            </div>

                            <div class="form-check form-check-inline">
                                <input type="radio" name="gender" id="other"
                                value="other" class="form-check-input" >
                                <label for="other"
                                class="form-check-label">他</label>
                            </div>

                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email">メールアドレス</label>
                        <input type="email" name="email" id="email" class="form-control">
                    </div>
                    <div class="form-group form-inline">
                        <label for="phone_number">携帯電話</label>
                        <input type="number" name="phone_number" id="phone_number" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="address">場所</label>
                        <input type="text" name="address" id="address" class="form-control">
                    </div>

                    <input type="submit" name ='btn-submit' value="登録" class="btn-primary btn btn-block my-3">
                </form>
            </div>
        </div>
       

    </div>
    
</body>
</html>