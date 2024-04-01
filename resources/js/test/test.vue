<template>
    <div class="container pt-5">
        <!-- 회원가입 권장 섹션 -->
        <div class="regiest-content">
        <div class="my-5 app-specific-size">
            <div class="text-center">
                <h2 class="my-4 fw-bold">회원가입시 판매가 빨라져요</h2>
                <p class="bold-link text-muted">소셜 로그인 및 이메일로 가입 할 수 있어요.</p>
            </div>
        </div>
        <div class="layout-container">
            <div class="banner">Banner Content</div>
            <div class="review-content">
                <div class="apply-top text-start">
                    <h3 class="review-title">다른 사람들의 이용후기에요</h3>
                    <a href="" class="btn-apply">전체보기 <img src="../../img/Icon-right.png" class="ms-2" alt="설명"></a>
                </div>
                <div class="row row-cols-1 row-cols-md-2 g-4">
                    <div class="col">
                        <div class="card">
                            <div class="car-imges"></div>
                            <div class="card-body">
                                <h5 class="card-title">현대 소나타 (DN8)</h5>
                                <div class="rating">
                                    <div v-for="index in rating" :key="'filled-' + index" class="star filled-star"></div>
                                    <div v-for="index in 5 - rating" :key="'empty-' + index" class="star empty-star"></div>
                                </div>
                                <div class="d-sm-flex justify-content-between text-muted">
                                    <span class="deilname">담당 딜러 홍길동님</span>
                                    <span class="date">2024-03-18</span>
                                </div>
                                <p class="card-text">차갑아서 보다 안 아닐 그럽시다 다급하다 떨어지어무슨 절망 아닌 자기에 달려가아 누구에 고스톱은 발생한가.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="car-imges"></div>
                            <div class="card-body">
                                <h5 class="card-title">현대 소나타 (DN8)</h5>
                                <div class="rating">
                                    <div v-for="index in rating" :key="'filled-' + index" class="star filled-star"></div>
                                    <div v-for="index in 5 - rating" :key="'empty-' + index" class="star empty-star"></div>
                                </div>
                                <div class="d-sm-flex justify-content-between text-muted">
                                    <span class="deilname">담당 딜러 홍길동님</span>
                                    <span class="date">2024-03-18</span>
                                </div>
                                <p class="card-text">차갑아서 보다 안 아닐 그럽시다 다급하다 떨어지어무슨 절망 아닌 자기에 달려가아 누구에 고스톱은 발생한가.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="car-imges"></div>
                            <div class="card-body">
                                <h5 class="card-title">현대 소나타 (DN8)</h5>
                                <div class="rating">
                                    <div v-for="index in rating" :key="'filled-' + index" class="star filled-star"></div>
                                    <div v-for="index in 5 - rating" :key="'empty-' + index" class="star empty-star"></div>
                                </div>
                                <div class="d-sm-flex justify-content-between text-muted">
                                    <span class="deilname">담당 딜러 홍길동님</span>
                                    <span class="date">2024-03-18</span>
                                </div>
                                <p class="card-text">차갑아서 보다 안 아닐 그럽시다 다급하다 떨어지어무슨 절망 아닌 자기에 달려가아 누구에 고스톱은 발생한가.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="car-imges"></div>
                            <div class="card-body">
                                <h5 class="card-title">현대 소나타 (DN8)</h5>
                                <div class="rating">
                                    <div v-for="index in rating" :key="'filled-' + index" class="star filled-star"></div>
                                    <div v-for="index in 5 - rating" :key="'empty-' + index" class="star empty-star"></div>
                                </div>
                                <div class="d-sm-flex justify-content-between text-muted">
                                    <span class="deilname">담당 딜러 홍길동님</span>
                                    <span class="date">2024-03-18</span>
                                </div>
                                <p class="card-text">차갑아서 보다 안 아닐 그럽시다 다급하다 떨어지어무슨 절망 아닌 자기에 달려가아 누구에 고스톱은 발생한가.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card login-card border-0">
                <div class="card-body">
                    <!-- 로그인 폼 -->
                    <form @submit.prevent="submitLogin">
                        <div class="">
                            <div class="my-3 text-left">
                                <router-link :to="{ path: '/maintest' }" class="register-link text-muted ms-2">{{ $t('이미 위카 회원이신가요?') }}</router-link>
                            </div>
                            <!-- 이메일 입력 -->
                            <div class="mb-3">
                                <label for="email" class="form-label"></label>
                                <input v-model="loginForm.email" id="email" type="email" class="form-control border-0 border-bottom" required autofocus autocomplete="username" placeholder="이메일을 입력해주세요.">
                                <!-- 유효성 검사 오류 메시지 -->
                                <div class="text-danger mt-1">
                                    <div v-for="message in validationErrors?.email">
                                        {{ message }}
                                    </div>
                                </div>
                            </div>
                            <!-- 비밀번호 입력 -->
                            <div class="mb-4">
                                <label for="password" class="form-label">
                                </label>
                                <input v-model="loginForm.password" id="password" type="password" class="form-control border-0 border-bottom" required autocomplete="current-password" placeholder="비밀번호를 입력해주세요.">
                                <!-- 유효성 검사 오류 메시지 -->
                                <div class="text-danger-600 mt-1">
                                    <div v-for="message in validationErrors?.password">
                                        {{ message }}
                                    </div>
                                </div>
                            </div>
                            <!-- 소셜 로그인 섹션 -->
                            <div class="login-v2 my-5">
                                <h3 class="mb-4 text-muted"><span>또는 소셜 로그인</span></h3>
                                <ul class="login-v2-area">
                                    <li><a href="#" class="google" title="google">Google</a></li>
                                    <li><a href="#" class="naver" title="naver">Naver</a></li>
                                    <li><a href="#" class="kakao" title="kakao">Kakao</a></li>
                                </ul>
                            </div>
                             <!-- 로그인 버튼 -->
                            <div class="flex items-center justify-end my-4">
                                <button class="btn btn-primary" :class="{ 'opacity-25': processing }" :disabled="processing">
                                    {{ $t('로그인') }}
                                </button>
                            </div>
                        </div>
                        <div class="register-link mt-5 text-center">
                            <router-link :to="{ path: '/registertest' }" class="register-link">{{ $t('회원가입하기') }}</router-link>
                        </div>
                        <div class="text-muted mt-4 text-center">
                            <p class="fs-6">
                                <a href="/copywrite" class="text-muted spacing">카피라이트</a> |
                                <a href="/privacy-policy" class="text-muted spacing">개인정보 처리방침</a> |
                                <a href="/terms" class="text-muted spacing">이용약관</a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</template>
