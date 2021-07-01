
<style>
    /* .body {
  background: #020631;
  font: 14px 'Nunito', sans-serif;
} */
.today{
  font-size: 22px;
}

  .animated.bounceIn, .animated.bounceOut, .animated.flipOutX, .animated.flipOutY {
    font-size: 13px;
  }

.container {
  padding-top: 75px;
}
.todo-list {
  margin: 20px 0;
}
.todo-list li {
  background: #fff;
  border-radius: 5px;
  margin-bottom: 7px;
  position: relative;
  word-break: break-word;
}
.todo-list li.danger {
  background: rgb(85, 41, 220);
}
.todo-list li.danger label {
  text-decoration: line-through;
  color: #fff;
}
.todo-list li.danger label .checkbox-mask {
  border-color: transparent;
}
.todo-list li.danger label .checkbox-mask:after {
  content: '\f00c';
  font-family: 'FontAwesome';
  display: block;
  position: absolute;
  top: -3px;
  left: 0;
}
.todo-list li .checkbox {
  margin: 0;
  padding: 10px 15px;
  border-radius: 5px;
}
.todo-list li label {
  display: block;
  padding-right: 10px;
}
.todo-list li label input[type="checkbox"] {
  visibility: hidden;
}
.todo-list li label .checkbox-mask {
  display: block;
  border: 2px solid #666;
  width: 12px;
  height: 12px;
  border-radius: 2.5px;
  position: absolute;
  margin-left: -20px;
  margin-top: 4px;
}
.todo-list li .close {
  display: none;
  position: absolute;
  width: 12px;
  height: 16px;
  top: 50%;
  margin-top: -8px;
  right: 10px;
  font-size: 16px;
}
.todo-list li .close .fa {
  line-height: 16px;
}
.todo-list li:hover .close {
  display: block;
}
.has-feedback .fa {
  line-height: 35px;
  cursor: pointer;
  pointer-events: auto;
  z-index: 10;
  display: block;
  color: #666;
  -webkit-transition: color 0.15s linear;
  transition: color 0.15s linear;
}
.has-feedback .fa:hover {
  color: #999;
}
.add-control {
  margin-top: 20px;
  position: relative;
}
.add-control .form-control {
  padding-right: 25px;
}
.add-control .refresh {
  position: absolute;
  top: 8px;
  right: 0;
  font-size: 14px;
  -webkit-transform: translateX(100%);
          transform: translateX(100%);
  margin-right: -10px;
  cursor: pointer;
  color: #9da1af;
  -webkit-transition: color 0.15s linear;
  transition: color 0.15s linear;
}
.add-control .refresh:hover {
  color: #666;
}
.form-control,
.form-control:focus,
.form-control:active,
.form-control:active:focus {
  border: none;
  padding: 10px 15px;
  outline: none;
}
.form-control {
  -webkit-box-shadow: none;
          box-shadow: none;
  -webkit-transition: all 0.2s linear;
  transition: all 0.2s linear;
}
.form-control:focus {
  -webkit-box-shadow: 0 0 15px rgba(0,0,0,0.2);
          box-shadow: 0 0 15px rgba(0,0,0,0.2);
}
.separator {
  margin: 15px auto;
  width: 50%;
  height: 1px;

}
.animated {
  -webkit-animation-duration: 0.45s;
          animation-duration: 0.45s;
  -webkit-animation-fill-mode: both;
          animation-fill-mode: both;
}
.animated.fast {
  -webkit-animation-duration: 0.25s;
          animation-duration: 0.25s;
}

.today{
  text-align: center;
      color: #fff;
}


.zero{

    top: 8px;
    right: 0;
    font-size: 14px;
    -webkit-transform: translateX(100%);
    transform: translateX(100%);
    margin-right: -10px;
    cursor: pointer;
    color: #9da1af;
    -webkit-transition: color 0.15s linear;
    transition: color 0.15s linear;
}


$c-gray: #8d959b;
$c-light: #f9f9f9;
$c-dark: #404060;
$c-red: #e96575;
$c-blue: #4b96f0;
// Base Classes
.group:after {
  content: "";
  display: table;
  clear: both;
}
.btn_wrapper {
  @extend .group;
  max-width: 250px;
  margin: 0 auto;
}


button {

      font-size: 16px;
      color: #ffffff;
      background: #fff0;
      padding: 10px 20px;
      transition: all 0.3s;
      outline: none;
      border-color: #FFF;
      border-radius: 35px;
      margin-left: 5px;
    margin-right: 5px;
  }
}
button[disabled] {
  color: $c-gray !important;
  background: #fff !important;
}
.output {
  padding-bottom: 10px;

  button {
    color: $c-blue;
    &:hover,
    &:focus {
      transform: scale(1.5);
      background: transparent;
    }
  }
}


#start {
    background: #6200ff;
    border: none;
    border-radius: 20px;
    padding-left: 35px;
    padding-right: 35px;
}

#start:hover {


box-shadow: 0 0 25px 0 #452579;
    color: white;
}

#inc{
  border: none;
    font-size: 40px;
    border-radius: 20px;
    padding-left: 35px;
    padding-right: 35px;
}
#dec{

    border: none;
    font-size: 40px;
    border-radius: 20px;
    padding-left: 35px;
    padding-right: 35px;
}

#reset {

  color: $c-red;
  &:hover,
  &:focus {
    background-color: $c-red;
    color: #fff;
    border-radius: 20px;
    padding-left: 35px;
    padding-right: 35px;
  }
}

.pomodoro {
    text-align: center;
}

p {
    margin: 15px 0 10px;
    font-size: 46px;
    font-weight: 700;
    color: #FFF;
   
}


.fa-ban:before {
    content: "\f05e";
    color: #8c8c8c;
    font-size: 29px;
}


.logo {
    text-align: center;
    margin-top: 30px;
    margin-bottom: -50px;
}


.h4, h4 {
    font-size: 16px;
    color: #fff;
    text-align: center;
    margin-top: 40px;
}

a:focus, a:hover {
    color: #fbfbfb;
  text-decoration: none;
}

.fa-remove:before, .fa-close:before, .fa-times:before {
    content: "\f00d";
    color: #000;
}



@media (max-width: 768px){
.col-xs-offset-3 {
    margin-left: 10%;
}
}

@media (max-width: 768px){
.col-xs-6 {
  width: 80%;
}
}
@viewport {
   width: device-width; 
   zoom: 1; 
}

@media (min-width: 992px){
.container {
    width: 100%;
    max-width: 1150PX;
}
}

@media (max-width: 680px){
svg {
    width: 70px;
    height: 70px;

}
}

.todo-list input[type="checkbox"] {
    opacity: 0;
}


</style>
<div class="container">
            <div class="today"></div>
            <div class="row">
               <div class="col-md-4 col-md-offset-4 col-xs-6 col-xs-offset-3">
                  <div class="add-control">
                     <div class="form-group has-feedback">
                        <input type="text" class="form-control" placeholder="✍️ Add item..."/>
                        <i class="fa fa-plus form-control-feedback add-btn" title="Add item"></i>
                     </div>
                  </div>
                  <p class="err text-danger text-center hidden"><i class="fa fa-warning"></i> Oops! Please, enter name item</p>
                  <p class="no-items text-muted text-center hidden"><i class="fa fa-ban"></i></p>
                  <ul class="todo-list">
                  </ul>
               </div>
            </div>
         </div>