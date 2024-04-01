
<template>
    <!-- modal step01 Start : 경매신청 완료 팝업
     <section class="modal modal-section type-confirm alert-modal" style="display: block;">
        <div class="modal-dialog">
            <div class="modal-content shadow">
        <div class="modal-body">
          <div class="content">
            <div class="enroll_box" style="position: relative;">
              <img src="../../img/Objects.png" alt="자동차 이미지" width="160" height="160">
              <p class="overlay_text">경매 신청이 완료 되었습니다</p>
            </div>
            <p class="menu_msg mb-4">진단평가 완료까지 조금만 기다려주세요!</p> 
            <div class="btn-group">
              <button class="btn btn-danger btn-lg shadow btn_ok">확인</button>
            </div>
          </div>
        </div>
            </div>
        </div>
    </section>
     modal step01 END -->
    <!-- modal step02 Start : 경매 취소 팝업 -->
     <section class="modal modal-section type-confirm alert-modal" style="display: block;">
        <div class="modal-dialog">
            <div class="modal-content shadow">
        <div class="modal-body">
          <div class="content">
            <div class="enroll_box" style="position: relative;">
              <img src="../../img/drift.png" alt="자동차 이미지" width="160" height="160">
              <p class="overlay_text_cancle">경매가 취소되었습니다.</p>
            </div>
            <p class="menu_msg mb-4">재경매를 진행할까요?</p> 
            <div class="btn-group">
              <button class="btn btn-outline-secondary modal_close shadow">닫기</button>
              <button class="btn btn_ok btn-dark shadow">재경매</button>
            </div>
          </div>
        </div>
            </div>
        </div>
    </section>
    <!-- modal step02 END -->
    </template>
    
    <script>
    export default {
      name: 'DealerMain',
      data() {
        return {
          isMenuOpen: false,
        };
      },
      methods: {
        toggleMenu() {
          this.isMenuOpen = !this.isMenuOpen;
        },
        someAction() {
        },
      },
    };
    </script>
    
    
    <style scoped>
    /* 임시 모달 스타일 */
    button.btn {
      border-radius: 5px !important;
    }
    
    .btn-group {
        display: flex;
        font-size: 0;
        gap: 10px;
    
    }
    .enroll_box {
      position: relative;
      text-align: center; 
    }
    .overlay_text_cancle{
        white-space: nowrap;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        color: #172644;
        z-index: 2;
        text-align: center;
        font-size: 20px;
        font-weight: 600;
    }
    
    .overlay_text {
        white-space: nowrap;
        position: absolute;
        top: 62%;
        left: 50%;
        transform: translate(-50%, -50%);
        color: #172644;
        z-index: 2;
        text-align: center;
        font-size: 20px;
        font-weight: 600;
    }
    
    .modal-dialog{
      max-width: 540px;
      height: calc(100% - 3.5rem); 
      margin: 11.75rem auto;
      padding: 0 20px;
    }
    
    .modal-lg{
      max-width: 840px;
    }
    .modal-style{
      height: 100% !important;
      max-height: 1000px !important;
      min-height: auto !important;
    }
    
    .modal-style02{
      height: 100% !important;
      max-height: 1200px !important;
      min-height: auto !important;
    }
    
    .modal{
      overflow-y:hidden;
    }
    .modal .modal-footer .btn{
      width: 100%;
    }
    
    .modal-title{
      font-size: 18px;
      font-weight: 700;
    }
    
    .modal-title .step{
      margin-left: 8px;
      font-weight: normal;
      font-size: 14px;
      color: #979797;
    }
    
    .modal-content{
       border-radius: 5px;
       max-height: 100%;
       min-height: 100%;
    }
    
    .modal-header{
      height: 60px;
      padding: 0 40px;
    }
    
    .modal-body{
      overflow-y: auto;
      padding: 40px;
    }
    
    .modal-body h5.title{
      margin-bottom: 30px;
      font-size: 20px;
    }
    
    .modal-body .con-area{
      padding: 40px;
      margin: 0 -40px;
      background: #fff;
      border-bottom: 10px solid #f9f9f9;
    }
    
    .modal-body .con-area:first-child{
      padding-top: 0;
    }
    
    .modal-body .con-area:last-child{
      padding-bottom: 0;
      border-bottom: 0;
    }
    
    .modal-body .basic-form dl + dl{
      margin-top: 0;
    }
    
    .modal-body dl + dl{
      margin-top: 20px;
    }
    
    .modal-body dl p{
      margin: 0;
    }
    
    .modal-body dl ol li + li{
      margin-top: 15px;
    }
    
    .modal-body dl ol li ol li + li{
      margin-top: 10px;
    }
    
    .modal-body dl dt{
      /* font-size: 18px; */
      font-weight: 600;
    }
    
    .modal-body > dl > dd > .txt{
      margin-bottom: 20px;
    }
    
    .modal-body .desc-con{
      display: flex; 
      margin: 0 -30px; 
      padding: 0 80px;
    }
    
    .modal-body .desc-con .desc-item{
      width: 50%; 
      padding: 0 30px; 
      text-align: center;
    }
    
    .modal-body .desc-con .desc-item strong{
      display: block; 
      margin-bottom: 10px; 
      font-size: 20px;
    }
    
    .modal-body .desc-con .desc-item p{
      font-weight: 400;
    }
    
    .modal-body.type-01{
      padding: 0;
    }
    
    .modal-body.type-01 .modal-body-top{
      display: flex;
      align-items: center;
      height: 60px;
      padding: 0 40px;
      border-bottom: 1px solid #dee2e6;
    }
    
    .modal-body.type-01 .modal-body-cont{
      padding: 40px;
    }
    
    .modal-footer{
      justify-content: center;
      padding: 40px;
      border: 0;
      margin-top: -30px;
    }
    
    .modal-footer > *{
      margin: 0;
    }
    
    .modal-footer .btn-group,
    .modal-footer .step-foot{
      width: 100%;
    }
    .modal.alert-modal{
      background: rgba(0,0,0,0.5);
    }
    
    .modal.alert-modal .modal-dialog{
      max-width: 360px;
      /* width: 360px; */
      height: 100%;
      margin: 0 auto;
    }
    
    .modal.alert-modal .modal-content{
      position: absolute;
      top: 43%;
      left: 50%;
      min-height: auto;
      padding: 0;
      text-align: center;
      background: #fff;
      -webkit-transform: translate(-50%, -50%);
              transform: translate(-50%, -50%);
      overflow: unset;
    }
    
    
    .dialog-style{
      margin: 7.75rem auto;
    }
    .dialog-type02{
      margin: 11.75rem auto;
    }
    
    
    .modal.alert-modal .modal-body{
      padding: 20px 20px 20px;
      border-radius: 40px;
      text-align: center;
    }
    
    .modal.alert-modal .modal-body .content{
        min-height: 70px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        font-weight: 300;
    }
    
    .modal.alert-modal .modal-body .content .txt{
      font-size: 16px;
      font-weight: 600;
    }
    
    .modal.alert-modal .modal-body .content .btn-group{
      width: 100%;
    }
    
    p .menu_msg{
      margin-bottom:20px;
    }
    
    @media screen and (max-width:1024px) {
      .modal-body .desc-con{
        margin: 0 -10px; 
        padding: 0 20px;
      }
      .modal-body .desc-con .desc-item{
        padding: 0 10px; 
      }
    }
    
    @media screen and (max-width:767px) {
      .modal-dialog{
        padding: 0 10px;
      }
      .modal-header{
        padding: 0 20px;
      }
      .modal-title{
        font-size: 16px;
      }
      .modal-body{
        padding: 30px 20px;
        overflow-x: hidden;
      }
      .modal-body h5.title{
        margin-bottom: 20px; 
        font-size: 16px;
      }
      .modal-body .con-area{
        padding: 20px;
        margin: 0 -20px;
      }
      .modal-body .desc-con{
        margin: 0 -5px; 
        padding: 0;
      }
      .modal-body .desc-con .desc-item{
        padding: 0 5px; 
      }
      .modal-body .desc-con .desc-item strong{
        font-size: 16px;
      }
      .modal-body.type-01 .modal-body-top{
        padding: 0 20px;
      }
      .modal-body.type-01 .modal-body-cont{
        padding: 30px 20px;
      }
      .modal-footer{
        padding: 30px 20px;
      }
      .modal-dialog{
        margin: 1.75rem auto;
      }
    }
    
    @media screen and (max-height:1200px) {
      .modal-dialog{
        margin: 2.75rem auto;
       
      }
    }
    @media screen and (max-height:1400px) {
      .dialog-style{
        margin: 1.75rem auto;
    }
      .dialog-type02{
        margin: 1.75rem auto;
      }
    }
    
    </style>