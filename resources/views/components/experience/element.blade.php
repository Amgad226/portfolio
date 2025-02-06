   <article>

       <div style="display:flex;  flex-direction: row; width:100%" >
           <div style="width: 20%">

               @component('components.icon', [
                      'img' => './assets/checkmark.png',
                //    'img' => './assets/check.png',
               ])
               @endcomponent
           </div>
           <div style="width: 80%">
                   <h3>{{ $title }}</h3>

           </div>
   </article>
