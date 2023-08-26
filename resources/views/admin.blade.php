@extends('layouts.app')


@section('content')
<section class="section main-section">
   @if(session('mesaj'))
   <div class="notification blue">
      <div class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0">
         <div>
         <span class="icon"><i class="mdi mdi-message-reply-text"></i></span>
         <b>{{session('mesaj')}}</b>
         </div>
         <button type="button" class="button small textual --jb-notification-dismiss">{{ __('messages.bagla') }}</button>
      </div>
   </div>
   @endif
   @if(session('mesaj2'))
   <div class="notification red">
      <div class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0">
         <div>
         <span class="icon"><i class="mdi mdi-message-reply-text"></i></span>
         <b>{{session('mesaj2')}}</b>
         </div>
         <button type="button" class="button small textual --jb-notification-dismiss">{{ __('messages.bagla') }}</button>
      </div>
   </div>
   @endif
   @if(session('mesaj3'))
   <div class="notification green">
         <div class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0">
         <div>
            <span class="icon"><i class="mdi mdi-message-reply-text"></i></span>
            <b>{{session('mesaj3')}}</b>
         </div>
         <button type="button" class="button small textual --jb-notification-dismiss">{{ __('messages.bagla') }}</button>
         </div>
      </div>
   @endif

   <div class="card mb-6" id="f2">
      <div class="field grouped" >
         <div class="control">
            <a href="#" button onclick="geri()" class="button red">
             {{ __('messages.geridon') }}
               </button>
            </a>
         </div>
      </div> 
      <header class="card-header">
         <p class="card-header-title">
            <span class="icon"><i class="mdi mdi-chess-queen"></i></span>
            {{ __('messages.isdifadeciler') }}
         </p>
      </header>
      <div class="card-content">
         <form method="post" action="{{route('AUgonder')}}" enctype="multipart/form-data">
            @csrf
            <!--File upload START-->
               <div class="field">
                  <label class="label">{{ __('messages.foto') }}:</label>
                  <div class="field-body">
                        <div class="field file">
                           <label class="upload control">
                              <a class="button blue">
                              {{ __('messages.logoyuk') }}
                              </a>
                              <input type="file" name="Ufoto" required="">
                           </label>
                        </div>
                  </div>
               </div>
            <!--File upload END-->
            <div class="field">
               <label class="label">{{ __('messages.ad') }}:</label>
               <div class="field-body">
                  <div class="field">
                     <div class="control icons-left">
                        <input class="input" type="text" placeholder="{{ __('messages.adyaz') }}..." name="ad" required="">
                        <span class="icon left"><i class="mdi mdi-chess-queen"></i></span>
                     </div>
                  </div>
               </div>
            </div>

            <div class="field">
               <label class="label">{{ __('messages.soyad') }}:</label>
               <div class="field-body">
                  <div class="field">
                     <div class="control icons-left">
                        <input class="input" type="text" placeholder="{{ __('messages.soyadyaz') }}..." name="soyad" required="">
                        <span class="icon left"><i class="mdi mdi-chess-queen"></i></span>
                     </div>
                  </div>
               </div>
            </div>

            <div class="field">
               <label class="label">{{ __('messages.tel') }}:</label>
               <div class="field-body">
                  <div class="field">
                     <div class="control icons-left">
                        <input class="input" type="text" placeholder="+994(050) xxx xx xx" name="telefon" required="">
                        <span class="icon left"><i class="mdi mdi-chess-queen"></i></span>
                     </div>
                  </div>
               </div>
            </div>

            <div class="field">
               <label class="label">{{ __('messages.email') }}:</label>
               <div class="field-body">
                  <div class="field">
                     <div class="control icons-left">
                        <input class="input" type="text" placeholder="xxx@mail/gmail.com" name="email" required="">
                        <span class="icon left"><i class="mdi mdi-chess-queen"></i></span>
                     </div>
                  </div>
               </div>
            </div>

            <div class="field spaced">
                <label class="label">{{ __('messages.parol') }}:</label>
                <p class="control icons-left">
                  <input class="input" type="password" name="password" placeholder="{{ __('messages.pyaz') }}..." required="">
                  <span class="icon is-small left"><i class="mdi mdi-asterisk"></i></span>
                </p>
              </div>
 
              <div class="field spaced">
                <label class="label">{{ __('messages.tparol') }}:</label>
                <p class="control icons-left">
                  <input class="input" type="password" name="tparol" placeholder="{{ __('messages.tpyaz') }}..." required="">
                  <span class="icon is-small left"><i class="mdi mdi-asterisk"></i></span>
                </p>
                <p class="help">
                  {{ __('messages.peyp') }} <br>
                  {{ __('messages.logkec') }} 
                </p>
              </div>

            <div class="field grouped">
               <div class="control">
                  <button type="submit" class="button green">
                  {{ __('messages.daxilet') }}
                  </button>
               </div>
            </div>       
         </form> 
      </div>
   </div>
   
   <script>
      document.getElementById('f2').style.display = 'none'
      function daxilet(){
         document.getElementById('f1').style.display = 'none'
         document.getElementById('f2').style.display = 'block'
         document.getElementById('f3').style.display = 'none'
      }

      function geri(){
         document.getElementById('f1').style.display = 'block'
         document.getElementById('f2').style.display = 'none'
         document.getElementById('f3').style.display = 'none'
      }

      function edit(){
         document.getElementById('f1').style.display = 'none'
         document.getElementById('f2').style.display = 'none'
         document.getElementById('f3').style.display = 'block'
      }
   </script>  
    
   @isset($sil_id)
   <div id="sample-modal" class="modal active">
   <div class="modal-background --jb-modal-close"></div>
   <div class="modal-card">
      <header class="modal-card-head">
         <p class="modal-card-title"><b>{{ __('messages.silmesaji') }}</b></p>
      </header>
      <section class="modal-card-body">
         <p>{{ __('messages.Asiz?') }} <b>{{$user}}</b> {{ __('messages.Asil?') }}</p>
         
      </section>
      <footer class="modal-card-foot">
         <a href="{{route('admin')}}" button class="button --jb-modal-close">{{ __('messages.yox') }}</button></a>
         <a href="{{route('AUyes',$sil_id)}}"button class="button red --jb-modal-close">{{ __('messages.he') }}</button></a>
      </footer>
   </div>
   </div>
   @endisset

