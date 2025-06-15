@extends('front.layouts.master')
@section('content')
<main>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-lg-8 col-xl-6 mx-auto">
                    <div class="bg-primary bg-opacity-10 rounded p-4 p-sm-5">
                        <h2>ثبت نام در سایت </h2>
                        <!-- Form START -->
                        <form class="mt-4">
                            <!-- Name -->
                            <div class="mb-3">
                                <label class="form-label" for="exampleInputName">پست الکترونیکی</label>
                                <input type="email" class="form-control" id="exampleInputName" aria-describedby="emailHelp" placeholder="نام و نام خانوادگی">
                            </div>
                            <!-- Email -->
                            <div class="mb-3">
                                <label class="form-label" for="exampleInputEmail1">پست الکترونیکی</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="ایمیل">
                                <small id="emailHelp" class="form-text">ما هرگز ایمیل شما را با دیگران به اشتراک نمی گذاریم.</small>
                            </div>
                            <!-- Password -->
                            <div class="mb-3">
                                <label class="form-label" for="exampleInputPassword1">رمز عبور</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="*********">
                            </div>
                            <!-- Password -->
                            <div class="mb-3">
                                <label class="form-label" for="exampleInputPassword2">تایید رمز عبور</label>
                                <input type="password" class="form-control" id="exampleInputPassword2" placeholder="*********">
                            </div>
                            <!-- Checkbox -->
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">من می خواهم برای عضویت در خبرنامه نیز ثبت نام کنم</label>
                            </div>
                            <!-- Button -->
                            <div class="row align-items-center">
                                <div class="col-sm-4">
                                    <button type="submit" class="btn btn-success">ثبت نام</button>
                                </div>
                                <div class="col-sm-8 text-sm-end">
                                    <span>آیا قبلا ثبت نام کرده اید؟ <a href="signin.html"><u>ورود</u></a></span>
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
