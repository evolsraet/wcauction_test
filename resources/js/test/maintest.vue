<template>
    <div class="container">
        <!-- 회원가입 권장 섹션 -->
        <div class="main-contenter">
        <div class="my-5 app-specific-size">
            <div class="text-left">
                <h2 class="mb-4 fw-bold ml-3">빠르고 간편한</h2>
                <img src="../../img/logo.png" class="logo mb-3 mr-2">
                <p class="bold-link ml-3">내 차 판매, <mark class="custom-highlight">위카</mark>에서 도와드릴게요!</p>
            </div>
        </div>
        <div class="layout-container">
            <div class="banner"><div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
            </div>
            </div>
            </div>
            <div class="review-content">
                <div class="apply-top text-start">
                    <h3 class="review-title">다른 사람들의 이용후기에요</h3>
                    <a href="" class="btn-apply">전체보기<i class="ri-arrow-right-s-line"></i></a>
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
            <div class="card login-card border-0" :class="{ 'expanded': expanded }" @click="expandCard">
                <div class="card-body">
                    <!-- 로그인 폼 -->
                    <form @submit.prevent="submitLogin">
                            <div>
                                <input type="text" class="form-control border-0 border-bottom my-4" placeholder="소유자가 누구인가요?" v-model="username">
                            </div>
                            <div>
                                <input type="text" class="form-control border-0 border-bottom mb-5" placeholder="차량 번호를 입력해주세요." v-model="carNumber">
                            </div>
                            <!--영상-->

                            <div class="video-container my-4" style="background-color: #ccc;">
                                <video width="100%" autoplay loop muted>
                                    <source :src="videoSource" type="video/mp4">
                                </video>
                            </div>
                             <!-- 로그인 버튼 -->
                             <div class="flex items-center justify-end my-2">
                                <button class="btn btn-primary" :class="{ 'opacity-25': processing }" :disabled="processing">
                                    {{ $t('내 차 조회') }}
                                </button>
                            </div>
                            <div class="flex items-center justify-end my-2">
                                <router-link :to="{ path: '/maintest' }" class="btn btn-outline-primary text-danger">{{ $t('로그인') }}</router-link>
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
<script>
export default {
    data() {
        return {
            videoSource: '/img/video/mainvideo.mp4'
        }
    }
}
</script>
<script setup>
    import {useReview} from '@/composables/review';
    import useAuth from '@/composables/auth' 



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
/* 임의로 스타일 넣음 추후 sass에 추가 */
.login-card {
  transition: all 0.3s ease-in-out;
}
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

    .ri-arrow-right-s-line:before {
        content: "\ea6e";
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
        .review-content {
        overflow-x: hidden;
    }
    .review-content > .row {
        display: flex;
        flex-wrap: nowrap; 
    }
    .review-content > .row > .col {
        flex: 0 0 auto; 
        width: 90%; 
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