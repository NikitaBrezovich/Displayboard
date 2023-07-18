<div class="row text-center">
    <div class="d-flex col-12 mb-5" style="margin-top:150px; margin-left: 150px;">
        <div class="col-6 text-left">
            <h2 style="font-size: 75px;">{{$slide->eventname}}</h2>
        </div>
        <div class="col-4 mt-3">
            <div>
                <p class="text-white text-left">{{$slide->text}}</p>
            </div>
        </div>
    </div>
    <div class="d-flex" style="margin-left: 150px">
        <div class="col-3 d-flex flex-row" style="margin-right: 100px;">
            <svg style="margin-right: 20px;" xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 158 158.193">
                <g id="calendar" transform="translate(4 4)">
                  <rect id="Rechteck_23" data-name="Rechteck 23" width="150" height="137.142" rx="1" transform="translate(0 12.857)" fill="none" stroke="#d1b47f" stroke-linecap="round" stroke-linejoin="round" stroke-width="8"/>
                  <line id="Linie_23" data-name="Linie 23" y2="32.571" transform="translate(32.571 0)" fill="none" stroke="#d1b47f" stroke-linecap="round" stroke-linejoin="round" stroke-width="8"/>
                  <line id="Linie_24" data-name="Linie 24" y2="32.571" transform="translate(117.429 0)" fill="none" stroke="#d1b47f" stroke-linecap="round" stroke-linejoin="round" stroke-width="8"/>
                  <line id="Linie_25" data-name="Linie 25" x2="150" transform="translate(0 45.857)" fill="none" stroke="#d1b47f" stroke-linecap="round" stroke-linejoin="round" stroke-width="8"/>
                  <line id="Linie_26" data-name="Linie 26" y2="104.482" transform="translate(75.097 45.711)" fill="none" stroke="#d1b47f" stroke-linecap="round" stroke-linejoin="round" stroke-width="8"/>
                  <line id="Linie_27" data-name="Linie 27" y2="104.482" transform="translate(35.916 45.711)" fill="none" stroke="#d1b47f" stroke-linecap="round" stroke-linejoin="round" stroke-width="8"/>
                  <line id="Linie_28" data-name="Linie 28" y2="104.482" transform="translate(114.278 45.711)" fill="none" stroke="#d1b47f" stroke-linecap="round" stroke-linejoin="round" stroke-width="8"/>
                  <line id="Linie_29" data-name="Linie 29" x2="150" transform="translate(0 98.143)" fill="none" stroke="#d1b47f" stroke-linecap="round" stroke-linejoin="round" stroke-width="8"/>
                  <line id="Linie_30" data-name="Linie 30" x2="150" transform="translate(0 72)" fill="none" stroke="#d1b47f" stroke-linecap="round" stroke-linejoin="round" stroke-width="8"/>
                  <line id="Linie_31" data-name="Linie 31" x2="150" transform="translate(0 124.285)" fill="none" stroke="#d1b47f" stroke-linecap="round" stroke-linejoin="round" stroke-width="8"/>
                </g>
              </svg>
            <h3 style="font-size: 40px; paddimg-left:10px">{{$slide->date}}</h3>
        </div>
        <div class="col-2 d-flex flex-row" style="margin-right:120px;">
            <svg style="margin-right: 20px; color:#D1B47F;" xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
                <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"/>
              </svg>
            <h3 style="font-size: 40px">{{$slide->time}}</h3>
        </div>
        <div class="col-3 d-flex flex-row">
            <svg style="margin-right: 20px;" xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 160.11 160.11">
                <g id="location" transform="translate(4.5 4.5)">
                  <path id="Pfad_49" data-name="Pfad 49" d="M8.5,26.343A22.843,22.843,0,1,0,31.343,3.5,22.843,22.843,0,0,0,8.5,26.343Z" transform="translate(44.212 16.58)" fill="none" stroke="#d1b47f" stroke-linecap="round" stroke-linejoin="round" stroke-width="10"/>
                  <path id="Pfad_50" data-name="Pfad 50" d="M49.884.5A44.745,44.745,0,0,1,94.624,45.239c0,20.989-32.254,73.006-41.992,88.226a3.263,3.263,0,0,1-5.5,0C37.4,118.245,5.145,66.242,5.145,45.246A44.741,44.741,0,0,1,49.891.5Z" transform="translate(25.671)" fill="none" stroke="#d1b47f" stroke-linecap="round" stroke-linejoin="round" stroke-width="10"/>
                  <path id="Pfad_51" data-name="Pfad 51" d="M108.188,19.7c25.114,2.115,42.423,6.585,42.423,11.748,0,7.212-33.6,13.053-75.055,13.053S.5,38.66.5,31.448c0-5.156,17.2-9.614,42.148-11.748" transform="translate(0 106.11)" fill="none" stroke="#d1b47f" stroke-linecap="round" stroke-linejoin="round" stroke-width="10"/>
                </g>
            </svg>
            <h3 style="font-size: 40px">{{$slide->place}}</h3>
        </div>
    </div>
</div>
