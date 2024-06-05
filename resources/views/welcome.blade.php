@extends('layouts.main')
@section('content')
<div class="row no-gutters">
   <div class="d-none d-lg-block col-2"></div>
   <div class="text-center col-lg-8 col-12">
      <div class="text-left mb-3">
         <div data-v-24d8a327="" class="mb-3" style="display: flex; justify-content: center; ">
            <button data-v-24d8a327="" type="button" class="btn btn-warning btn-block rounded-pill"><b data-v-24d8a327="">Сообщить об отключении</b></button> <!---->
         </div>
         <div class="mb-5"><a href="https://off.vpes.ru/map" target="_self" class="btn btn-primary btn-block rounded-pill"><b>Интерактивная карта с отключениями</b></a></div>
         <div class="text-left mb-3">
            <p>
               В данном разделе вы можете получить информацию об отключениях
               электроэнергии, горячей воды и отопления на территории эксплуатационной
               ответственности МУПВ «ВПЭС», связанных с ремонтом оборудования,
               электрических и тепловых сетей.
            </p>
            <p>
               Сообщить об отключениях электроэнергии, отопления, горячей воды можно по
               телефону горячей линии ВПЭС: 209- 9000 или в единую диспетчерскую службу
               администрации Владивостока по телефону: 222 23 33. В случае отключения или
               повреждения уличного освещения по телефону: 241-18-25.
            </p>
            <!---->
         </div>
         <div style="display: flex; justify-content: center;"><button type="button" class="btn-danger btn-block rounded-pill"><b>Обращение / Жалоба</b></button></div>
         <div data-v-59c3439b="" class="m-4" style="display: flex; justify-content: center;">
            <div data-v-59c3439b="" class="m-1 border">
               <div data-v-59c3439b="" class="container-fluid">
                  <div data-v-59c3439b="" class="row my-1">
                     <div data-v-59c3439b="" class="col">
                        <h4 data-v-59c3439b="" class="mb-3 mt-3">Поиск отключений</h4>
                     </div>
                  </div>
                  <div data-v-59c3439b="" class="row my-1">
                     <div data-v-59c3439b="" class="m-1 col-sm-4">
                        <div data-v-59c3439b="" class="ui fluid search selection dropdown">
                           <i class="dropdown icon"></i><input autocomplete="off" tabindex="0" name="" class="search">
                           <div data-vss-custom-attr="" class="text default">Укажите улицу
                           </div>
                        <!---->
                     </div>
                     <div data-v-59c3439b="" class="m-1 col-sm-3">
                        <input data-v-59c3439b="" type="text" placeholder="№ дома" class="form-control form-control-lg" id="__BVID__16"> <!---->
                     </div>
                     <div data-v-59c3439b="" class="m-1 col-sm-4"><button data-v-59c3439b="" type="button" class="btn btn-outline-primary btn-lg">Поиск</button></div>
                  </div>
                  <div data-v-59c3439b="" class="row my-1">
                     <div data-v-59c3439b="" class="m-1 col-sm-3"><br data-v-59c3439b=""></div>
                  </div>
               </div>
            </div>
            <div data-v-59c3439b="">
               <!----> <!---->
            </div>
         </div>
      </div>
   </div>
   <div class="text-right d-none d-lg-block col-2"></div>
</div>
@endsection
