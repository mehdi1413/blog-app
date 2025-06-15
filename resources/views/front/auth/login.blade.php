@extends('front.layouts.master')
@section('content')
<main>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-lg-8 col-xl-6 mx-auto">
                    <div class="p-4 p-sm-5 bg-primary bg-opacity-10 rounded">
                        <h2>ورود به حساب کاربری</h2>
                        <!-- Form START -->
                        <form class="mt-4">
                            <!-- Email -->
                            <div class="mb-3">
                                <label class="form-label" for="exampleInputEmail1">پست الکترونیکی</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="ایمیل">
                            </div>
                            <!-- Password -->
                            <div class="mb-3">
                                <label class="form-label" for="exampleInputPassword1">رمز عبور</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="*********">
                            </div>
                            <!-- Checkbox -->
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">مرا به خاطر بسپار</label>
                            </div>
                            <!-- Button -->
                            <div class="row align-items-center">
                                <div class="col-sm-4">
                                    <button type="submit" class="btn btn-success">ورود </button>
                                </div>
                                <div class="col-sm-8 text-sm-end">
                                    <span>آیا هنوز ثبت نام نکرده اید؟ <a href="signup.html"><u>ثبت نام</u></a></span>
                                </div>
                            </div>
                        </form>
                        <!-- Form END -->
                        <hr>
                        <!-- Social-media btn -->
                        <div class="text-center">
                            <p>برای دسترسی سریع با شبکه اجتماعی خود وارد شوید</p>
                            <ul class="list-unstyled d-sm-flex mt-3 justify-content-center">
                                <li class="mx-2">
                                    <a href="#" class="btn bg-facebook d-inline-block"><i class="fab fa-facebook-f me-2"></i> ورود Facebook</a>
                                </li>
                                <li class="mx-2">
                                    <a href="#" class="btn bg-google d-inline-block"><i class="fab fa-google me-2"></i> ورود با google</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
