<form class="form" method="POST" action="{{ route('user.add') }}">
    @csrf
    <label for="name">Имя:</label>
    <input name="name" id="name" type="text"
           @isset($user)
               value="{{ $user['name'] }}" disabled
           @endisset
    >
    <label for="lastname">Фамилия:</label>
    <input name="lastname" id="lastname" type="text"
           @isset($user)
               value="{{ $user['lastname'] }}" disabled
           @endisset
    >

    <label for="lastname">Email:</label>
    <input name="email" id="email" type="email"
           @isset($user)
               value="{{ $user['email'] }}" disabled
           @endisset
    >

    <input type="submit" value="Отправить"
           @isset($user)
               disabled
           @endisset
    >
</form>
