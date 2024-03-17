<form method="post" action="">
    @csrf <!-- CSRF-токен для защиты от фальшифых запросов (БЕЗ ЭТОГО НЕ РАБОТАЕТ)-->
    <input type="text" name="title" value="{{ $post->title }}"><br>
    <input type="text" name="desc" value="{{ $post->desc }}"><br>
    <textarea name="text" {{ $post->text }}></textarea> <br>
    <br>
    <input type="submit" value="Сохранить">
</form>
