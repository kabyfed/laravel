<form method="post" action="/post/new">
    @csrf <!-- CSRF-токен для защиты от фальшифых запросов (БЕЗ ЭТОГО НЕ РАБОТАЕТ)-->
    <input type="text" name="title" placeholder="Заголовок"><br>
    <input type="text" name="desc" placeholder="Описание"><br>
    <textarea name="text" placeholder="Текст"></textarea> <br>
    <br>
    <button type="submit">Создать пост</button>
</form>