<!--
   @isset($edit)
   <div class="card mb-6" id="f3">
      <header class="card-header">
         <p class="card-header-title">
            <span class="icon"><i class="mdi mdi-chess-queen"></i></span>
            {{ __('messages.isdifadeciler') }}
         </p>
      </header>
      <div class="card-content">
         <form method="post" action="{{route('AUupdate',$edit->id)}}" enctype="multipart/form-data">
            @csrf
            
               <div class="field">
                  <label class="label">{{ __('messages.foto') }}:</label>
                  <div class="field-body">
                        <div class="field file">
                           <label class="upload control">
                              <a class="button blue">
                              {{ __('messages.logoyuk') }}
                              </a>
                              <input type="file" name="Ufoto">
                           </label>
                        </div>
                  </div>
               </div>
            
            <div class="field">
               <label class="label">{{ __('messages.ad') }}:</label>
               <div class="field-body">
                  <div class="field">
                     <div class="control icons-left">
                        <input class="input" type="text" value="{{$edit->ad}}" name="ad" required="">
                        <span class="icon left"><i class="mdi mdi-chess-queen"></i></span>
                     </div>
                  </div>
               </div>
            </div>

            <div class="field">
               <label class="label">{{ __('messages.soyad') }}:</label>
               <div class="field-body">
                  <div class="field">
                     <div class="control icons-left">
                        <input class="input" type="text" value="{{$edit->soyad}}" name="soyad" required="">
                        <span class="icon left"><i class="mdi mdi-chess-queen"></i></span>
                     </div>
                  </div>
               </div>
            </div>

            <div class="field">
               <label class="label">{{ __('messages.tel') }}:</label>
               <div class="field-body">
                  <div class="field">
                     <div class="control icons-left">
                        <input class="input" type="text" value="{{$edit->telefon}}" name="telefon" required="">
                        <span class="icon left"><i class="mdi mdi-chess-queen"></i></span>
                     </div>
                  </div>
               </div>
            </div>

            <div class="field">
               <label class="label">{{ __('messages.email') }}:</label>
               <div class="field-body">
                  <div class="field">
                     <div class="control icons-left">
                        <input class="input" type="text" value="{{$edit->email}}" name="email" required="">
                        <span class="icon left"><i class="mdi mdi-chess-queen"></i></span>
                     </div>
                  </div>
               </div>
            </div>

            <div class="field spaced">
                <label class="label">  {{ __('messages.parol') }}</label>
                <p class="control icons-left">
                    <input class="input" type="password" name="password">
                    <span class="icon is-small left"><i class="mdi mdi-asterisk"></i></span>
                </p>
            </div>

            <div class="field grouped">
               <div class="control">
                  <button type="submit" class="button green">
                  {{ __('messages.daxilet') }}
                  </button>
               </div>
               <a href="{{route('admin')}}"><button type="button" class="button red">
                     {{ __('messages.legvet') }}
                     </button></a>
            </div>       
         </form> 
      </div>
   </div>
   @endisset
   -->

   <section class="section main-section">
    <div class="grid gap-6 grid-cols-1 md:grid-cols-3 mb-6">
      <div class="card">
        <div class="card-content">
          <div class="flex items-center justify-between">
            <div class="widget-label">
              <h3>
              {{ __('messages.isdifadeciler') }}
              </h3>
              <h1>
              {{$data->count()}}
              </h1>
            </div>
            <span class="icon widget-icon text-green-500"><i class="mdi mdi-chess-queen mdi-48px"></i></span>
          </div>
        </div>
      </div>
    </div>
  </section>

   <div class="field grouped" id="f1">
      <div class="control">
         <a href="#" button onclick="daxilet()" class="button green">
         {{ __('messages.yenisinielave') }}
            </button>
         </a>
      </div>
   </div> 

   <!--CEDVEL START-->
   <div class="card has-table">
         <header class="card-header">
         <p class="card-header-title">
            <span class="icon"><i class="mdi mdi-chess-queen"></i></span>
            {{ __('messages.isdifadeciler') }}
         </p>
         <a href="{{route('brands')}}" class="card-header-icon">
            <span class="icon"><i class="mdi mdi-reload"></i></span>
         </a>
         </header>
         <div class="card-content">
            <div class="table-responsive">
               <table id="cedvel">
                  <thead>
                  <tr>
                     <th><a href="#"><span class="icon">#</span></a></th>
                     <th>{{ __('messages.foto') }}</th>
                     <th>{{ __('messages.ad') }}</th>
                     <th>{{ __('messages.soyad') }}</th>
                     <th>{{ __('messages.tel') }}</th>
                     <th>{{ __('messages.email') }}</th>
                     <th>{{ __('messages.tarix') }}</th>
                     <th></th>
                  </tr>
                  </thead>
                  <tbody>
                  {{--
                  @php
                  $i = ($data->currentpage() * 5) - 5
                  @endphp
                  --}}
                  
                   @php
                  $i = 0;
                  @endphp

                  @foreach($data as $info)
                     <tr>
                        <td>{{$i+=1}}.</td>
                        <td><img src="{{url($info->Ufoto)}}" width="100" height="50"></td>
                        <td>{{$info->ad}}</td>
                        <td>{{$info->soyad}}</td>
                        <td>{{$info->telefon}}</td>
                        <td>{{$info->email}}</td>
                        <td>{{$info->created_at}}</td>
                        <td class="actions-cell">
                        <div class="buttons right nowrap">
                           <a href="{{route('AUsil',$info->id)}}"><button class="button small red --jb-modal"  type="button">
                              <span class="icon"><i class="mdi mdi-trash-can"></i></span>
                              </button></a>
                              @if($info->admin_block==0)
                              <a href="{{route('AUblock',$info->id)}}"><button class="button small warning --jb-modal"  type="button">
                              <span class="icon">  {{ __('messages.block') }}</span>
                              </button></a>
                              @else
                              <a href="{{route('AUopen',$info->id)}}"><button class="button small green --jb-modal"  type="button">
                              <span class="icon">  {{ __('messages.unblock') }}</span>
                              </button></a>
                              @endif
                        </div>
                        </td>
                     </tr>
                  @endforeach
                  </tbody>
               </table>
            </div>
            {{--
            <div class="table-pagination">
               <div class="flex items-center justify-between">
               {!! $data->links() !!}
               </div>
            </div>
            --}}
        
         </div>
      </div>
</section>
 

@endsection