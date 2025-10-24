@extends('main')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card mt-5">
                <div class="card-header">
                    <h4 class="card-title text-center mb-0">Регистрация</h4>
                </div>
                <div class="card-body">
                    <form>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="firstName" class="form-label">Имя</label>
                                <input type="text" class="form-control" id="firstName" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="lastName" class="form-label">Фамилия</label>
                                <input type="text" class="form-control" id="lastName">
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" required>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="password" class="form-label">Пароль</label>
                                <input type="password" class="form-control" id="password" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="confirmPassword" class="form-label">Подтвердите пароль</label>
                                <input type="password" class="form-control" id="confirmPassword" required>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="phone" class="form-label">Телефон</label>
                            <input type="tel" class="form-control" id="phone">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Пол</label>
                            <div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" id="male" value="male">
                                    <label class="form-check-label" for="male">Мужской</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" id="female" value="female">
                                    <label class="form-check-label" for="female">Женский</label>
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="agreeTerms" required>
                                <label class="form-check-label" for="agreeTerms">
                                    Я соглашаюсь с условиями использования
                                </label>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary w-100">Зарегистрироваться</button>

                        <div class="text-center mt-3">
                            <p class="mb-0">Уже есть аккаунт? <a href="#" class="text-decoration-none">Войти</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection