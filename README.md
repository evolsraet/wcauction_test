## 위카옥션 SET

### 개요

-   2024-3-11
    현재 테스트 모델로, 대략 어떤 방식인지 공유 하기위해 베타 상태를 우선 공유함.
    추후 변경해 다시 전달 예정

### 준비

git, docker(윈도우 WSL2), 옵션 (php8~, composer)

### 설치

#### GIT 다운로드

```bash
git clone https://github.com/evolsraet/wcauction_test.git
```

### .env.example -> .env 로 복사

#### php 의존성 업데이트

##### 1. php 8 로 바로설치 (php8.x, composer 필요)

```bash
composer install
```

##### 2. 필요파일 위치 후 설치 (php, compose 불필요) - 에러가능성 (24.8.18)
https://drive.google.com/file/d/1JMak5vJLC6F3kHxrnGV-AmQYBoHUWnRw/view?usp=drive_link
- 폴더/vendoer/laravel 안에서 압축풀기
- docker-composer up -d
- 도커내부에서 [laravel.test] composer install

#### 도커 서버 실행

./vendor/bin/sail 을 Alias 하여 sail 명령으로 진행 추천
(linux, mac 예: [alias sail='sh $([ -f sail ] && echo sail || echo vendor/bin/sail)'])

```bash
./vendor/bin/sail up -d ## 서버 실행 (localhost)
./vendor/bin/sail artisan migrate ## 디비 설치 (처음 1회)
./vendor/bin/sail artisan db:seed ## 임시 데이터 삽입
```

```bash
./vendor/bin/sail stop ## 정지
```

#### npm 서버 실행 (별도 터미널 추천)

```bash
./vendor/bin/sail npm install ## 의존성 설치 (처름 1회)
./vendor/bin/sail npm run dev ## 실행
```

### 설명

-   vue 진입 포인트 : /resources/views/main-view.blade.php
-   vue 단일 js : /resources/sass/app.scss
-   sass 단일 scss : /resources/sass/app.scss
-   vue 관련 모든 소소 : /resources/j

작업환경 vscode 추천
