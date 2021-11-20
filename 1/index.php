<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<style>
* {
  margin: 0;
}

*,
*::before,
*::after {
  box-sizing: border-box;
}

.bg-img-base {
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

.page-wrapper {
  background: linear-gradient(120deg, #d83c3c, #d6d64c, #105810);
  padding-top: 100px;
  min-height: 100vh;
}

.card-center {
  position: relative;
  min-height: 500px;
}

.card-packaging {
  width: 30%;
  display: block;
  margin: 0 auto;
  position: relative;
  min-height: 500px;
  box-shadow: 0 0 6px 2px #926c6c;
}

.card .open {
  display: inline-block;
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  right: -7px;
  transition: .3s;
  border-bottom: 1px solid white;
  border-top: 1px solid white;
}

.card .open:hover {
  right: -10px;
  transition: .3s;
}

.card .open-tail {
  position: relative;
  height: 36px;
  width: 30px;
  float: left;
}

.card .open-tail:before {
  content: '';
  display: block;
  border-top: 18px solid #d24242;
  border-left: 30px solid transparent;
  position: absolute;
  left: 0;
  top: 0;
}

.card .open-tail:after {
  content: '';
  display: block;
  position: absolute;
  top: 18px;
  left: 0;
  border-top: 18px solid transparent;
  border-right: 30px solid #d24242;
}

.card .open-main {
  display: inline-block;
  line-height: 36px;
  background: #d24242;
  padding: 0 3px 0 0;
}

.card .open-title {
  display: inline-block;
  line-height: 30px;
  border-top: 1px dashed white;
  border-bottom: 1px dashed white;
  padding: 0 15px;
  color: white;
  text-transform: uppercase;
  font-weight: 700;
}

.card--first,
.card--third {
  position: absolute;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  transform-origin: left;
  transition: all .9s;
  transform-style: preserve-3d;
  z-index: 2;
  box-shadow: 2px 0 6px 2px #926c6c;
}

.card--first {
  transition-delay: .4s;
}

.card--third {
  z-index: 1;
  transform-origin: right;
  transition: all .9s;
  box-shadow: -2px 0 6px 2px #926c6c;
}

.card-packaging.is-open .card--first {
  transform: rotateY(180deg);
  transition: all .9s;
}

.card-packaging.is-open .card--third {
  transform: rotateY(180deg);
  transition: all .9s;
  transition-delay: .4s;
}

.card-wrapper {
  width: 100%;
  height: 100%;
  position: absolute;
  top: 0;
  left: 0;
  -webkit-backface-visibility: hidden;
          backface-visibility: hidden;
  padding: 15px 25px;
}

.card-wrapper.back {
  transform: rotateY(180deg);
}

.close {
  width: 30px;
  height: 30px;
  display: inline-block;
  position: absolute;
  top: 10px;
  right: 10px;
}
.text{
    color: red;
    font-size: 18px;
    padding: 87px;
    padding-top: 162px;
}
.text p{
    text-align: end;
}
</style>
</head>
<body>
<div class="page-wrapper">
      <div class="card">
        <div class="card-packaging bg-img-base" style="background-image: url(https://inthanhtien.com/wp-content/uploads/2020/12/background-20-10-17.jpg)">
           
          <div class="card-center">
            <div class='text'>Nhân ngày 20/11,em xin chúc cô lời chúc tốt đẹp nhất. Chúc các cô ngày cảng mạnh khỏe để hoàn thành nhiệm vụ cao cả của mình trong sự nghiệp trăm năm trồng người, trong công cuộc đổi mới của đất nước. Em chân thành cám ơn cô.
                <br><br><p for="">Đỗ Mạnh Quang</p>
            </div>
            
            <a class="close bg-img-base" href="#" style="background-image: url(https://cdn3.iconfinder.com/data/icons/pyconic-icons-1-2/512/close-circle-512.png)"></a>
          </div>
          <div class="card--first">
            <div class="card-wrapper bg-img-base front" style="background-image: url(/Thiep-20-11/Thiep-20-11-kinh.jpg)">
              <a class="open" href="#">
                <div class="open-tail"></div>
                <div class="open-main"><span class="open-title">Nhấn vào</span></div>
              </a>
           
            </div>
            <div class="card-wrapper bg-img-base back" style="background-image: url(https://inthanhtien.com/wp-content/uploads/2020/12/background-20-10-19.jpg)">
            </div>
          </div>
          <div class="card--third">
            <div class="card-wrapper bg-img-base front" style="background: linear-gradient(120deg, #d83c3c, #d6d64c, #105810)"></div>
            <div class="card-wrapper bg-img-base back" style="background-image: url(https://inthanhtien.com/wp-content/uploads/2020/12/background-20-10-12.jpg)"></div>
          </div>
        </div>
      </div>
    </div>
    <script>
document.addEventListener('DOMContentLoaded', function() {
  document.getElementsByClassName('open')[0].addEventListener('click', function () {
    document.getElementsByClassName('card-packaging')[0].classList.add('is-open')
  })

  document.getElementsByClassName('close')[0].addEventListener('click', function () {
    document.getElementsByClassName('card-packaging')[0].classList.remove('is-open')
  })
});
</script>
</body>
</html>