<script setup>
    import {useReview} from '@/composables/review';
    import useAuth from '@/composables/auth' //인증관련 컴포저블

    const {
        loginForm,
        validationErrors,
        processing,
        submitLogin
    } = useAuth(); //로그인양식데이터, 유효성 검사오류,로그인상태처리, 로구인 함수 할당
    
    const {
        rating,
        setRating
    } = useReview();

</script>
<style>
    .app-specific-size {
        display: none;
    }


    @media (max-width: 340px) {
        .app-specific-size {
            display: block;
        }
    }


    @media (min-width: 341px) and (max-width: 640px) {
        .app-specific-size {
            display: block;
        }
    }

    .all-view::after{
        background-image: url('/resources/img/Icon-right.png');
        width: 13px;
        height: 13px;
    }
    .layout-container {
        display: grid;
        grid-template-rows: auto 1fr;
        grid-template-columns: 2fr 1fr;
        gap: 40px;
    }

    .btn-apply {
        color: #aaaebe;
    }

    .btn-apply i {
        transition: all .3s;
    }

    .banner {
        grid-column: 1 / -1;
        background-color: #f5f5f6;
        padding: 20px;
        text-align: center;
        height: 370px;
        max-height: 370px;
    }


    .main-content {
        background: #f9f9f9;
        padding: 20px;
        border: 1px solid #ddd;
    }
    .btn-apply img {
    transition: transform .3s;
    }
    .btn-apply:hover img {
    transform: translateX(8px); 
    }
    .login {
        background: #f9f9f9;
        padding: 20px;
        border: 1px solid #ddd;
    }

    .car-imges {
        width: 100%;
        height: 126px;
        background-image: url('/resources/img/car.png');
        background-size: cover;
    }

    .apply-top {
        display: flex;
        margin-bottom: 30px;
        justify-content: space-between;
        align-items: center;
    }

    .apply-top .tit {
        margin-right: 10px;
        font-weight: 800;
        font-size: 18px;
    }

    .review-title {
        font-size: 20px;
        font-weight: bold;
        font-stretch: normal;
        text-align: left;
    }

    .spacing {
        margin: 10px;
    }

    @media (max-width: 768px) {
        .layout-container {
            grid-template-columns: 1fr;
        }

        .banner,
        .main-content,
        .login {
            grid-column: 1;
        }
    }

    .rating .star {
        display: inline-block;
        width: 21px;
        height: 19px;
        margin-right: 6px;
        background-size: contain;
    }

    .filled-star {
        background-image: url('/resources/img/filled_star.png');
    }

    .empty-star {
        background-image: url('/resources/img/emp_star.png');
    }


    .card-body>*:first-child {
        margin-top: 0.25rem;
    }

    .card-body>*:not(:first-child) {
        margin-top: 0.25rem;
    }

    .card-body>*:last-child {
        margin-bottom: 0.25rem;
    }
    .card-body > *:not(:first-child) {
    margin-top: 0.5rem;
    }
    .login-card{

    }
</style>