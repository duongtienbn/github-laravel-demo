<form method="POST" action="/tien12">
    <div>
        <input type="text" name="username" placeholder="nhap name...">
        <input type="hidden" name="_method" value="post">
        <input type="hidden" name="_token" value="<?php echo csrf_token();?>">
    </div>
    <button type="submit" value = "tien">submit</button>
</form>